<?php
	class product extends CI_Controller{


		function __construct(){
			parent::__construct();
			$this->load->model(array('mod_product','mod_kategori'));
		}

		function index(){
			$data['record']= $this->mod_product->select_all()->result();
			$this->template->load('templateadmin','admin/product/data',$data);
		}


		function post(){
        if(isset($_POST['submit'])){
            $this->mod_product->simpan();
            redirect('admin/product/post');
        }else{
            $data['kategori'] = $this->mod_kategori->select_all()->result();
            $this->template->load('templateadmin','admin/product/post',$data); }
    	}


    	function edit(){
        if(isset($_POST['submit'])){
            $this->mod_kategori->update();
            redirect('admin/kategori/edit');
        }else{
            $id            = $this->uri->segment(4);
            $data['row']   = $this->db->get_where('tabel_product',array('product_id'=>$id))->row_array();
             $data['kategori'] = $this->mod_kategori->select_all()->result();
            $this->template->load('templateadmin','admin/product/edit',$data);
        }}

    	function delete(){
    	$this->db->where('kategori_id',$this->uri->segment(4));
    	$this->db->delete('tabel_kategori');
    	redirect('admin/kategori');}


	}
	
