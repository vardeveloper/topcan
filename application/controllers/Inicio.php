<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
        $this->load->model('inicio_model');

        $this->load->helper(array('form','url','security'));
        //$this->load->library(array('session', 'form_validation', 'Mailer'));
        
    }

	public function index()
	{
        $data['titulo'] = 'Top Can';
        $data['pagina'] = 'inicio/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        $arrayProductosHome = $this->inicio_model->getAll();
        $data['arrayProductosHome'] = $arrayProductosHome;

        $this->load->view('layout/layout', $data);

        // $this->form_validation->set_rules('arive', 'Fecha Llegada', 'trim|required|xss_clean');
        // $this->form_validation->set_rules('departure', 'Fecha Llegada', 'trim|required|xss_clean');
        // $this->form_validation->set_rules('room', 'Tipo Habitación', 'trim|required|xss_clean');
        // $this->form_validation->set_rules('name', 'Nombre Completo', 'trim|required|xss_clean|callback_alpha_space_only');
        // $this->form_validation->set_rules('email', 'Correo Electrónico', 'trim|required|valid_email');
        // $this->form_validation->set_rules('phone', 'Teléfono/ Celular', 'trim|required|xss_clean');
        
        // if ($this->form_validation->run() == FALSE)
        // {
        //     $this->load->view('layout/layout', $data);
        // }
        // else
        // {
        //     $inicio_arrive = $this->input->post('arive');
        //     $inicio_departure = $this->input->post('departure');
        //     $inicio_room = $this->input->post('room');
        //     $inicio_name = $this->input->post('name');
        //     $iniio_email = $this->input->post('email');
        //     $inicio_phone = $this->input->post('phone');

        //     $this->session->set_flashdata('inicio_arrive', $inicio_arrive );
        //     $this->session->set_flashdata('inicio_departure', $inicio_departure );
        //     $this->session->set_flashdata('inicio_room', $inicio_room );
        //     $this->session->set_flashdata('inicio_name', $inicio_name );
        //     $this->session->set_flashdata('iniio_email', $iniio_email );
        //     $this->session->set_flashdata('inicio_phone', $inicio_phone );

        //     redirect('habitaciones/'. $inicio_room );
        // }

    }

    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-ZñÑáÁéÉíÍóÓúÚ ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'El campo %s no es válido');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}