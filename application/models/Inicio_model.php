<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_Model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $arrayProductosHome = $this->db->get_where('producto')->result();

        return $arrayProductosHome;
    }
}