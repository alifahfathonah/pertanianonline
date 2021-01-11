<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{

			$data['content']	='home';
			$this->load->view('index',$data);
	}

	public function lihat_data_petani()
	{	
			$data['data']		= $this->db->get('tbl_petani');
			$data['content']	='admin/lihat_data_petani';
			$this->load->view('index',$data);
	}

	public function tambah_data_petani()
	{
			$data['content']	='admin/tambah_data_petani';
			$this->load->view('index',$data);
	}

	public function proses_add_petani(){
		$nama_petani		= $this->input->post('nama_petani');
		$alamat				= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');
		
		$data = array('nama_petani'              => $nama_petani , 
					  'alamat'             => $alamat,
					  'no_hp'        	 => $no_hp
			);
		$this->db->insert('tbl_petani',$data);
		redirect('admin/lihat_data_petani');
	}
	public function edit_petani($id_petani)
	{
			$data['data'] 				= $this->db->query("SELECT * FROM tbl_petani where id_petani='$id_petani'");
			$data['content']	='admin/edit_data_petani';
			$this->load->view('index',$data);
	}
	public function proses_edit_petani(){
		$id_petani				= $this->input->post('id_petani');
		$nama_petani		= $this->input->post('nama_petani');
		$alamat				= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');
		
		$data = array('nama_petani'              => $nama_petani , 
					  'alamat'             => $alamat,
					  'no_hp'        	 => $no_hp
			);
		$this->db->where('id_petani',$id_petani);
		$this->db->update('tbl_petani',$data);
		redirect('admin/lihat_data_petani');
	}
	public function hapus_petani($id_petani)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_petani where id_petani='$id_petani'");
		redirect('admin/lihat_data_petani');
			
	}
	


	/*BARANG*/

	public function lihat_data_barang()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_barang left join tbl_petani on tbl_petani.id_petani=tbl_barang.id_petani");
			$data['content']	='admin/lihat_data_barang';
			$this->load->view('index',$data);
	}

	public function tambah_data_barang()
	{
			$data['content']	='admin/tambah_data_barang';
			$this->load->view('index',$data);
	}

	public function proses_add_barang(){
		$id_petani		= $this->input->post('id_petani');
		$nama_barang				= $this->input->post('nama_barang');
		$harga				= $this->input->post('harga');
		$jenis		= $this->input->post('jenis');
		$keterangan				= $this->input->post('keterangan');
		$file  =  $_FILES['userfile']['name'];

		  $config['upload_path']          = 'assets/foto_barang';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '8024';
                $config['max_width']            = '8600';
                $config['max_height']           = '8200';
                $this->load->library('upload', $config);


                if ( ! $this->upload->do_upload())
                {

                        $error = array('error' => $this->upload->display_errors());
                        //redirect('index.php/admin/tambah_data_barang');
               }
                else
                {
                        $datas = array('upload_data' => $this->upload->data());  
						$data = array('id_petani'              => $id_petani, 
									  'nama_barang'             => $nama_barang,
									  'harga'        	 => $harga,
									  'jenis'        	 => $jenis,
									  'keterangan'        	 => $keterangan,
									  'gambar'        	 => $file
			);
					
		$this->db->insert('tbl_barang',$data);
		redirect('admin/lihat_data_barang');
				}
	}
	public function edit_barang($id_barang)
	{
			$data['data'] 				= $this->db->query("SELECT * FROM tbl_barang where id_barang='$id_barang'");
			$data['content']	='admin/edit_data_barang';
			$this->load->view('index',$data);
	}
	public function proses_edit_barang(){
		$id_barang		= $this->input->post('id_barang');
		$id_petani		= $this->input->post('id_petani');
		$nama_barang				= $this->input->post('nama_barang');
		$harga				= $this->input->post('harga');
		$jenis		= $this->input->post('jenis');
		$keterangan				= $this->input->post('keterangan');
		
		$data = array('id_petani'              => $id_petani, 
					  'nama_barang'             => $nama_barang,
					  'harga'        	 => $harga,
					  'jenis'        	 => $jenis,
					  'keterangan'        	 => $keterangan
			);
		$this->db->where('id_barang',$id_barang);
		$this->db->update('tbl_barang',$data);
		redirect('admin/lihat_data_barang');
	}
	public function hapus_barang($id_barang)
	{
			$data['data'] 				= $this->db->query("DELETE  FROM tbl_barang where id_barang='$id_barang'");
		redirect('admin/lihat_data_barang');
			
	}

	/*Kontak*/
	public function lihat_data_kontak()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_kontak ");
			$data['content']	='admin/lihat_data_kontak';
			$this->load->view('index',$data);
	}
	public function lihat_data_admin()
	{	
			$data['data']		= $this->db->query("SELECT * FROM tbl_admin ");
			$data['content']	='admin/lihat_data_admin';
			$this->load->view('index',$data);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */