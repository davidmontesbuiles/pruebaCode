<?php

namespace App\Controllers;

use App\Models\codeWeb;

class verClientes extends BaseController
{
    public function index()
    {
        $codeWeb = new CodeWeb();
        $datos['clientes'] = $codeWeb->orderBy('Id','ASC')->findAll();
        
        return view('verClientes',$datos);
    }
}
