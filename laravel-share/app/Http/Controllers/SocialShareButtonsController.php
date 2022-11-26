<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    //

    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            // 'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'https://github.com/jorenvh/laravel-share',
            'This is my first laravel social media share test',
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
