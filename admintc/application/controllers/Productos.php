<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends AUTH_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_productos');
        $this->load->model('M_categorias');
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
        $data['products'] = $this->M_productos->select_all();
        $this->load->view('product/list_data', $data);
    }

    /*
     * Guarda una imagen por defecto porque al iniciar sesion y entrar a la seccion
     * productos se corta la sesion!
     */
    public function create()
    {
        //$this->form_validation->set_rules('name', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('description', 'Descripcion', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detalle', 'trim|required');

        $data = $this->input->post();

        if ($this->form_validation->run() == TRUE) {
            
            $response = $this->upload($_FILES['file']);
            $data['img1'] = $response;
            
            $response = $this->upload($_FILES['photo2']);
            $data['img2'] = $response;
            
            $response = $this->upload($_FILES['photo3']);
            $data['img3'] = $response;
            
            //echo json_encode($_FILES['file']);
            //die;
            
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

    // photos
    public function upload($file)
    {   
        $response = "assets/img/galeria/default.png";
        
        if (empty($file['tmp_name'])) {
            return $response;
        }

        $img = $file['name'];
        $tmp = $file['tmp_name'];

        // get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');

        if (!in_array($ext, $valid_extensions)) {
            return $response;
        }

        // can upload same image using rand function
        $final_image = rand(1000, 1000000) . $img;
        $filename = strtolower($final_image);

        $path = ASSETS_PATH . '/img/galeria/'; // upload directory
        $path = $path . $filename;
        move_uploaded_file($tmp, $path);

        $response = "assets/img/galeria/$filename";
        return $response;
    }

    public function update()
    {
        $id = trim($_POST['id']);

        $data['producto'] = $this->M_productos->select_by_id($id);
        //$data['dataPosisi'] = $this->M_posisi->select_all();
        //$data['dataKota'] = $this->M_kota->select_all();
        $data['userdata'] = $this->userdata;

        echo show_my_modal('modals/modal_product_update', 'update-product', $data);
    }

    public function relationCategory()
    {
        $id = trim($_POST['id']);

        $data['producto'] = $this->M_productos->select_by_id($id);
        $data['categories'] = $this->treeOfCategories($id);
        $data['userdata'] = $this->userdata;
        
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";

        echo show_my_modal('modals/modal_product_categories', 'update-productCategories', $data);
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('description', 'Descripcion', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detalle', 'trim|required');

        $data = $this->input->post();
        
        if ($this->form_validation->run() == TRUE) {
            
            $product = $this->M_productos->select_by_id($data['id']);
            
            $response = $this->uploadUpdate($_FILES['file'], $product, 1);
            $data['img1'] = $response;
            
            $response = $this->uploadUpdate($_FILES['photo2'], $product, 2);
            $data['img2'] = $response;
            
            $response = $this->uploadUpdate($_FILES['photo3'], $product, 3);
            $data['img3'] = $response;
            
            $result = $this->M_productos->update($data);

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
    

    // photos
    public function uploadUpdate($file, $product, $num)
    {
        $product = get_object_vars($product);
        $img_producto = "img{$num}_producto";
        $photo = $product[$img_producto];
        
        if (empty($file['tmp_name'])) {
            return $photo;
        }
        
        $img = $file['name'];
        $tmp = $file['tmp_name'];

        // get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');

        if (!in_array($ext, $valid_extensions)) {
            return $photo;
        }
        
        // update of images
        $this->deletePhoto($photo);

        // can upload same image using rand function
        $final_image = rand(1000, 1000000) . $img;
        $filename = strtolower($final_image);

        $path = ASSETS_PATH . '/img/galeria/'; // upload directory
        $path = $path . $filename;
        move_uploaded_file($tmp, $path);

        $photo = "assets/img/galeria/$filename";
        return $photo;
    }

    public function updateCategories()
    {
        $data = $this->input->post();

        $result = $this->M_productos->updateCategories($data);

        if ($result) {
            $out['status'] = '';
            $out['msg'] = show_succ_msg('Datos guardados exitosamente', '18px');
        } else {
            $out['status'] = '';
            $out['msg'] = show_succ_msg('Error al actualizar los datos', '18px');
        }

        echo json_encode($out);
    }

    public function delete()
    {
        $id = $_POST['id'];
        
        $product = $this->M_productos->select_by_id($id);
        $this->deletePhoto($product->img1_producto);
        $this->deletePhoto($product->img2_producto);
        $this->deletePhoto($product->img3_producto);
        
        $result = $this->M_productos->delete($id);

        if ($result > 0) {
            echo show_succ_msg('Se elimino el registro correctamente', '18px');
        } else {
            echo show_err_msg('Hubo un error, intete mas tarde', '18px');
        }
    }
    
    public function deletePhoto($photo)
    {
        $imagen_path = dirname(ASSETS_PATH) . '/' . $photo;
        $name = basename($imagen_path, ".png");
        if ($name != "default") {            
            if (file_exists($imagen_path)) {
                unlink($imagen_path);
            }
        }
    }
    
    public function treeOfCategories($id)
    {
        //$categories = $this->M_categorias->getCategories();
        $categories = $this->M_categorias->getCategoriesByProductId($id);
        $types = $this->M_categorias->getTypeCategories();
        $treeOfCategories = array();

//        echo "<pre>";
//        print_r($categories);
//        echo "</pre>";
        
        foreach ($types as $type) {
            $treeOfCategories[$type->cod_tip_categoria] = array();
            $treeOfCategories[$type->cod_tip_categoria]['name'] = $type->des_tip_categoria;
            $treeOfCategories[$type->cod_tip_categoria]['subcategories'] = array();
        }
        
        foreach ($categories as $category) {
            $typeId = $category->cod_tip_categoria;
            $categoryId = $category->cod_categoria;
            $treeOfCategories[$typeId]['subcategories'][$categoryId] = array();
            $treeOfCategories[$typeId]['subcategories'][$categoryId]['name'] = $category->des_categoria;
            $treeOfCategories[$typeId]['subcategories'][$categoryId]['product_id'] = $category->cod_producto;
        }
        
        return $treeOfCategories;
    }

}
