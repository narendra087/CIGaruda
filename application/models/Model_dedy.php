<?php
class Model_dedy extends CI_Model{


  public function dd_direktorat()	{

  		$hasil = $this->db->query("SELECT distinct direktorat from tb_pegawai");

  		$dd['']='Please select direktorat';
      if($hasil->num_rows()>0){
        foreach ($hasil->result() as $row) {
          $dd[$row->direktorat] = $row->direktorat;
          # code...
        }
      }
      return $dd;
}

  public function queryIsna(){
		//$this->db->order_by('status_kuesioner', 'ASC')
		$hasil = $this->db->query("SELECT sum(sq.rerata) AS sum FROM (SELECT metode.var_metode, AVG(hasil_nilai.hasil_nilai_result*metode.bobot)
AS rerata FROM hasil_nilai JOIN tb_pertanyaan
ON hasil_nilai.id_kuesioner=tb_pertanyaan.id_kuesioner
JOIN metode ON tb_pertanyaan.id_metode=metode.id_metode
GROUP BY metode.id_metode) AS sq;");
		//$query = $this->db->get('kuisioner');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}



}
 ?>
