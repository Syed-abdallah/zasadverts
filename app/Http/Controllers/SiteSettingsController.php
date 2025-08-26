<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;

class SiteSettingsController extends Controller
{
   public function update(Request $request)
{
    $request->validate([
        'website_name' => 'nullable|string|max:50',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name_color' => 'nullable|string|regex:/^#[a-f0-9]{6}$/i',

        // Social Media
        'facebook_url' => 'nullable|url',
        'twitter_url' => 'nullable|url',
        'instagram_url' => 'nullable|url',
        'indeed_url' => 'nullable|url',
        'youtube_url' => 'nullable|url',
        'video_url' => 'nullable|url',

        // Contact
        'phone_number' => 'nullable|string|max:20',
        'phone_number_sec' => 'nullable|string|max:20',
        'email_address' => 'nullable|email',
        'email_address_second' => 'nullable|email',
        'address' => 'nullable|string',
        'city' => 'nullable|string|max:100',

        // App Stores
        'app_store_url' => 'nullable|url',
        'play_store_url' => 'nullable|url',

        // Bank
        'bank_name' => 'nullable|string|max:100',
        'account_name' => 'nullable|string|max:100',
        'iban_number' => 'nullable|string|max:34',
        'branch_code' => 'nullable|string|max:20',
    ]);

    $settings = SiteSetting::first();

    // Basic
    $settings->website_name = $request->website_name;
    $settings->name_color = $request->name_color;

    // Social Media
    $settings->facebook_url = $request->facebook_url;
    $settings->twitter_url = $request->twitter_url;
    $settings->instagram_url = $request->instagram_url;
    $settings->indeed_url = $request->indeed_url;
    $settings->youtube_url = $request->youtube_url;
    $settings->video_url = $request->video_url;

    // Contact Info
    $settings->phone_number = $request->phone_number;
    $settings->phone_number_sec = $request->phone_number_sec;
    $settings->email_address = $request->email_address;
    $settings->email_address_second = $request->email_address_second;
    $settings->address = $request->address;
    $settings->city = $request->city;

    // App Store Links
    $settings->app_store_url = $request->app_store_url;
    $settings->play_store_url = $request->play_store_url;

    // Bank Info
    $settings->bank_name = $request->bank_name;
    $settings->account_name = $request->account_name;
    $settings->iban_number = $request->iban_number;
    $settings->branch_code = $request->branch_code;

    // Logo
    if ($request->hasFile('logo')) {
        if ($settings->logo_path && file_exists(public_path($settings->logo_path))) {
            unlink(public_path($settings->logo_path));
        }

        $logo = $request->file('logo');
        $filename = 'site-logo-' . time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('uploads'), $filename);

        $settings->logo_path = '/uploads/' . $filename;
    }

    $settings->save();

    session()->flash('toast', [
        'type'    => 'success',
        'message' => 'Settings updated successfully',
        'timer'   => 3000,
        'bar'     => true,
    ]);

    return back();
}

}