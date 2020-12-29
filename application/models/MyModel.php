<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class MyModel extends CI_Model {
                        
public function getPorto()
{
	return $this->db->get('porto');
	
	# code...
}
	public function dt_Porto($post)
	{
		// untuk sort
		$columns = array(
			'nama',
			'kategori',
			'link'
			// 'p.judul',
			// 'p.created_at',
			// 'p.stok',
			// 'p.view_count',
			// 'p.harga_awal',
		);
		// untuk search
		$columnsSearch = array(
			'nama',
			'kategori',
			'link'
			// 'NIS',
			// 'id_kelas'

			// 'p.judul',
		);
		// gunakan join disini
		$from = 'porto s';
		// custom SQL
		$sql = "SELECT *  FROM {$from}  ";
		$where = "";
		if (isset($post['id_tipe_produk']) && $post['id_tipe_produk'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (p.id_tipe_produk='" . $post['id_tipe_produk'] . "')";
		}
		if (isset($post['id_tipe_bid']) && $post['id_tipe_bid'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (p.id_tipe_bid='" . $post['id_tipe_bid'] . "')";
		}
		if (isset($post['status']) && $post['status'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (p.status='" . $post['status'] . "')";
		}
		if (isset($post['dt_filter_kelengkapan']) && $post['dt_filter_kelengkapan'] != 'default') {
			if ($where != "") $where .= "AND";
			$where .= " (p.fullset='" . $post['dt_filter_kelengkapan'] . "')";
		}
		$whereTemp = "";
		if ($whereTemp != '' && $where != ''
		) $where .= " AND (" . $whereTemp . ")";
		else if ($whereTemp != '') $where .= $whereTemp;
		// search
		if (isset($post['search']['value']) && $post['search']['value'] != '') {
			$search = $post['search']['value'];
			// create parameter pencarian kesemua kolom yang tertulis

			// di $columns
			$whereTemp = "";
			for ($i = 0; $i < count($columnsSearch); $i++) {
				$whereTemp .= $columnsSearch[$i] . ' LIKE "%' . $search . '%"';
				// agar tidak menambahkan 'OR' diakhir Looping
				if ($i < count($columnsSearch) - 1) {
					$whereTemp .= ' OR ';
				}
			}
			if ($where != '') $where .= " AND (" . $whereTemp . ")";
			else $where .= $whereTemp;
		}
		if ($where != '') $sql .= ' where (' . $where . ')';
		//SORT Kolom
		$sortColumn = isset($post['order'][0]['column']) ? $post['order'][0]['column'] : 1;
		$sortDir    = isset($post['order'][0]['dir']) ? $post['order'][0]['dir'] : 'asc';
		$sortColumn = $columns[$sortColumn - 1];
		// $sql .= " group by id_siswa ";
		// $sql .= " ORDER BY {$sortColumn} {$sortDir}";
		// var_dump($sql);die();
		$count = $this->db->query($sql);
		// hitung semua data
		$totaldata = $count->num_rows();
		// memberi Limit
		$start  = isset($post['start']) ? $post['start'] : 0;
		$length = isset($post['length']) ? $post['length'] : 10;
		$sql .= " LIMIT {$start}, {$length}";
		// var_dump($sql);die();
		$data  = $this->db->query($sql);
		return array(
			'totalData' => $totaldata,
			'data' => $data,
		);
	}
	public function edit_porto($in, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update('porto', $in);
	}
	public function tambah_Calon($in)
	{
		return $this->db->insert('porto', $in);
	}
	public function getCalonByID($id_calon)
	{
		$this->db->from('porto');
		$this->db->where('id', $id_calon);

		$query = $this->db->get();
		return $query;
	}
	public function HapusCalon($id_siswa)
	{
		$this->db->where('id', $id_siswa);
		$this->db->delete('porto');
		$query = $this->db->get('porto s');

		return $query->result();


		# code...
	}
	public function tambah_komen($in)
	{
		return $this->db->insert('komentar', $in);
	}
                        
                            
                        
}
                        
/* End of file MyModel.php */
    
                        