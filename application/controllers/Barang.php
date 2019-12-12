<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Barang_model');
		$this->load->library('pagination');

	}
	public function index()
	{
		/*
		
		$this->load->view('Barang_view', $data);*/

		// $data['mhs'] = $this->Mahasiswa_model->retrieve();
		$config = array();
		$config["base_url"] = base_url() . "index.php/barang/";
		$config["total_rows"] = $this->Barang_model->record_count();
		$config["per_page"] = 9;
		$config["uri_segment"] = 2;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data["result"] = $this->Barang_model->fetch_barang($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["page"] = $page;

		$this->load->view('barang/Barang_V', $data);

	}

	public function form_tambah(){
		$this->load->view('Tambah_view');
	}

	public function submit(){
		$this->Barang_model->add($this->input->post('var'));
		$data['submitted'] = TRUE;
		$this->load->view('Tambah_view', $data);
	}

	public function delete(){
		$this->Barang_model->delete($this->uri->rsegment(3));
		$this->index();
	}

	public function form_update(){
		$data['barang'] = $this->Barang_model->getMahasiswa($this->uri->rsegment(3));
		$this->load->view('Update_view', $data);
	}

	public function update(){
		$this->Barang_model->update($this->input->post('old_KdBrg'), $this->input->post('var'));
		$this->index();
	}
}
