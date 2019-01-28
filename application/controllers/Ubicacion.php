<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
    }
    
	public function index()
	{
        $data['titulo'] = 'Ubicacion';
        $data['pagina'] = 'ubicacion/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        $this->load->view('layout/layout', $data);
    }
    
}