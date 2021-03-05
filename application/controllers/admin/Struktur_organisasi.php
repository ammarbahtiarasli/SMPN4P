<?php
class Struktur_organisasi extends Ci_controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };

		$this->load->model('m_struktur_organisasi');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_struktur_organisasi->get_all_struktur();
		$this->load->view('admin/v_struktur_organisasi',$x);
    }
	
	function simpan_struktur(){
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

                            $photo=$gbr['file_name'];
                            $id_jabatan=strip_tags($this->input->post('xid_jabatan'));
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
                            $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                            $guru_jabatan=$this->input->post('xguru_jabatan');
                            

							$this->m_struktur_organisasi->simpan_struktur($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/struktur_organisasi');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/struktur_organisasi');
	                }
	                 
	            }else{
                    $id_jabatan=strip_tags($this->input->post('xid_jabatan'));
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
                    $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                    $guru_jabatan=$this->input->post('xguru_jabatan');
                    
				$this->m_struktur_organisasi->simpan_struktur_tanpa_img($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/struktur_organisasi');
				}
				
	}
	
	function update_struktur(){
				
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
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $id_jabatan=$this->input->post('id_jabatan');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$guru_jabatan=$this->input->post('xguru_jabatan');
                            

							$this->m_struktur_organisasi->update_struktur($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/struktur_organisasi');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/struktur_organisasi');
	                }
	                
	            }else{
							$id_jabatan=$this->input->post('id_jabatan');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
                            $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                            $guru_jabatan=$this->input->post('xguru_jabatan');
                            $photo=$this->input->post('xguru_photo');
							$this->m_struktur_organisasi->update_struktur_tanpa_img($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/struktur_organisasi');
	            } 

	}

	function hapus_struktur(){
		$id_jabatan=$this->input->post('id_jabatan');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_struktur_organisasi->hapus_struktur($id_jabatan);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/struktur_organisasi');
	}

}