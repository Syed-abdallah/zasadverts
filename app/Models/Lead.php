<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
       protected $fillable = [
        'first_name',
        'email',
        'Strategy_Services__c',
        'Services_Name__c',
        'products',
        'asin_url',
        'phone',
        'budget',
        'additional_comments',
    ];
    protected $casts = [
    'Services_Name__c' => 'array',
];
}
