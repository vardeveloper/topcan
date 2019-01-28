<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

	public function index()
	{

        $arrayCategorias = $this->menu_model->getAll();

        $data['arrayCategorias'] = $arrayCategorias;

        $this->load->view('modules/main-menu', $data);
        //$this->load->view('layout/layout', $data);
    }
    
}