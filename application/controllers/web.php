<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	function index(){
		$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani order by tbl_barang.id_barang limit 4");
		$data['content']  = 'utama';
		$this->load->view('home_web',$data);
	}
	function cari(){
		$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani");
		$data['content']  = 'cari';
		$this->load->view('home_web',$data);
	}

	function lelang(){
		$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani");
		$data['content']  = 'lelang';
		$this->load->view('home_web',$data);
	}

	public function detail_barang($id_barang){
		$data['id_barang'] = $id_barang;

		$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani where tbl_barang.id_barang='$id_barang'");
		$data['content']          = 'detail_barang';
		$this->load->view('home_web',$data);
	}

	function hasil_tani(){
		$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani");
		$data['content']  = 'hasil_tani';
		$this->load->view('home_web',$data);
	}

	public function order($order_id){
		$data['order_id'] = $order_id;
		$data['data']		= $this->db->query("SELECT * FROM order left join order_details on order_details.orderid=order.orderid='$order_id'");
		$data['content']  = 'order';
		$this->load->view('home_web',$data);
	}

	function petunjuk(){
		$data['content']  = 'petunjuk';
		$this->load->view('home_web',$data);
	}
	function kontak(){
		$data['content']  = 'kontak';
		$this->load->view('home_web',$data);
	}
	public function proses_kontak(){
		$nama		= $this->input->post('nama');
		$NIK				= $this->input->post('NIK');
		$pesan				= $this->input->post('pesan');
		
		$data = array('nama'              => $nama , 
					  'NIK'             => $NIK,
					  'pesan'        	 => $pesan
			);
		$this->db->insert('tbl_kontak',$data);
		redirect('web');
	}
	function ketentuan(){
		$data['content']  = 'ketentuan';
		$this->load->view('home_web',$data);
	}
	function login(){
		$data['content']  = 'login';
		$this->load->view('home_web',$data);
	}

}