<?php


class Barang_model extends CI_Model {

	function retrieve(){
		$query = $this->db->get('barang');

		if($query->result()){
			foreach ($query->result() as $content) {
				$data[] = array(
							$content->KdBrg,
							$content->NmBrg,
							$content->Satuan,
							$content->HargaBrg,
							$content->Stok,
							$content->KdKategori
				);
			}
			return $data;
		} else {
			return FALSE;
		}
	}

	function add($arg){
		$data = array(
				'KdBrg' 		=> $arg[0],
				'NmBrg' 		=> $arg[1],
				'Satuan' 		=> $arg[2],
				'HargaBrg' 		=> $arg[3],
				'Stok'	 		=> $arg[4],
				'KdKategori' 	=> $arg[5]
		);
		$this->db->insert('barang', $data);
	}

	function delete($id){
		$this->db->where('KdBrg', $id);
		$this->db->delete('barang');
	}

	function update($id, $form){
		$data = array(
            'KdBrg' 		=> $form[0],
			'NmBrg' 		=> $form[1],
			'Satuan' 		=> $form[2],
			'HargaBrg' 		=> $form[3],
			'Stok'	 		=> $form[4],
			'KdKategori' 	=> $form[5]
		);
		$this->db->where('KdBrg', $id);
		$this->db->update('barang', $data);
	}

	function getMahasiswa($id){
		$this->db->where('KdBrg', $id);
		$query = $this->db->get('barang');

		if($query->result()){
			foreach($query->result() as $content){
				$data = array (
						$content->KdBrg,
						$content->NmBrg,
						$content->Satuan,
						$content->HargaBrg,
						$content->Stok,
						$content->KdKategori
				);
			}
			return $data;
		} else{
			return FALSE;
		}
	}

	public function record_count(){
		return $this->db->count_all("barang");
	}

	public function fetch_barang($limit, $start){
		$this->db->limit($limit, $start);
		$query = $this->db->get("barang");

		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
}
