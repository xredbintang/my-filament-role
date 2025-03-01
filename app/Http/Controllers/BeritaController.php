<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('berita', compact('berita'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detailberita', compact('berita'));
    }
}
