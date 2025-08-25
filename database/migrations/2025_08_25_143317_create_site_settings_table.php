<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
          $table->string('website_name')->nullable();
$table->string('name_color', 7)->default('#000000');
$table->string('logo_path')->nullable();

$table->string('facebook_url', 255)->nullable();
$table->string('twitter_url', 255)->nullable();
$table->string('instagram_url', 255)->nullable();
$table->string('indeed_url', 255)->nullable();
$table->string('youtube_url', 255)->nullable();

$table->string('phone_number', 20)->nullable(); // limited to 20 chars for phone
$table->string('phone_number_sec', 20)->nullable();

$table->string('email_address')->nullable();
$table->string('email_address_second')->nullable();

$table->text('address')->nullable(); // changed from string to text for full address
$table->string('city')->nullable();

$table->string('app_store_url', 255)->nullable();
$table->string('play_store_url', 255)->nullable();
$table->string('video_url', 255)->nullable();

$table->string('bank_name')->nullable();
$table->string('account_name')->nullable();
$table->string('iban_number', 34)->nullable(); // IBAN can go up to 34 characters
$table->string('branch_code', 20)->nullable();
            $table->timestamps();
        });

        // Insert default record
      DB::table('site_settings')->insert([
    'website_name' => null,
    'name_color' => '#000000',
    'logo_path' => null,
    'facebook_url' => null,
    'twitter_url' => null,
    'instagram_url' => null,
    'indeed_url' => null,
    'youtube_url' => null,
    'phone_number' => null,
    'phone_number_sec' => null,
    'email_address' => null,
    'email_address_second' => null,
    'address' => null,
    'city' => null,
    'app_store_url' => null,
    'play_store_url' => null,
    'video_url' => null,
    'bank_name' => null,
    'account_name' => null,
    'iban_number' => null,
    'branch_code' => null,
    'created_at' => now(),
    'updated_at' => now(),
]);

    }

    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
};