<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'price', 'image', 'status'];

    protected $appends = ['display_image'];

    public function getDisplayImageAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/placeholder.jpg'); // Using system logo as default placeholder
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
