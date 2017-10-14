<?php
class mod_product extends ci_model{



	function select_all(){
		$query = "SELECT tb1.product_id, tb1.nama_product,tb1.harga, tb2.nama_kategori FROM `tabel_product` as tb1, `tabel_kategori` as tb2 WHERE tb1.kategori_id=tb2.kategori_id";

			return $this->db->query($query);
	}

	

	function simpan(){
        $data=array(
                    'nama_product'     =>  $this->input->post('nama_product'),
                    'harga'            =>  $this->input->post('harga'),
                    'kategori_id'      =>  $this->input->post('kategori'),
                    'nama_product_seo' =>  seo_title($this->input->post('nama_product')));
                    $this->db->insert('tabel_product',$data);
    }


    function update(){
    	$data=array(
                    'nama_kategori'     =>  $this->input->post('nama'),
                    'parent'            =>  $this->input->post('parent'),
                    'link'              =>  $this->input->post('link'),
                    'nama_kategori_seo' =>  seo_title($this->input->post('nama')));

    	$this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('tabel_kategori',$data);
    }


}