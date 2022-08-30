<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    //
    public function index(){
        //$comics = Comic::all(); 
        $comics = config('comics');
        $data = [
            'comics' => $comics,
        ];

        
        return view('home', $data);
    }
}
