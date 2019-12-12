<?php


class Kategori_model extends CI_Model {

	function retrieve(){
		$query = $this->db->get('kategori');

		if($query->result()){
			foreach ($query->result() as $content) {
				$data[] = array(
							$content->KdKategori,
							$content->NmKategori
				);
			}
			return $data;
		} else {
			return FALSE;
		}
	}

	function add($arg){
		$data = array(
				'KdKategori' 		=> $arg[0],
				'NmKategori' 		=> $arg[1]
		);
		$this->db->insert('kategori', $data);
	}

	function delete($id){
		$this->db->where('KdKategori', $id);
		$this->db->delete('kategori');
	}

	function update($id, $form){
		$data = array(
            'KdKategori' 		=> $form[0],
			'NmKategori' 		=> $form[1]
		);
		$this->db->where('KdKategori', $id);
		$this->db->update('kategori', $data);
	}

	function getMahasiswa($id){
		$this->db->where('KdKategori', $id);
		$query = $this->db->get('kategori');

		if($query->result()){
			foreach($query->result() as $content){
				$data = array (
						$content->KdKategori,
						$content->NmKategori
				);
			}
			return $data;
		} else{
			return FALSE;
		}
	}

	public function record_count(){
		return $this->db->count_all("kategori");
	}

	public function fetch_kategori($limit, $start){
		$this->db->limit($limit, $start);
		$query = $this->db->get("kategori");

		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
}
