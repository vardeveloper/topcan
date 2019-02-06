<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_categorias extends CI_Model
{

    public function select_all()
    {
        $this->db->select('*');
        $this->db->from('categoria');
        $data = $this->db->get();
        return $data->result();
    }

    public function getAll()
    {
        $sql = "SELECT c.cod_categoria, c.des_categoria, tc.des_tip_categoria
            FROM categoria c
            INNER JOIN tipo_categoria tc 
            ON c.cod_tip_categoria = tc.cod_tip_categoria;";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    public function getCategoriesByProductId($id)
    {
        $sql = "SELECT 
                c.cod_categoria, c.des_categoria, c.cod_tip_categoria, pc.cod_producto
            FROM
                categoria c
                    LEFT JOIN
                producto_categoria pc ON c.cod_categoria = pc.cod_categoria
                    AND pc.cod_producto = '{$id}'
            ORDER BY cod_categoria;";
        $data = $this->db->query($sql);
        return $data->result();
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
    
    public function select_by_id($id)
    {
        $sql = "SELECT * FROM categoria WHERE cod_categoria = '{$id}'";

        $data = $this->db->query($sql);

        return $data->row();
    }

    public function select_by_pegawai($id)
    {
        $sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_kota={$id}";

        $data = $this->db->query($sql);

        return $data->result();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO kota VALUES('','" . $data['kota'] . "')";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function insert_batch($data)
    {
        $this->db->insert_batch('kota', $data);

        return $this->db->affected_rows();
    }

    public function update($data)
    {
        $sql = "UPDATE kota SET nama='" . $data['kota'] . "' WHERE id='" . $data['id'] . "'";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM kota WHERE id='" . $id . "'";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

    public function check_nama($nama)
    {
        $this->db->where('nama', $nama);
        $data = $this->db->get('kota');

        return $data->num_rows();
    }

    public function total_rows()
    {
        $data = $this->db->get('kota');

        return $data->num_rows();
    }

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */