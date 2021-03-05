<?php 
class M_struktur_organisasi extends CI_Model{

	function get_all_struktur(){
		$hsl=$this->db->query("SELECT * FROM tbl_struktur");
		return $hsl;
	}

	function simpan_struktur($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_struktur (id_jabatan,guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_jabatan,guru_photo) VALUES ('$id_jabatan','$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$guru_jabatan','$photo')");
		return $hsl;
	}
	function simpan_struktur_tanpa_img($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_struktur (id_jabatan,guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_jabatan) VALUES ('$id_jabatan','$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$guru_jabatan')");
		return $hsl;
	}

	function update_struktur($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan,$photo){
		$hsl=$this->db->query("UPDATE tbl_struktur SET id_jabatan='$id_jabatan',guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_jabatan='$guru_jabatan',guru_photo='$photo' WHERE id_jabatan='$id_jabatan'");
		return $hsl;
	}
	function update_struktur_tanpa_img($id_jabatan,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$guru_jabatan){
		$hsl=$this->db->query("UPDATE tbl_struktur SET id_jabatan='$id_jabatan',guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_jabatan='$guru_jabatan' WHERE id_jabatan='$id_jabatan'");
		return $hsl;
	}
	function hapus_struktur($id_jabatan){
		$hsl=$this->db->query("DELETE FROM tbl_struktur WHERE id_jabatan='$id_jabatan'");
		return $hsl;
	}

	//front-end
	function struktur(){
		$hsl=$this->db->query("SELECT * FROM tbl_struktur");
		return $hsl;
	}
	function struktur_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_struktur limit $offset,$limit");
		return $hsl;
	}

}