<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Models\UserSearch;

class welcomeController extends BaseController
{
    public function index()
    {
        $url = 'https://api.giphy.com/v1/gifs/trending?api_key=Kd8onhQxC1F98MzPsM1hGJyQYx1nXG1e';
        $data  = file_get_contents($url);
        $json = json_decode($data);
        return view('welcome')->with(['json' => $json]);
        
        
    }
   
}