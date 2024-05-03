<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
