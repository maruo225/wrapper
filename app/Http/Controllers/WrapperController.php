<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Html;

class WrapperController extends Controller
{
    public function zen()
    {
        return Http::get('https://api.github.com/zen');

    }
    public function emojis()
    {
        $json = Http::get('https://api.github.com/emojis')->json();
        return response()->json($json);
    }
    public function user()
    {
        $json = Http::get('https://api.github.com/users/maruo225')->json();
        return response()->json($json);
    }
    public function feed()
    {
        $json = Http::get('https://api.github.com/feeds')->json();
        return response()->json($json);
    }
    public function event()
    {
        $json = Http::get('https://api.github.com/events')->json();
        return response()->json($json);
    }
}
