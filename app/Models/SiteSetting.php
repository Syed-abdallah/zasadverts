<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

      protected $fillable = [
        'website_name',
        'logo_path',
        'name_color',

        // Social Media
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'indeed_url',
        'youtube_url',
        'video_url',

        // Contact Info
        'phone_number',
        'phone_number_sec',
        'email_address',
        'email_address_second',
        'address',
        'city',

        // App Store Links
        'app_store_url',
        'play_store_url',

        // Bank Info
        'bank_name',
        'account_name',
        'iban_number',
        'branch_code'
    ];

    protected $attributes = [
        'website_name' => null,
        'name_color' => '#000000',

        // Social Media
        'facebook_url' => null,
        'twitter_url' => null,
        'instagram_url' => null,
        'indeed_url' => null,
        'youtube_url' => null,
        'video_url' => null,

        // Contact Info
        'phone_number' => null,
        'phone_number_sec' => null,
        'email_address' => null,
        'email_address_second' => null,
        'address' => null,
        'city' => null,

        // App Store Links
        'app_store_url' => null,
        'play_store_url' => null,

        // Bank Info
        'bank_name' => null,
        'account_name' => null,
        'iban_number' => null,
        'branch_code' => null,
    ];
}