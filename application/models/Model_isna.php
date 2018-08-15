<?php
class Model_isna extends CI_Model
{
	public function metode()
	{
		//$this->db->order_by('status_kuesioner', 'ASC')
		$metode = $this->db->query("SELECT * FROM metode");
		//$query = $this->db->get('kuisioner');
		return $metode->result();

	}

	function product($id_pertanyaan){
        	return $this->db->get_where('tb_pertanyaan',array('id_kuesioner'=>$id_pertanyaan));
    	}

    public function simpan($hasil, $id, $q)
	{
		$j=0;

		do {
	# code...
	//	$valTangibles = $yeah['2']->id_kuesioner;
			$mtd = array('0' => 'fgd',
									'1' => 'inter',
								 	'2' => 'kue',
									'3' => 'obs',
									'4' => 'pre',
									'5' => 'ondes');
			$data = array(
					//$this->session->userdata('nopeg'),
					//'id_metode'     => $id[$j]->id_metode,
					//$id_kuesioner[$i]->id_kuesioner,
					'bobot' 	=> $hasil[$mtd[$j]]

			);
			$meto = array('id_metode' => $id[$j]->id_metode);


			echo "<br>";
			//$this->db->where('id_metode', $meto);
			$this->db->update('metode',$data, $meto);

			$j++;
			//empty($data);
		}
		while ($j < $q);
		//print_r($data);
		// print_r ($hasil);
		// print_r($id['id_metode']);
	}

		public function simpan_fgd($hasil,$q, $id)
		{
			$j=0;
			$a=1;
			//print_r($hasil);
			do {
				$data = array(
						'sitaunit' => $this->session->userdata('admin_username'),
						'id_kuesioner'     => $id[$j]->id_kuesioner,
						'hasil_unit_result' 	=> $hasil[$id[$j]->id_kuesioner]
				);
				//print_r($data);
				echo "<br>";
				$this->db->insert('hasil_nilai_unit',$data);
				$a++;
				$j++;
				empty($data);
			}
			while ($a <= $q);
			//print_r($data);
	     	//Query insert into
		}

		public function simpan_observation($hasil,$q, $id)
		{
			$j=0;
			$a=1;
			//print_r($hasil);
			do {
				$data = array(
						'sitaunit' => $this->session->userdata('admin_username'),
						'id_kuesioner'     => $id[$j]->id_kuesioner,
						'hasil_unit_result' 	=> $hasil[$id[$j]->id_kuesioner]
				);
				//print_r($data);
				echo "<br>";
				$this->db->insert('hasil_nilai_unit',$data);
				$a++;
				$j++;
				empty($data);
			}
			while ($a <= $q);
			//print_r($data);
	     	//Query insert into
		}

		public function simpan_presentation($hasil,$q, $id)
		{
			$j=0;
			$a=1;
			//print_r($hasil);
			do {
				$data = array(
						'sitaunit' => $this->session->userdata('admin_username'),
						'id_kuesioner'     => $id[$j]->id_kuesioner,
						'hasil_unit_result' 	=> $hasil[$id[$j]->id_kuesioner]
				);
				//print_r($data);
				echo "<br>";
				$this->db->insert('hasil_nilai_unit',$data);
				$a++;
				$j++;
				empty($data);
			}
			while ($a <= $q);
			//print_r($data);
	     	//Query insert into
		}

		public function simpan_interview($hasil,$q, $id)
		{
			$j=0;
			$a=1;
			//print_r($hasil);
			do {
				$data = array(
						'sitaunit' => $this->session->userdata('admin_username'),
						'id_kuesioner'     => $id[$j]->id_kuesioner,
						'hasil_unit_result' 	=> $hasil[$id[$j]->id_kuesioner]
				);
				//print_r($data);
				echo "<br>";
				$this->db->insert('hasil_nilai_unit',$data);
				$a++;
				$j++;
				empty($data);
			}
			while ($a <= $q);
			//print_r($data);
	     	//Query insert into
		}

		public function simpan_ondesk($hasil,$q, $id)
		{
			$j=0;
			$a=1;
			//print_r($hasil);
			do {
				$data = array(
						'sitaunit' => $this->session->userdata('admin_username'),
						'id_kuesioner'     => $id[$j]->id_kuesioner,
						'hasil_unit_result' 	=> $hasil[$id[$j]->id_kuesioner]
				);
				//print_r($data);
				echo "<br>";
				$this->db->insert('hasil_nilai_unit',$data);
				$a++;
				$j++;
				empty($data);
			}
			while ($a <= $q);
			//print_r($data);
	     	//Query insert into
		}

	
}
?>
