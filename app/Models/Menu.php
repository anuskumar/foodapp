<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_restaurants',
        'menu_dish',
        'menu_price',
        'menu_selling_price',
        'menu_featured',
        'menu_todays_special',
        'menu_description',
        'menu_deliverable',
        'menu_available',
        'menu_added_by',
    ];
}
