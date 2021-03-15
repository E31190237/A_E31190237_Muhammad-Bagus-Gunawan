<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Muhmmmad Bagus Gunawan","nim"=>"E31190237"],
			["nama"=>"Lesley","nim"=>"E31123566"],
			["nama"=>"Silvana","nim"=>"E31166890"] 
        ];
        return $data_mahasiswa;
	}
}
?>