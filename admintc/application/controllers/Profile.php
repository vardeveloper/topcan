<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index() {
		$data['userdata'] 		= $this->userdata;
		
		$data['page'] 			= "perfil";
		$data['judul'] 			= "Perfil";
		$data['deskripsi'] 		= "Configurar Perfil";
		$this->template->views('profile', $data);
	}

	public function update() {
		$this->form_validation->set_rules('usr_usuario', 'Usuario', 'trim|required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('nom_usuario', 'Nombre Usuario', 'trim|required');
		$this->form_validation->set_rules('ape_pat_usuario', 'Apellido Paterno', 'trim|required');
		$this->form_validation->set_rules('ape_mat_usuario', 'Apellido Materno', 'trim|required');
		$this->form_validation->set_rules('correo_usuario', 'E-mail Usuario', 'trim|required');

		$id = $this->userdata->cod_usuario;
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data_foto = $this->upload->data();
				$data['foto'] = $data_foto['file_name'];
			}

			$result = $this->M_admin->update($data, $id);
			if ($result > 0) {
				$this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Datos guardados exitosamente'));
				redirect('Profile');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Error al actualizar los datos'));
				redirect('Profile');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Profile');
		}
	}

	public function ubah_password() {
		$this->form_validation->set_rules('passActual', 'Password Actual', 'trim|required');
		$this->form_validation->set_rules('passNuevo', 'Password Nuevo', 'trim|required');
		$this->form_validation->set_rules('passConfirmar', 'Password Confirmar', 'trim|required');

		$id = $this->userdata->cod_usuario;
		if ($this->form_validation->run() == TRUE) {
			if (md5($this->input->post('passActual')) == $this->userdata->pas_usuario) {
				if ($this->input->post('passNuevo') != $this->input->post('passConfirmar')) {
					$this->session->set_flashdata('msg', show_err_msg('La nueva contraseña y la confirmación de contraseña deben ser las mismas'));
					redirect('Profile');
				} else {
					$data = [
						'pas_usuario' => md5($this->input->post('passNuevo'))
					];

					$result = $this->M_admin->update($data, $id);
					if ($result > 0) {
						$this->updateProfil();
						$this->session->set_flashdata('msg', show_succ_msg('Datos guardados exitosamente'));
						redirect('Profile');
					} else {
						$this->session->set_flashdata('msg', show_err_msg('Error al actualizar los datos'));
						redirect('Profile');
					}
				}
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Password Incorrecto'));
				redirect('Profile');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Profile');
		}
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */