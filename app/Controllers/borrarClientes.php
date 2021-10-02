<?php

namespace App\Controllers;

use App\Models\codeWeb;

class borrarClientes extends BaseController
{
    public function index()
    {
        return view('verClientes');
    }

    public function borrar($id=null) {
        
        $cliente = new codeWeb();
       

        $cliente->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/verClientes'));
    }
}