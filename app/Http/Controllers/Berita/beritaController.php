<?php

namespace App\Http\Controllers\Berita;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class beritaController extends Controller
{
    public function index(){
        return view('Berita.homeBerita');
        
    }
}
