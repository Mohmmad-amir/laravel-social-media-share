read this file first as raw code
# laravel-social-media-share


How to Integrate Social Share Button in Laravel 9

Step 1: Download Laravel App
composer create-project --prefer-dist laravel/laravel {folder name}=> laravel-share

After the download laravel app then
Cd {folder name} =>cd laravel-share

Step 2: Add Laravel Share Package
composer require jorenvanhocht/laravel-share

Step 3: Register Laravel Share
<?php
  return [
    'providers' => [
        ...
        ...        
        Jorenvh\Share\Providers\ShareServiceProvider::class,
    ];
    'aliases' => [
        ...
        ...                
        'Share' => Jorenvh\Share\ShareFacade::class,
    ];
  ];

Hit this line in terminal 
php artisan vendor:publish --provider="Jorenvh\Share\Providers\ShareServiceProvider"


Step 4: Set Up New Controller
php artisan make:controller SocialShareButtonsController
Controller code
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SocialShareButtonsController extends Controller
{
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        
        return view('posts', compact('shareComponent'));
    }
    
}






Step 5: Create Route
Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);


Step 6: Add Social Media Share Buttons in View
{!! $shareComponent !!}
Step 7: Start Application
Php artisan serve

