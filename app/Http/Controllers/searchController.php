<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Models\UserSearch;

class searchController extends BaseController
{
    public function index()
    {
        // Get all the search log for specific user
        $search_logs = UserSearch::where('user_id',Auth::user()->id)->get();
        // Return the history view
        return view('history')->with(['search_logs' => $search_logs]);
    }

    public function store(Request $request){

        $user_search = new UserSearch();
        // check if user logged in & get his id
        if(Auth::check()){
            $user_id = \auth()->id();
        }
        $user_search->user_id = $user_id;
        $user_search->search_string = $request->input('query');
         // Save the new search log
         $user_search->save();
         $url = 'https://api.giphy.com/v1/gifs/trending?api_key=Kd8onhQxC1F98MzPsM1hGJyQYx1nXG1e';
         $data  = file_get_contents($url);
         $json = json_decode($data);
         $printed = array();
         // get the keyword to search
         $value = $request->input('query');
         //search on Api
         foreach ($json->data as $item) {
             if (strpos(strtolower($item->title), strtolower($value)) !== false) {
                array_push($printed, $item);
              } 
             
         }
         // Return the appropriate view
         return view('search')->with(['printed' => $printed]);
    }
  
   
}