<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function index(){
        $boi =  TentangKami::first();
            
            
            // $latestNews = News::where('is_published', true)
            //                  ->orderBy('publish_date', 'desc')
            //                  ->take(5)
            //                  ->get();
            
            return view('welcome', compact('boi'));
    }
}
