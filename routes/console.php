<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\DB;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// ─────────────────────────────────────────────────────────────────────────────
// Automated Backup Schedule
//
// Settings are stored in the `settings` table.
// The user can enable/disable and set the time via Admin → Backups page.
//
// IMPORTANT: We read directly from the DB here (not from cache) because:
// - The scheduler runs in a CLI process that may have an empty/stale cache.
// - Direct DB reads guarantee the time shown in the UI always matches
//   what the scheduler actually uses.
// ─────────────────────────────────────────────────────────────────────────────
$enabled = '0';
$time    = '02:00';

try {
    // Read directly from DB — reliable in both CLI and web contexts.
    $rows = DB::table('settings')
        ->whereIn('key', ['backup_schedule_enabled', 'backup_schedule_time'])
        ->pluck('value', 'key');

    $enabled = $rows->get('backup_schedule_enabled', '0');
    $time    = $rows->get('backup_schedule_time', '02:00');

    // Basic validation: must be a valid HH:MM time string
    if (!preg_match('/^\d{2}:\d{2}$/', $time)) {
        $time = '02:00';
    }
} catch (\Exception $e) {
    // Database unavailable — skip scheduling safely.
    $enabled = '0';
}

if ($enabled == '1') {
    // ── 1. Daily database backup ──────────────────────────────────────────────
    // Runs once per day at the configured time.
    // runInBackground()    → does not block the scheduler process.
    // withoutOverlapping() → prevents a second backup starting if one is still
    //                        running (lock expires after 30 minutes).
    Schedule::command('backup:run --only-db')
        ->dailyAt($time)
        ->runInBackground()
        ->withoutOverlapping(30);

    // ── 2. Daily cleanup — 5 minutes after backup ─────────────────────────────
    // Spatie's retention policy (defined in config/backup.php):
    //   keep_all_backups_for_days        = 7
    //   keep_daily_backups_for_days      = 16
    //   keep_weekly_backups_for_weeks    = 8
    //   keep_monthly_backups_for_months  = 4
    //   keep_yearly_backups_for_years    = 2
    $cleanTime = \Carbon\Carbon::createFromFormat('H:i', $time)
        ->addMinutes(5)
        ->format('H:i');

    Schedule::command('backup:clean')
        ->dailyAt($cleanTime)
        ->withoutOverlapping(10);
}
