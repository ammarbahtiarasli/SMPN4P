<?php
class visi_misi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_kategori');
	}
	function index(){
		$x['berita']=$this->m_tulisan->get_berita_home();
		$x['category']=$this->db->get('tbl_kategori');
		$this->load->view('depan/v_visi_misi',$x);
	}
}