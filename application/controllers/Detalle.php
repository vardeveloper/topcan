<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
        $this->load->model('detalle_model');
    }

    public function index($productoId)
    {
        $data['titulo'] = 'Detalle';
        $data['pagina'] = 'detalle/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;
        $data['retornar'] = @$_SERVER['HTTP_REFERER'];

        $productoDetalle = $this->detalle_model->getProductoId($productoId);

        if (is_null($productoDetalle)) {
            redirect(base_url('categoria'), 'refresh');
        } else {
            $data['productoDetalle'] = $productoDetalle;
        }

        $this->load->view('layout/layout', $data);
    }

}
