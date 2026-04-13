<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->after('name')->nullable()->constrained('roles')->onDelete('set null');
            $table->string('phone')->after('role_id')->nullable();
            $table->string('address')->after('email')->nullable();
            $table->string('city')->after('address')->nullable();
            $table->string('state')->after('city');
            $table->string('image')->after('state')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn(['role_id', 'phone', 'address', 'city', 'state', 'image', 'deleted_at']);
        });
    }
};
