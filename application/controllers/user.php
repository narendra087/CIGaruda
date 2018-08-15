<?php
class user extends CI_Controller {

  public function index()
  {
    $this->load->database();
    $this->load->view('login');
  }

  public function stud(){

    $data = $array = array('roll_no' => '1',
                            'name' => 'Dedy'
                            );
    $this->db->insert("stud", $data);
  }
  public function updt(){

    $data = $array = array('roll_no' => '4',
                            'name' => 'Arga'
                            );
    $this->db->set($data);
    $this->db->where("roll_no",'1');
    $this->db->update("stud", $data);
  }
  public function dlt(){
    $this->db->delete("stud", "roll_no = 4");

  }

  public function slct(){
    $query = $this->db->get("stud");
    $data = $query->result();
    print_r($data);
  }

}

?>
