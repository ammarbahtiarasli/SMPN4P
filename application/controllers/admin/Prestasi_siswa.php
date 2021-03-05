<?php 
class Prestasi_siswa extends CI_Controller{
	function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
            $this->load->model('m_prestasi_siswa');
            $this->load->library('upload');
   }
            function index(){
				$x['data']=$this->m_prestasi_siswa->get_all_prestasi();
                $this->load->view('admin/v_prestasi_siswa',$x);
            }
            function simpan_prestasi(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo_prestasi=$gbr['file_name'];
							$id_prestasi=strip_tags($this->input->post('xid_prestasi'));
							$prestasi=strip_tags($this->input->post('xprestasi'));
							$photo_prestasi=strip_tags($this->input->post('xphoto_prestasi'));
							$tanggal=strip_tags($this->input->post('xtanggal'));

							$this->m_prestasi_siswa->simpan_prestasi($id_prestasi,$prestasi,$photo_prestasi,$tanggal);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/prestasi_siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/prestasi_siswa');
	                }
	                 
	            }else{
	            	$id_prestasi=strip_tags($this->input->post('xid_prestasi'));
					$prestasi=strip_tags($this->input->post('xprestasi'));
					$tanggal=strip_tags($this->input->post('xtanggal'));

					$this->m_prestasi_siswa->simpan_prestasi_tanpa_img($id_prestasi,$prestasi,$tanggal);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/prestasi_siswa');
				}
				
	}
	
	function update_prestasi(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $photo_prestasi=$this->input->post('photo_prestasi');
							$path='./assets/images/'.$photo_prestasi;
							unlink($path);
	                        $photo_prestasi=$gbr['file_name'];
                            $id_prestasi=strip_tags($this->input->post('xid_prestasi'));
							$prestasi=strip_tags($this->input->post('xprestasi'));
							$photo_prestasi=strip_tags($this->input->post('xphoto_prestasi'));
							$tanggal=strip_tags($this->input->post('xtanggal'));

							$this->m_prestasi_siswa->update_prestasi($id_prestasi,$prestasi,$photo_prestasi,$tanggal);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/prestasi_siswa');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/prestasi_siswa');
	                }
	                
	            }else{
                            $id_prestasi=strip_tags($this->input->post('xid_prestasi'));
                            $prestasi=strip_tags($this->input->post('xprestasi'));
                            $tanggal=strip_tags($this->input->post('xtanggal'));
        
                            $this->m_prestasi_siswa->update_prestasi_tanpa_img($id_prestasi,$prestasi,$tanggal);
                            echo $this->session->set_flashdata('msg','success');
                            redirect('admin/prestasi_siswa');
	            } 

	}

	function hapus_prestasi(){
		$id_prestasi=$this->input->post('id_prestasi');
		$photo_prestasi=$this->input->post('photo_prestasi');
		$path='./assets/images/'.$photo_prestasi;
		unlink($path);
		$this->m_prestasi_siswa->hapus_prestasi($id_prestasi);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/prestasi_siswa');
    }
}

