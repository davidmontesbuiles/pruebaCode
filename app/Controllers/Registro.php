<?php

namespace App\Controllers;

use App\Models\codeWeb;

class Registro extends BaseController
{
    public function index()
    {
        return view('registro');
    }

    public function guardar(){
        
        $cliente = new CodeWeb();

        $datos = ['Nombres' => $this->request->getVar('nombre'),'Apellidos' => $this->request->getVar('apellido'),'Email' => $this->request->getVar('email'),'Identificacion' => $this->request->getVar('identificacion')];

        $cliente->insert($datos);

        return $this->response->redirect(site_url('/verClientes'));
    }

}
