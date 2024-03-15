<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //MÉTODOS ACTIONS
    public function principal(){
        return view('site.sobrenos');
    }
}
