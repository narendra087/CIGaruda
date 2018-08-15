<?php
   class json extends CI_Controller {
     public function __construct(){
       parent::__construct();
       $this->load->helper(array('form', 'url'));
       $this->load->model('Model_dedy');
     }

      public function Dirjktdc() {
        $dir = 'jktdc';
        $json_array = $this->model_users->rata2constructDirektorat($dir);
        //print_r($json_array);
       $hehe = json_encode($json_array);
       print_r($hehe);

}
        //json data chart
public function consLADirektoratjktdc() {
      $dir = 'JKTDC';
      $cons = 'LA';
      $json_array = $this->model_users->ConsDirektorat($dir, $cons);
//print_r($json_array);
      $hehe = json_encode($json_array);
      print_r($hehe);
}

public function consWPDirektoratjktdc() {
      $dir = 'JKTDC';
      $cons = 'WP';
      $json_array = $this->model_users->ConsDirektorat($dir, $cons);
//print_r($json_array);
      $hehe = json_encode($json_array);
      print_r($hehe);
}

public function consPEDirektoratjktdc() {
      $dir = 'JKTDC';
      $cons = 'PE';
      $json_array = $this->model_users->ConsDirektorat($dir, $cons);
//print_r($json_array);
      $hehe = json_encode($json_array);
      print_r($hehe);
}
public function consIEDirektoratjktdc() {
      $dir = 'JKTDC';
      $cons = 'IE';
      $json_array = $this->model_users->ConsDirektorat($dir, $cons);
//print_r($json_array);
      $hehe = json_encode($json_array);
      print_r($hehe);
}

public function Isna(){

        $json_array = $this->Model_dedy->queryIsna();
  //print_r($json_array);
        $hehe = json_encode($json_array);
        print_r($hehe);

}
}
