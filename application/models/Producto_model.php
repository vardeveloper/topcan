<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Producto_model extends CI_Model
{

    protected $table = "producto";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $arrayProductosHome = $this->db->get_where('producto')->result();

        return $arrayProductosHome;
    }

    public function get_current_page_records($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("producto");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total()
    {
        return $this->db->count_all("producto");
    }

    public function getPageNovedades()
    {
        $query = $this->db->query("SELECT * FROM producto ORDER BY cod_producto DESC LIMIT 12");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

}
