<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	public function index()
	{
        $data['titulo'] = 'SERVICIOS - Hostal Confort - Tacna - Perú';
        $data['pagina'] = 'servicios/index';
        $this->load->view('layout/layout', $data);
    }
    
}