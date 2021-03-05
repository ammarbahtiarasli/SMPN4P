<?php
class M_prestasi_siswa extends CI_Model{

    function get_all_prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
        return $hsl;
    }
    function simpan_prestasi($id_prestasi,$prestasi,$photo_prestasi,$tanggal){
            $hsl=$this->db->query("INSERT INTO tbl_prestasi (id_prestasi,prestasi,photo_prestasi,tanggal) VALUES ('$id_prestasi','$prestasi','$photo_prestasi','$tanggal')");
            return $hsl;
    }

    function simpan_prestasi_tanpa_img($id_prestasi,$prestasi,$tanggal){
        $hsl=$this->db->query("INSERT INTO tbl_prestasi (id_prestasi,prestasi,tanggal) VALUES ('$id_prestasi','$prestasi','$tanggal')");
        return $hsl;
    }
    function update_prestasi($id_prestasi,$prestasi,$photo_prestasi,$tanggal){
        $hsl=$this->db->query("UPDATE tbl_prestasi SET (id_prestasi='$id_prestasi',prestasi='$prestasi',photo_prestasi='$photo_prestasi',tanggal='$tanggal' WHERE id_prestasi='$id_prestasi'");
        return $hsl;
    }
    function update_prestasi_tanpa_img($id_prestasi,$prestasi,$tanggal){
        $hsl=$this->db->query("UPDATE tbl_prestasi SET id_prestasi='$id_prestasi',prestasi='$prestasi',tanggal='$tanggal' WHERE id_prestasi='$id_prestasi'");
        return $hsl;
    }
    function hapus_prestasi($id_prestasi){
        $hsl=$this->db->query("DELETE FROM tbl_prestasi WHERE id_prestasi='$id_prestasi'");
        return $hsl;
    }
    function prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
        return $hsl;
    }
	function prestasi_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi limit $offset,$limit");
		return $hsl;
	}
}
