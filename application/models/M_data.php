<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

	public function check_login($username, $password)
	{

		if ($username && $password) {
			$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return ($query->num_rows() === 1 ? $result['id_user'] : false);
		} else {
			return false;
		}
	}

	public function get_userwhere($id = '')
	{
		$query = "SELECT * FROM `user` WHERE `id_user` = $id";
		return $this->db->query($query)->result_array();
	}

	public function get_data($value = '')
	{
		$query = 'SELECT `id_wisata`,`foto`,`wisata`.`nama` AS `judul`,`deskripsi`,`fasilitas`,`bintang`,`kontak`,`alamat`,`latlong`,`email`,`web`,`jenis_wisata`.`nama_jenis_wisata` AS `namawisata`, `jenis_kuliner`.`nama_jenis_kuliner` AS `namakuliner`  FROM `wisata`
		LEFT JOIN jenis_wisata ON wisata.`jenis_wisata_id` = jenis_wisata.id_jenis_wisata
		LEFT JOIN jenis_kuliner ON wisata.`jenis_kuliner_id` = jenis_kuliner.id_jenis_kuliner';
		return $this->db->query($query)->result_array();
	}

	public function _uploadImage()
	{
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'id_wisata';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	public function save_wisata($data)
	{
		return $this->db->insert('wisata', $data);
	}

	public function delete_wisata($id)
	{
		$query = "DELETE wisata , jenis_wisata, jenis_kuliner FROM wisata 
		INNER JOIN jenis_wisata ON jenis_wisata.id_jenis_wisata = wisata.jenis_wisata_id WHERE wisata.id_wisata = 1
		INNER JOIN jenis_kuliner ON jenis_kuliner.id_jenis_kuliner = wisata.jenis_kuliner_id WHERE wisata.id_wisata = 1";
		// DELETE FROM `wisata` WHERE `wisata`.`id_wisata` = $id";
		return $this->db->query($query);
	}

	public function get_data_join($value = '')
	{
		$query = 'SELECT `nama`,`email`,`rating`,`komentar`,`wisata`.`nama` AS `namawisata`, `profesi`.`nama` AS `namaprofesi`  FROM `testimoni`
		LEFT JOIN wisata ON testimoni.`wisata_id` = wisata.id_wisata
		LEFT JOIN profesi ON testimoni.`profesi_id` = profesi.id';
		return $this->db->query($query)->result_array();
	}


	public function get_wisata($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `jenis_wisata`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `jenis_wisata` WHERE `id_jenis_wisata` = $value ";
			return $this->db->query($query)->result_array();
		}
	}


	public function get_kuliner($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `jenis_kuliner`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `jenis_kuliner` WHERE `id_jenis_kuliner` = $value ";
			return $this->db->query($query)->result_array();
		}
	}

	public function get_profesi($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `profesi`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `profesi` WHERE `id` = $value ";
			return $this->db->query($query)->result_array();
		}
	}

	public function save_profesi($nama)
	{
		$query = "INSERT INTO `profesi` (`id`, `nama`) VALUES (NULL, '$nama')";
		return $this->db->query($query);
	}

	public function delete_profesi($id)
	{
		$query = "DELETE FROM `profesi` WHERE `profesi`.`id` = $id";
		return $this->db->query($query);
	}

	public function get_jenis_wisata($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `jenis_wisata`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `jenis_wisata` WHERE `id_jenis_wisata` = $value ";
			return $this->db->query($query)->result_array();
		}
	}

	public function save_jenis_wisata($nama)
	{
		$query = "INSERT INTO `jenis_wisata` (`id_jenis_wisata`, `nama_jenis_wisata`) VALUES (NULL, '$nama')";
		return $this->db->query($query);
	}

	public function delete_jenis_wisata($id)
	{
		$query = "DELETE FROM `jenis_wisata` WHERE `jenis_wisata`.`id_jenis_wisata` = $id";
		return $this->db->query($query);
	}

	public function get_jenis_kuliner($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `jenis_kuliner`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `jenis_kuliner` WHERE `id_jenis_kuliner` = $value ";
			return $this->db->query($query)->result_array();
		}
	}

	public function save_jenis_kuliner($nama)
	{
		$query = "INSERT INTO `jenis_kuliner` (`id_jenis_kuliner`, `nama_jenis_kuliner`) VALUES (NULL, '$nama')";
		return $this->db->query($query);
	}

	public function delete_jenis_kuliner($id)
	{
		$query = "DELETE FROM `jenis_kuliner` WHERE `jenis_kuliner`.`id_jenis_kuliner` = $id";
		return $this->db->query($query);
	}


	public function get_testimoni($value = '')
	{
		if ($value == '') {
			$query = 'SELECT * FROM `testimoni`';
			return $this->db->query($query)->result_array();
		} else {
			$query = "SELECT * FROM `testimoni` WHERE `id` = $value ";
			return $this->db->query($query)->result_array();
		}
	}
	public function save_testimoni($data)
	{
		return $this->db->insert('testimoni', $data);
		// $query = "INSERT INTO `testimoni` (`id`, `nama`, `email`, `wisata_id`, `profesi_id`, `rating`, `komentar`) VALUES ('', '$nama')";
		// return $this->db->query($query);
	}

	public function delete_testimoni($id)
	{
		$query = "DELETE FROM `testimoni` WHERE `testimoni`.`id` = $id";
		return $this->db->query($query);
	}
}
