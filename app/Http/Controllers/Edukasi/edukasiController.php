<?php

namespace App\Http\Controllers\Edukasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class edukasiController extends Controller
{
    public function index(){
        return view('Edukasi.homeEdukasi');
        
    }
}
