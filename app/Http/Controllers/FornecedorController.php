<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    $fornecedores ['Fornecedor 1'];
    
    public function index(){
        return view('admin.fornecedor.index', compact('fornecedores'));
    
    
    }
        
}
