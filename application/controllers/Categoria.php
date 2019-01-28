<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
        
    }

	public function index($noticiaId){

        $data['titulo'] = 'Categorias';
        $data['pagina'] = 'categoria/index';

        $arrayCategorias = $this->categoria_model->getAll();

        $noticiaDetalle = $this->categoria_model->getArticuloId($noticiaId);
        if (is_null($noticiaDetalle)) {
            redirect(base_url('categoria'), 'refresh');
        } else {
            $data['noticiaDetalle'] = $noticiaDetalle;
        }

        $arrayMarcas = $this->categoria_model->getMarcas();
        $data['arrayMarcas'] = $arrayMarcas;

        $arrayColores = $this->categoria_model->getColor();
        $data['arrayColores'] = $arrayColores;

        $arrayEstaciones = $this->categoria_model->getEstacion();
        $data['arrayEstaciones'] = $arrayEstaciones;

        $arrayDisfraces = $this->categoria_model->getDisfraz();
        $data['arrayDisfraces'] = $arrayDisfraces;

        $arrayMateriales = $this->categoria_model->getMaterial();
        $data['arrayMateriales'] = $arrayMateriales;

        $arrayAccesorios = $this->categoria_model->getAccesorio();
        $data['arrayAccesorios'] = $arrayAccesorios;

        $data['arrayCategorias'] = $arrayCategorias;

        $this->load->view('layout/layout', $data);
    }


    public function marca($noticiaId){

        $data['titulo'] = 'Categorias';
        $data['pagina'] = 'categoria/index';

        $arrayArticulosMarca = $this->categoria_model->getArticuloMarca($noticiaId);

        $arrayMarcas = $this->categoria_model->getMarcas();
        $data['arrayMarcas'] = $arrayMarcas;

        $arrayColores = $this->categoria_model->getColor();
        $data['arrayColores'] = $arrayColores;

        $arrayEstaciones = $this->categoria_model->getEstacion();
        $data['arrayEstaciones'] = $arrayEstaciones;

        $arrayDisfraces = $this->categoria_model->getDisfraz();
        $data['arrayDisfraces'] = $arrayDisfraces;

        $arrayMateriales = $this->categoria_model->getMaterial();
        $data['arrayMateriales'] = $arrayMateriales;

        $arrayAccesorios = $this->categoria_model->getAccesorio();
        $data['arrayAccesorios'] = $arrayAccesorios;

        if (is_null($arrayArticulosMarca)) {
            redirect(base_url('categoria'), 'refresh');
        } else {
            $data['arrayArticulosMarca'] = $arrayArticulosMarca;
            $this->load->view('layout/marca', $data);
        }

    }
    
}