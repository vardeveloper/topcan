<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        $this->load->helper(array('form', 'url', 'security'));

        //$this->load->library(array('session', 'form_validation', 'Mailer'));
    }

    public function index()
    {
        // load model
        $this->load->model('categoria_model');
        $this->load->model('inicio_model');

        $data['titulo'] = 'Top Can';
        $data['pagina'] = 'inicio/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        $arrayProductosHome = $this->inicio_model->getAll();
        $data['arrayProductosHome'] = $arrayProductosHome;


        // init params
        $per_page = 12;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->inicio_model->get_total();

        $data["total_records"] = $total_records;

        if ($total_records > 0) {

            $config['base_url'] = base_url() . 'inicio/index/';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $per_page;
            $config['uri_segment'] = 3;

            // styling/html stuff
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            // primero
            $config['first_link'] = '&laquo; Primero';
            $config['first_tag_open'] = '<li class="prev page">';
            $config['first_tag_close'] = '</li>' . "\n";
            // ultimo
            $config['last_link'] = 'Último &raquo;';
            $config['last_tag_open'] = '<li class="next page">';
            $config['last_tag_close'] = '</li>' . "\n";
            // siguiente
            $config['next_link'] = 'Siguiente &rarr;';
            $config['next_tag_open'] = '<li class="next page">';
            $config['next_tag_close'] = '</li>' . "\n";
            // anterior
            $config['prev_link'] = '&larr; Anterior';
            $config['prev_tag_open'] = '<li class="prev page">';
            $config['prev_tag_close'] = '</li>' . "\n";
            // activo
            $config['cur_tag_open'] = '<li class="active"><a href="">';
            $config['cur_tag_close'] = '</a></li>';
            // page
            $config['num_tag_open'] = '<li class="page">';
            $config['num_tag_close'] = '</li>' . "\n";


            // build paging links
            $this->pagination->initialize($config);


            $data['results'] = $this->inicio_model->get_current_page_records($per_page, $page);

            $data["links"] = $this->pagination->create_links();
        }

        $this->load->view('layout/layout', $data);

    }

}
