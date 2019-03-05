<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categoria_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $arrayCategorias = $this->db->get_where('tipo_categoria')->result();

        return $arrayCategorias;
    }

    public function getMarcas()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '1');
        $arrayMarcas = $this->db->get()->result();
        return $arrayMarcas;
    }

    public function getColor()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '2');
        $arrayColores = $this->db->get()->result();
        return $arrayColores;
    }

    public function getEstacion()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '3');
        $arrayEstaciones = $this->db->get()->result();
        return $arrayEstaciones;
    }

    public function getDisfraz()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '4');
        $arrayDisfraces = $this->db->get()->result();
        return $arrayDisfraces;
    }

    public function getMaterial()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '5');
        $arrayMateriales = $this->db->get()->result();
        return $arrayMateriales;
    }

    public function getAccesorio()
    {
        $this->db->select('*')->from('categoria')->where('cod_tip_categoria', '6');
        $arrayAccesorios = $this->db->get()->result();
        return $arrayAccesorios;
    }

    public function getCategories()
    {
        $this->db->select('*')->from('categoria');
        $arrayAccesorios = $this->db->get()->result();
        return $arrayAccesorios;
    }

    public function getTypeCategories()
    {
        $this->db->select('*')->from('tipo_categoria');
        $arrayAccesorios = $this->db->get()->result();
        return $arrayAccesorios;
    }

    public function getProductosByCategoria($id)
    {
        $this->db->select('*')
                ->from('producto p')
                ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto')
                ->where('pc.cod_categoria', $id);
        $rows = $this->db->get()->result();
//        echo "<pre>";
//        print_r($rows);
//        echo "</pre>";
        return $rows;
    }

    public function getProductosByTipoCategoria($rowno, $rowperpage, $where = null)
    {
        $this->db->select('distinct(p.cod_producto), p.*')
                ->from('producto p')
                ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto')
                ->join('categoria ca', 'pc.cod_categoria = ca.cod_categoria');
                //->join('tipo_categoria tc', 'ca.cod_tip_categoria = tc.cod_tip_categoria')
                //->group_by('pc.cod_producto'); // cambiado por el distinct

        if (!empty($where['typeCategoryId'])) {
            $this->db->where('ca.cod_tip_categoria', $where['typeCategoryId']);
        }

        if (!empty($where['categoryId'])) {
            $this->db->where('ca.cod_categoria', $where['categoryId']);
        }

        $this->db->limit($rowperpage, $rowno);
        $rows = $this->db->get()->result_array();
        //echo $sql = $this->db->last_query();

        return $rows;
    }

    // get total categorias
    public function getTotalProducts($where = null)
    {
        $this->db->select('distinct(p.cod_producto)');
        $this->db->from('producto p')
                  ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto')
                  ->join('categoria ca', 'pc.cod_categoria = ca.cod_categoria');
                  //->join('tipo_categoria tc', 'ca.cod_tip_categoria = tc.cod_tip_categoria')

        if (!empty($where['typeCategoryId'])) {
            $this->db->where('ca.cod_tip_categoria', $where['typeCategoryId']);
        }

        if (!empty($where['categoryId'])) {
            $this->db->where('ca.cod_categoria', $where['categoryId']);
        }

        $query = $this->db->get();
        $result = $query->result_array();
        //echo $sql = $this->db->last_query();

        return count($result);
    }

    // Fetch records
    public function getData($rowno, $rowperpage, $search="")
    {
        $this->db->select('distinct(p.cod_producto), p.*');
        $this->db->from('producto p')
                  ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto')
                  ->join('categoria ca', 'pc.cod_categoria = ca.cod_categoria');

        if ($search != '') {
            $this->db->like('des_producto', $search);
            $this->db->or_like('det_producto', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    // Select total records
    public function getrecordCount($search = '')
    {
        $this->db->select('distinct(p.cod_producto)');
        $this->db->from('producto p')
                  ->join('producto_categoria pc', 'p.cod_producto = pc.cod_producto')
                  ->join('categoria ca', 'pc.cod_categoria = ca.cod_categoria');


        if ($search != '') {
            $this->db->like('des_producto', $search);
            $this->db->or_like('det_producto', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return count($result);
    }

}
