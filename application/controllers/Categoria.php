<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // Load session
        $this->load->library('session');
        // Load Pagination library
        $this->load->library('pagination');
        // Load model
        $this->load->model('categoria_model');
    }

    public function index($id)
    {
        redirect('index.php/Categoria/loadRecord');

        $data['titulo'] = 'Categorias';
        $data['pagina'] = 'categoria/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        // tree of categories for menu
        $treeOfCategories = $this->treeOfCategories();
        $data['treeOfCategories'] = $treeOfCategories;

        // Listado de productos
        $productos = $this->categoria_model->getProductosByTipoCategoria();
        if (!empty($id)) {
            $categoryId = $this->uri->segment(5);

            $where = array(
                'typeCategoryId' => $id,
                'categoryId' => !empty($categoryId) ? $categoryId : 0,
            );

            $productos = $this->categoria_model->getProductosByTipoCategoria($where);
            //redirect(base_url('categoria'), 'refresh');
        }
        $data['result'] = $productos;

        $this->load->view('layout/layout', $data);
    }

    public function marca($id)
    {
        $data['titulo'] = 'Categorias';
        $data['pagina'] = 'categoria/index';

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
            $arrayArticulosMarca = $this->categoria_model->getProductosByCategoria($id);
            $data['arrayArticulosMarca'] = $arrayArticulosMarca;
            $this->load->view('layout/marca', $data);
        }
    }

    public function test()
    {
        echo "<pre>";
        print_r($this->treeOfCategories());
        echo "</pre>";
        die();
    }

    public function treeOfCategories()
    {
        $categories = $this->categoria_model->getCategories();
        $types = $this->categoria_model->getTypeCategories();
        $treeOfCategories = array();

        //echo "<pre>";
        //print_r($categories);
        //echo "</pre>";

        foreach ($types as $type) {
            $treeOfCategories[$type->cod_tip_categoria] = array();
            $treeOfCategories[$type->cod_tip_categoria]['name'] = $type->des_tip_categoria;
            $treeOfCategories[$type->cod_tip_categoria]['subcategories'] = array();
        }

        foreach ($categories as $category) {
            $typeId = $category->cod_tip_categoria;
            $categoryId = $category->cod_categoria;
            $treeOfCategories[$typeId]['subcategories'][$categoryId] = array();
            $treeOfCategories[$typeId]['subcategories'][$categoryId]['name'] = $category->des_categoria;
        }

        return $treeOfCategories;
    }

    public function loadRecord($rowno = 0)
    {
        // view
        $data['titulo'] = 'Categorias';
        $data['pagina'] = 'categoria/index';

        // menu header
        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        // tree of categories for menu
        $treeOfCategories = $this->treeOfCategories();
        $data['treeOfCategories'] = $treeOfCategories;

        // Search text
        $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }

        // Row per page
        $rowperpage = 5;

        // Row position
        if ($rowno != 0) {
            $rowno = ($rowno - 1) * $rowperpage;
        }

        // All records count
        $allcount = $this->categoria_model->getrecordCount($search_text);

        // Get records
        $users_record = $this->categoria_model->getData($rowno, $rowperpage, $search_text);

        // Pagination Configuration
        $config['base_url'] = base_url() . 'index.php/categoria/loadRecord';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        // Initialize
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record; // products
        $data['row'] = $rowno;
        $data['search'] = $search_text;

        // Load view
        $this->load->view('layout/layout', $data);
    }

}
