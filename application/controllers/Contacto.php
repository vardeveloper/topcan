<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model');
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->library(array('session', 'form_validation', 'Mailer'));
    }

    public function index()
    {
        $data['titulo'] = 'Contacto';
        $data['pagina'] = 'contacto/index';

        $arrayCategorias = $this->categoria_model->getAll();
        $data['arrayCategorias'] = $arrayCategorias;

        // form contact
        $this->form_validation->set_rules('name', 'Nombre Completo', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Correo Electrónico', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Teléfono/ Celular', 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject', 'Asunto', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Mensaje', 'trim|required|xss_clean');

//        $name = $this->input->post('name');
//        $email = $this->input->post('email');
//        $phone = $this->input->post('phone');
//        $subject = $this->input->post('subject');
//        $message = $this->input->post('message');
        
        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('layout/layout', $data);
            
        } else {

            $this->enviar($_POST);
            $this->session->set_flashdata('send', TRUE);
            redirect('contacto');
            
        }

    }

    public function enviar($data)
    {
//        $config = Array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'smtp.mailtrap.io',
//            'smtp_port' => 2525,
//            'smtp_user' => '5264216cfde208',
//            'smtp_pass' => 'b7a3e22883d91f',
//            'crlf' => "\r\n",
//            'newline' => "\r\n",
//            'mailtype' => 'html',
//            'wordwrap' => TRUE,
//            'charset' => 'utf-8'
//        );
//
////        $config = array(
////            'protocol' => 'smtp',
////            'smtp_host' => 'smtp.googlemail.com',
////            'smtp_user' => 'correo@gmail.com', //Su Correo de Gmail Aqui
////            'smtp_pass' => 'password', // Su Password de Gmail aqui
////            'smtp_port' => '465',
////            'smtp_crypto' => 'ssl',
////            'mailtype' => 'html',
////            'wordwrap' => TRUE,
////            'charset' => 'utf-8'
////        );
//
//        $this->load->library('email', $config);
//
//        $msg = $this->load->view("email/contacto", $data, true);
//        
//        //$this->email->set_newline("\r\n");
//        $this->email->from('vardeveloper@gmail.com');
//        $this->email->subject('Contacto');
//        $this->email->message($msg);
//        $this->email->to('vardeveloper@gmail.com');
//        if ($this->email->send(TRUE)) {
//            echo "enviado <br/>";
//            echo $this->email->print_debugger(array('headers'));
//        } else {
//            echo "fallo <br/>";
//            echo "error: " . $this->email->print_debugger(array('headers'));
//        }

        ########################################################################

        $config = array();
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8'; // iso-8859-1
        $config['wordwrap'] = TRUE;

        $this->load->library('email');
        $this->email->initialize($config);

        $email = "vardeveloper@gmail.com";
        $subject = "Contacto";

        $msg = $this->load->view("email/contacto", $data, true);

        $this->email
                ->from('vardeveloper@gmail.com')
                ->to($email)
                ->subject($subject)
                ->message($msg)
                ->set_mailtype('html')
                ->send();
    }

    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-ZñÑáÁéÉíÍóÓúÚ ]+$/", $str)) {
            $this->form_validation->set_message('alpha_space_only', 'El campo %s no es válido');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
