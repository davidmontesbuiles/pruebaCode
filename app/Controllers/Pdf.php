<?php

namespace App\Controllers;



class Pdf extends BaseController
{
    public function index()
    {
        return view('pdf');
    }

    public function pdf(){
        
        $mpdf = new \Mpdf\Mpdf();
        $html = view('pdf',[]);
        $mpdf->WriteHTML($html);
        $this->response->setHeader('Content-Type', 'application/pdf');
        $mpdf->Output('arjun.pdf','I'); 
    }

}