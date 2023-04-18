<?php

namespace App\Http\Controllers\Agenda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class agendaController extends Controller
{
    public function index(){
        return view('Agenda.homeAgenda');
        
    }
}
