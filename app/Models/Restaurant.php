<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_name',
        'restaurant_address',
        'restaurant_latitude',
        'restaurant_longitude',
        'restaurant_default_tax',
        'restaurant_email_id',
        'restaurant_currency',
        'restaurant_contact_number',
        'restaurant_image',
        'restaurant_description',
        'restaurant_opening_time',
        'restaurant_closing_time',
        'restaurant_added_by',
        'restaurant_avail_delivery',
        'restaurant_openclose_status',
        'restaurant_active_status',
    ];
}
