<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'name', 'email', 'phone', 'address', 'city', 'image'];

    protected $appends = ['display_image'];

    public function getDisplayImageAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/placeholder.jpg');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
