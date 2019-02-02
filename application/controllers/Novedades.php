<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Novedades extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
        $this->load->model('producto_model');
    }

    public function index()
    {
        $data['titulo'] = 'Novedades';
        $data['pagina'] = 'novedades/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        $getNovedades = $this->producto_model->getPageNovedades();
        $data['results'] = $getNovedades;

        $this->load->view('layout/layout', $data);
    }

}
