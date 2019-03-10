<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_productos extends CI_Model
{

    public function select_all_pegawai()
    {
        $sql = "SELECT * FROM producto";
        $data = $this->db->query($sql);
        return $data->result();
    }

    // public function select_all() {
    // 	$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id";
    // 	$data = $this->db->query($sql);
    // 	return $data->result();
    // }

    public function select_all()
    {
        $data = $this->db->get('producto');
        return $data->result();
    }

    public function select_by_id($id)
    {
        $sql = "SELECT * FROM producto WHERE cod_producto = '{$id}'";
        $data = $this->db->query($sql);
        return $data->row();
    }

    public function update($data)
    {
        $sql = "UPDATE producto SET "
                . "des_producto = '" . $data['description'] . "', "
                . "det_producto = '" . $data['detail'] . "', "
                . "img1_producto = '" . $data['img1'] . "', "
                . "img2_producto = '" . $data['img2'] . "', "
                . "img3_producto = '" . $data['img3'] . "' "
                . "WHERE cod_producto = " . $data['id'];
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function updateCategories($data)
    {
        $this->db->delete('producto_categoria', array('cod_producto' => $data['id']));
        foreach($data['category'] as $key => $value)
        {
            $productCategory = array(
                'cod_categoria' => $value,
                'cod_producto' => $data['id'],
            );
            $result = $this->db->insert('producto_categoria', $productCategory);
            if (empty($result)) {
                return false;
            }
        }
        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM producto WHERE cod_producto='" . $id . "'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO producto (des_producto, img1_producto, img2_producto, img3_producto, det_producto)
                VALUES ('$data[description]', '$data[img1]', '$data[img2]', '$data[img3]', '$data[detail]');";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function insert_batch($data)
    {
        $this->db->insert_batch('producto', $data);
        return $this->db->affected_rows();
    }

    public function check_nama($nama)
    {
        $this->db->where('name', $nama);
        $data = $this->db->get('producto');
        return $data->num_rows();
    }

    public function total_rows()
    {
        $data = $this->db->get('producto');
        return $data->num_rows();
    }

}
