<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Kategori_model');
		$this->load->library('pagination');

	}
	public function index()
	{
		/*
		
		$this->load->view('Barang_view', $data);*/

		// $data['mhs'] = $this->Mahasiswa_model->retrieve();
		$config = array();
		$config["base_url"] = base_url() . "index.php/kategori/index";
		$config["total_rows"] = $this->Kategori_model->record_count();
		$config["per_page"] = 9;
		$config["uri_segment"] = 3;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["result"] = $this->Kategori_model->fetch_kategori($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["page"] = $page;

		$this->load->view('kategori/Kategori_V', $data);

	}

	public function form_tambah(){
		$this->load->view('Tambah_view');
	}

	public function submit(){
		$this->Kategori_model->add($this->input->post('var'));
		$data['submitted'] = TRUE;
		$this->load->view('Tambah_view', $data);
	}

	public function delete(){
		$this->Kategori_model->delete($this->uri->rsegment(3));
		$this->index();
	}

	public function form_update(){
		$data['kategori'] = $this->Kategori_model->getMahasiswa($this->uri->rsegment(3));
		$this->load->view('Update_view', $data);
	}

	public function update(){
		$this->Kategori_model->update($this->input->post('old_KdKategori'), $this->input->post('var'));
		$this->index();
	}
}
