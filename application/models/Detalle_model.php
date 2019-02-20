<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detalle_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // public function getAll()
    // {
    //     $arrayCategorias = $this->db->get_where('tipo_categoria')->result();
    //     return $arrayCategorias;
    // }

    public function getProductoId($productoId)
    {
        $this->db->select('*')
                ->from('producto')
                ->where('producto.cod_producto', $productoId);

        $productoDetalle = $this->db->get()->result();
        return $productoDetalle;
    }

}
