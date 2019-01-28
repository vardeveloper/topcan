<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria_Model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $arrayCategorias = $this->db->get_where('tipo_categoria')->result();

        return $arrayCategorias;
    }

    public function getMarcas(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '1');
        $arrayMarcas =  $this->db->get()->result();
        return $arrayMarcas;
    }

    public function getColor(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '2');
        $arrayColores =  $this->db->get()->result();
        return $arrayColores;
    }

    public function getEstacion(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '3');
        $arrayEstaciones =  $this->db->get()->result();
        return $arrayEstaciones;
    }

    public function getDisfraz(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '4');
        $arrayDisfraces =  $this->db->get()->result();
        return $arrayDisfraces;
    }

    public function getMaterial(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '5');
        $arrayMateriales =  $this->db->get()->result();
        return $arrayMateriales;
    }

    public function getAccesorio(){
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '6');
        $arrayAccesorios =  $this->db->get()->result();
        return $arrayAccesorios;
    }

    public function getArticuloId($noticiaId){
        $this->db->select('*')
        ->from('producto p')
        ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto' )
        ->where('pc.cod_categoria', $noticiaId);

        $noticiaDetalle =  $this->db->get()->result();
        //print_r($noticiaDetalle);
        return $noticiaDetalle;
    }
    
    public function getArticuloMarca($noticiaId){
        $this->db->select('*')
        ->from('producto p')
        ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto' )
        ->where('pc.cod_categoria', $noticiaId);

        $arrayArticulosMarca =  $this->db->get()->result();
        //print_r($arrayArticulosMarca);
        return $arrayArticulosMarca;
    }

}