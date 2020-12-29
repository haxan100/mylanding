<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
	}
public function index()
{
	$this->load->view('Templates/Admin/Header');
	$this->load->view('Templates/Admin/Sidebar');
	$this->load->view('Admin/PortoFolio');
	$this->load->view('Templates/Admin/Footer');
	
}
	public function getAllPorto()
	{

		$bu = base_url();
		$dt = $this->MyModel->dt_Porto($_POST);
		$datatable['draw']   = isset($_POST['draw']) ? $_POST['draw'] : 1;
		$datatable['recordsTotal']    = $dt['totalData'];
		$datatable['recordsFiltered'] = $dt['totalData'];
		$datatable['data']            = array();
		$start  = isset($_POST['start']) ? $_POST['start'] : 0;
		// var_dump($dt['data']->result());die();
		$no = $start + 1;
		foreach ($dt['data']->result() as $row) {
			
			$fields = array($no++);
			$fields[] = $row->nama . '<br>';
			$fields[] = $row->kategori . '<br>';
			$fields[] = $row->link . '<br>';
			$fields[] =  '<img class="img-fluid" id="foto_wrapper" id="foto_wrapper"  
			
			src="' . $bu . '/upload/images/porto/' . $row->gambar . ' "/> ';


			$fields[] = '
        <button class="btn btn-warning my-1  btn-block btnUbah text-white" 
          data-id="' . $row->id . '"
          data-nama="' . $row->nama . '"
          data-kategori="' . $row->kategori . '"
          data-link="' . $row->link . '"
        ><i class="far fa-edit"></i> Ubah</button>
        
        <button class="btn btn-danger my-1  btn-block btnHapus text-white" 
          data-id="' . $row->id . '"          data-nama="' . $row->nama . '"
				><i class="fas fa-trash"></i> Hapus</button>        ';
			$datatable['data'][] = $fields;
		}
		echo json_encode($datatable);
		exit();
	}
	public function ubah_porto_proses()
	{
		$message = 'Gagal mengedit data siswa!<br>Silahkan lengkapi data yang diperlukan.';
		$errorInputs = array();
		$status = true;

    $id = $this->input->post('id', TRUE);
    $nama = $this->input->post('nama',
		TRUE);
    $kategori = $this->input->post('kategori',
		TRUE);
	$link = $this->input->post('link', TRUE);

		$cekFoto = empty($_FILES['foto']['name'][0]) || $_FILES['foto']['name'][0] == '';
		// var_dump($cekFoto);die;
		$inUser = array(
			'nama' => $nama,
			'kategori' => $kategori,
			'link' => $link,
		);
		if (!$cekFoto) {
			// var_dump($cekFoto);die;
			$filesCount = 0;
			$successUpload = 0;
			$errorUpload = '';
			$config['image_library'] = 'gd2';
			$_FILES['f']['name']     = $_FILES['foto']['name'];
			$_FILES['f']['type']     = $_FILES['foto']['type'];
			$_FILES['f']['tmp_name'] = $_FILES['foto']['tmp_name'];
			$_FILES['f']['error']     = $_FILES['foto']['error'];
			$_FILES['f']['size']     = $_FILES['foto']['size'];
			$config['upload_path']          = './upload/images/porto/';
			$config['allowed_types']        = 'jpg|jpeg|png|gif';
			$config['max_size']             = 3 * 1024; // kByte
			$config['max_width']            = 10 * 1024;
			$config['max_height']           = 10 * 1024;
			$config['file_name'] = $id . "-" . date("Y-m-d-H-i-s") . ".jpg";
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$data_kode = array('id' => $id);
			$foto = $this->db->get_where('porto', $data_kode);
			if ($foto->num_rows() > 0) {
				$pros = $foto->row();
				// var_dump($pros);die;
				$name = $pros->gambar;
				if (file_exists($lok = FCPATH . '/upload/images/porto' . $name)) {
					unlink($lok);
				}
				if (file_exists($lok = FCPATH . './upload/images/porto/' . $name)) {
					unlink($lok);
				}
			}
			if (!$this->upload->do_upload('f')) {
				$errorUpload = $this->upload->display_errors() . '<br>';
				var_dump($errorUpload);
			}

			$inFoto = array(
				'gambar' => $nameFoto = str_replace(' ', '_', $config['file_name']),
			);
			$this->MyModel->edit_porto($inFoto, $id);
		}
		if (empty($nama)) {
			$status = false;
			$errorInputs[] = array('#nama', 'Silahkan Isi Nama');
		}

		if ($status) {
			$this->MyModel->edit_porto($inUser, $id);
			$message = "Berhasil Mengedit Data ";
			$status = true;
		} else {
			$message = "Gagal Mengubah Siswa #1";
		}
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
			'errorInputs' => $errorInputs
		));



	}
	public function tambah_porto_proses()
	{
		$kategori = $this->input->post('kategori', TRUE);
		$nama = $this->input->post('nama', TRUE);
		$link = $this->input->post('link', TRUE);
		

		$message = 'Gagal menambah data !<br>Silahkan lengkapi data yang diperlukan.';
		$errorInputs = array();
		$status = true;

		if (empty($nama)) {
			$status = false;
			$errorInputs[] = array('#nama', 'Silahkan Isi Nama');
		}
		if (empty($kategori)) {
			$status = false;
			$errorInputs[] = array('#kategori', 'Silahkan pilih Kelas');
		}

		$cekFoto = empty($_FILES['foto']['name'][0]) || $_FILES['foto']['name'][0] == '';

		if (!$cekFoto) {

			$_FILES['f']['name']     = $_FILES['foto']['name'];
			$_FILES['f']['type']     = $_FILES['foto']['type'];
			$_FILES['f']['tmp_name'] = $_FILES['foto']['tmp_name'];
			$_FILES['f']['error']     = $_FILES['foto']['error'];
			$_FILES['f']['size']     = $_FILES['foto']['size'];
			$config['upload_path']          = './upload/images/porto';
			$config['allowed_types']        = 'jpg|jpeg|png|gif';
			$config['max_size']             = 3 * 1024; // kByte
			$config['max_width']            = 10 * 1024;
			$config['max_height']           = 10 * 1024;
			$config['file_name'] = $nama . "-" . date("Y-m-d-H-i-s") . ".jpg";
			$this->load->library('image_lib');
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('f')) {
				$errorUpload = $this->upload->display_errors() . '<br>';
			} else {
				// Uploaded file data
				$fileName = $this->upload->data()["file_name"];
				$foto = array(
					'gambar' => $fileName,
				);
				$in = array(
					'gambar' => $fileName,
					'nama' => $nama,
					'kategori' => $kategori,
					'link' => $link,
				);
				$this->MyModel->tambah_Calon($in);

				$message = "Berhasil Menambah  #1";
				echo json_encode(array(
					'status' => $status,
					'message' => $message,
					'errorInputs' => $errorInputs
				));
			}
		}
	}
	public function hapusCalon()
	{
		$id_siswa = $this->input->post('id_siswa', TRUE);
		$data = $this->MyModel->getCalonByID($id_siswa)->result();
		// var_dump($data);die;
		$status = false;
		$message = 'Gagal menghapus Data!';
		if (count($data) == 0) {
			$message .= '<br>Tidak terdapat Data yang dimaksud.';
		} else {
			$this->MyModel->HapusCalon($id_siswa);
			$status = true;
			$message = 'Berhasil menghapus Data: <b>' . $data[0]->nama . '</b>';
		}
		echo json_encode(array(
			'status' => $status,
			'message' => $message,
		));
	}
        
}
        
    /* End of file  Admin.php */
        
                            