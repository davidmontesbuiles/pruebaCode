<?php

namespace App\Controllers;

use App\Models\codeWeb;

class Actualizar extends BaseController
{
    public function index()
    {
        return view('verClientes');
    }

    public function actualizar(){
        
        $cliente = new CodeWeb();

        $datos = ['Nombres' => $this->request->getVar('nombre'),'Apellidos' => $this->request->getVar('apellido'),'Email' => $this->request->getVar('email'),'Identificacion' => $this->request->getVar('identificacion')];

        $id = $this->request->getVar('idC');

        $cliente->update($id,$datos);

        return $this->response->redirect(site_url('/verClientes'));
    }

}
