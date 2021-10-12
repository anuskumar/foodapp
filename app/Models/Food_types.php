<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_types extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_types_name',
        'food_types_added_by',
        'food_types_image',
    ];
}
