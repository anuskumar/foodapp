<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;
    protected $fillable = [
        'dishes_category',
        'dishes_subcategory',
        'dishes_food_type',
        'dishes_name',
        'dishes_image',
        'dishes_description',
        'dishes_added_by',
    ];
}
