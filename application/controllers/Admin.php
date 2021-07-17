<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'admin_base',
			'profesi' => $this->M_data->get_profesi()
		);
		$this->load->view('layout/template', $data);
	}

	public function base_profesi()
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_profesi',
			'profesi' => $this->M_data->get_profesi()
		);
		$this->load->view('layout/template', $data);
	}

	public function profesi($status = '')
	{
		if ($status == 'save') {
			$nama = $this->input->post('nama');
			$this->M_data->save_profesi($nama);
			redirect('admin/base_profesi');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_profesi($id);
			redirect('admin/base_profesi');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_profesi'] = $this->M_data->get_profesi($id);
			$this->load->view('detail_profesi', $data);
		}
	}

	public function base_wisata()
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_wisata',
			'wisata' => $this->M_data->get_data()
		);
		$this->load->view('layout/template', $data);
	}

	public function form_wisata()
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'form_wisata',
			'get_wisata' => $this->M_data->get_wisata(),
			'get_kuliner' => $this->M_data->get_kuliner(),
			'get_data' => $this->M_data->get_data(),
			'profesi' => $this->M_data->get_profesi()
		);
		$this->load->view('layout/template', $data);
	}

	public function wisata($status = '')
	{
		if ($status == 'save') {
			$data = [
				'jenis_wisata_id' => $this->input->post('jenis_wisata_id'),
				'jenis_kuliner_id' => 0,
				'foto' =>  $this->image = $this->M_data->_uploadImage(),
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'fasilitas' => $this->input->post('fasilitas'),
				'bintang' => $this->input->post('bintang'),
				'kontak' => $this->input->post('kontak'),
				'alamat' => $this->input->post('alamat'),
				'latlong' => $this->input->post('latlong'),
				'email' => $this->input->post('email'),
				'web' => $this->input->post('web')
			];
			// $nama = $this->input->post('nama');
			$this->M_data->save_wisata($data);
			$nama = $this->input->post('nama');
			// $this->M_data->save_wisata($nama);
			redirect('admin/base_wisata');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(5);
			$this->M_data->delete_wisata($id);
			redirect('admin/base_wisata');
		} else if ($status == 'edit') {
			$id = $this->uri->segment(5);
			$this->M_data->edit_wisata($id);
			redirect('admin/base_wisata');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(5);
			$data['data_wisata'] = $this->M_data->get_wisata($id);
			$this->load->view('detail_wisata', $data);
		}
	}
	public function tambah_kuliner($status = '')
	{
		if ($status == 'save') {
			$data = [
				'jenis_wisata_id' => 0,
				'jenis_kuliner_id' => $this->input->post('jenis_kuliner_id'),
				'foto' =>  $this->image = $this->M_data->_uploadImage(),
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'fasilitas' => $this->input->post('fasilitas'),
				'bintang' => $this->input->post('bintang'),
				'kontak' => $this->input->post('kontak'),
				'alamat' => $this->input->post('alamat'),
				'latlong' => $this->input->post('latlong'),
				'email' => $this->input->post('email'),
				'web' => $this->input->post('web')
			];
			// $nama = $this->input->post('nama');
			$this->M_data->save_wisata($data);
			$nama = $this->input->post('nama');
			// $this->M_data->save_wisata($nama);
			redirect('admin/base_wisata');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_wisata($id);
			redirect('admin/base_wisata');
		} else if ($status == 'edit') {
			$id = $this->uri->segment(4);
			$this->M_data->edit_wisata($id);
			redirect('admin/base_wisata');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_wisata'] = $this->M_data->get_wisata($id);
			$this->load->view('detail_wisata', $data);
		}
	}

	public function base_kuliner($value = '')
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_kuliner',
			'wisata' => $this->M_data->get_data()
		);
		$this->load->view('layout/template', $data);
	}

	public function form_kuliner()
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'form_kuliner',
			'get_wisata' => $this->M_data->get_wisata(),
			'get_kuliner' => $this->M_data->get_kuliner(),
			'get_data' => $this->M_data->get_data(),
			'profesi' => $this->M_data->get_profesi()
		);
		$this->load->view('layout/template', $data);
	}

	public function kuliner($status = '')
	{
		if ($status == 'save') {
			$nama = $this->input->post('nama');
			$this->M_data->save_kuliner($nama);
			redirect('admin');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_kuliner($id);
			redirect('admin');
		}
	}

	public function base_jenis_wisata()
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_jenis_wisata',
			'jenis_wisata' => $this->M_data->get_jenis_wisata()
		);
		$this->load->view('layout/template', $data);
	}

	public function jenis_wisata($status = '')
	{
		if ($status == 'save') {
			$nama = $this->input->post('nama');
			$this->M_data->save_jenis_wisata($nama);
			redirect('admin/base_jenis_wisata');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_jenis_wisata($id);
			redirect('admin/base_jenis_wisata');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_jenis_wisata'] = $this->M_data->get_jenis_wisata($id);
			$this->load->view('detail_jenis_wisata', $data);
		}
	}

	public function base_jenis_kuliner()
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_jenis_kuliner',
			'jenis_kuliner' => $this->M_data->get_jenis_kuliner()
		);
		$this->load->view('layout/template', $data);
	}

	public function jenis_kuliner($status = '')
	{
		if ($status == 'save') {
			$nama = $this->input->post('nama');
			$this->M_data->save_jenis_kuliner($nama);
			redirect('admin/base_jenis_kuliner');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_jenis_kuliner($id);
			redirect('admin/base_jenis_kuliner');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_jenis_kuliner'] = $this->M_data->get_jenis_kuliner($id);
			$this->load->view('detail_jenis_kuliner', $data);
		}
	}

	public function detail_testimoni($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi1',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}

	public function detail_testimoni2($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi2',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni3($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi3',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni4($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi4',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni5($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi5',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni6($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi6',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni7($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi7',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}
	public function detail_testimoni8($status = '')
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'detail_rekreasi8',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template-user', $data);
	}

	public function base_testimoni($status = '')
	{
		if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_testimoni',
			'testimoni' => $this->M_data->get_testimoni()
		);
		$this->load->view('layout/template', $data);
	}

	public function form_testimoni()
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'form_testimoni',
			'get_wisata' => $this->M_data->get_wisata(),
			'get_kuliner' => $this->M_data->get_kuliner(),
			'get_data' => $this->M_data->get_data(),
			'get_profesi' => $this->M_data->get_profesi()
		);
		$this->load->view('layout/template', $data);
	}
	public function testimoni($status = '')
	{
		if ($status == 'save') {
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'wisata_id' => $this->input->post('wisata_id'),
				'profesi_id' => $this->input->post('profesi_id'),
				'rating' => $this->input->post('rating'),
				'komentar' => $this->input->post('komentar')
			];
			// $nama = $this->input->post('nama');
			$this->M_data->save_testimoni($data);
			redirect('admin/base_testimoni');
		} else if ($status == 'delete') {
			$id = $this->uri->segment(4);
			$this->M_data->delete_testimoni($id);
			redirect('admin/base_testimoni');
		} else if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_testimoni'] = $this->M_data->get_testimoni($id);
			$this->load->view('detail_testimoni', $data);
		}
	}
}
