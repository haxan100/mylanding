<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
	}	
	public function index()
	{	
		$obj['data'] = $this->MyModel->getPorto()->result();	
		$this->load->view('User/index',$obj);	
	}
	public function tambah_komen_proses()
	{
		// var_dump($_POST);die;
		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$pesan = $this->input->post('message', TRUE);

		$message = 'Gagal menambah data !<br>Silahkan lengkapi data yang diperlukan.';
		$errorInputs = array();
		$status = true;

		if (empty($name)) {
			$status = false;
			$errorInputs[] = array('#name', 'Silahkan Isi Nama');
		}
		if (empty($email)) {
			$status = false;
			$errorInputs[] = array('#email', 'Silahkan pilih Email');
		}
		$in = array(
			'nama' => $name,
			'email' => $email,
			'komentar' => $pesan,
		);
		$this->MyModel->tambah_komen($in);

		$message = "Berhasil Menambah Data #1";
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
			'errorInputs' => $errorInputs
		));
	}
        
}
        
    /* End of file  User.php */
        
                            
