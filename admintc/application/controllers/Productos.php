<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends AUTH_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_productos');
        $this->load->helper('file');
    }

    public function index()
    {
        $data['userdata'] = $this->userdata;
        $data['dataPegawai'] = $this->M_productos->select_all();

        $data['page'] = "productos";
        $data['judul'] = "Datos productos";
        $data['deskripsi'] = "Administrar Datos Productos";

        $data['modal_product_create'] = show_my_modal('modals/modal_product_create', 'product', $data);

        $this->template->views('product/home', $data);
    }

    public function tampil()
    {
        $data['dataPegawai'] = $this->M_productos->select_all();
        $this->load->view('pegawai/list_data', $data);
    }

    public function create()
    {
        //$this->form_validation->set_rules('name', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('description', 'Descripcion', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detalle', 'trim|required');

        $data = $this->input->post();

        if ($this->form_validation->run() == TRUE) {

            
            
            
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); 
            $path = __DIR__ . '/../../../assets/img/galeria/'; // upload directory

            if($_FILES['file']) {
                $img = $_FILES['file']['name'];
                $tmp = $_FILES['file']['tmp_name'];

                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                // can upload same image using rand function
                $final_image = rand(1000,1000000) . $img;
                $filename = strtolower($final_image);

                // check's valid format
                if(in_array($ext, $valid_extensions)) 
                {
                    $path = $path . $filename; 
                    move_uploaded_file($tmp,$path);
                }
            }
            
            
            
            //echo json_encode($_FILES['file']);
            //die;
            
            
//            $config['upload_path'] = "/assets/img/galeria/";
//            $config['allowed_types'] = 'gif|jpg|png';
//            //$config['max_size'] = 100;
//            //$config['max_width'] = 1024;
//            //$config['max_height'] = 768;
//
//            $this->load->library('upload', $config);
//            if (!$this->upload->do_upload("file")) {
//                $out['status'] = '';
//                $out['msg'] = show_err_msg('Error al guardar la foto', '18px');
//            }
            
            $data['img1'] = "assets/img/galeria/$filename";
            $result = $this->M_productos->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Datos guardados exitosamente', '18px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Error al actualizar los datos', '18px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function do_upload()
    {
        $config['upload_path'] = "./assets/img/galeria/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file")) {
//            $data = array('upload_data' => $this->upload->data());
//
//            $title = $this->input->post('title');
//            $image = $data['upload_data']['file_name'];
//
//            $result = $this->upload_model->save_upload($title, $image);
//            echo json_decode($result);
        }
    }

    public function update()
    {
        $id = trim($_POST['id']);

        $data['dataPegawai'] = $this->M_pegawai->select_by_id($id);
        $data['dataPosisi'] = $this->M_posisi->select_all();
        $data['dataKota'] = $this->M_kota->select_all();
        $data['userdata'] = $this->userdata;

        echo show_my_modal('modals/modal_update_pegawai', 'update-pegawai', $data);
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_pegawai->update($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Datos guardados exitosamente', '18px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Error al actualizar los datos', '18px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function delete()
    {
        $id = $_POST['id'];
        $result = $this->M_pegawai->delete($id);

        if ($result > 0) {
            echo show_succ_msg('Data Pegawai Berhasil dihapus', '18px');
        } else {
            echo show_err_msg('Data Pegawai Gagal dihapus', '18px');
        }
    }

    /*
      public function export() {
      error_reporting(E_ALL);

      include_once './assets/phpexcel/Classes/PHPExcel.php';
      $objPHPExcel = new PHPExcel();

      $data = $this->M_pegawai->select_all_pegawai();

      $objPHPExcel = new PHPExcel();
      $objPHPExcel->setActiveSheetIndex(0);
      $rowCount = 1;

      $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "ID");
      $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "Nama");
      $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Nomor Telepon");
      $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "ID Kota");
      $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "ID Kelamin");
      $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "ID Posisi");
      $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "Status");
      $rowCount++;

      foreach($data as $value){
      $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id);
      $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->nama);
      $objPHPExcel->getActiveSheet()->setCellValueExplicit('C'.$rowCount, $value->telp, PHPExcel_Cell_DataType::TYPE_STRING);
      $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->id_kota);
      $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->id_kelamin);
      $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->id_posisi);
      $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->status);
      $rowCount++;
      }

      $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
      $objWriter->save('./assets/excel/Data Pegawai.xlsx');

      $this->load->helper('download');
      force_download('./assets/excel/Data Pegawai.xlsx', NULL);
      }

      public function import() {
      $this->form_validation->set_rules('excel', 'File', 'trim|required');

      if ($_FILES['excel']['name'] == '') {
      $this->session->set_flashdata('msg', 'File harus diisi');
      } else {
      $config['upload_path'] = './assets/excel/';
      $config['allowed_types'] = 'xls|xlsx';

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('excel')){
      $error = array('error' => $this->upload->display_errors());
      }
      else{
      $data = $this->upload->data();

      error_reporting(E_ALL);
      date_default_timezone_set('Asia/Jakarta');

      include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

      $inputFileName = './assets/excel/' .$data['file_name'];
      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
      $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

      $index = 0;
      foreach ($sheetData as $key => $value) {
      if ($key != 1) {
      $id = md5(DATE('ymdhms').rand());
      $check = $this->M_pegawai->check_nama($value['B']);

      if ($check != 1) {
      $resultData[$index]['id'] = $id;
      $resultData[$index]['nama'] = ucwords($value['B']);
      $resultData[$index]['telp'] = $value['C'];
      $resultData[$index]['id_kota'] = $value['D'];
      $resultData[$index]['id_kelamin'] = $value['E'];
      $resultData[$index]['id_posisi'] = $value['F'];
      $resultData[$index]['status'] = $value['G'];
      }
      }
      $index++;
      }

      unlink('./assets/excel/' .$data['file_name']);

      if (count($resultData) != 0) {
      $result = $this->M_pegawai->insert_batch($resultData);
      if ($result > 0) {
      $this->session->set_flashdata('msg', show_succ_msg('Data Pegawai Berhasil diimport ke database'));
      redirect('Pegawai');
      }
      } else {
      $this->session->set_flashdata('msg', show_msg('Data Pegawai Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
      redirect('Pegawai');
      }

      }
      }
      }
     */
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */