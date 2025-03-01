<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function index(){
        $boi =  TentangKami::latest()->first();
        $visi = VisiMisi::latest()->first();
            
            return view('welcome', compact('boi','visi'));
    }
}
