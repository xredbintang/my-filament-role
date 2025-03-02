<?php

namespace App\Http\Controllers;

use App\Models\DataMurid;
use App\Models\EkstraPilihan;
use App\Models\EkstraWajib;
use App\Models\Fasilitas;
use App\Models\Kegiatan;
use App\Models\TentangKami;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function index(){
        $boi = TentangKami::latest()->first(); 
        $visi = VisiMisi::latest()->first(); 
        $ekstraWajib = EkstraWajib::get(); 
        $ekstraPilihan = EkstraPilihan::get();
        $fasilitas = Fasilitas::all();
        $kegiatan = Kegiatan::all();
        $dataMurid = DataMurid::all();
            
        return view('welcome', compact('boi', 'visi', 'ekstraWajib', 'ekstraPilihan', 'fasilitas', 'kegiatan','dataMurid'));
    }
    
}
