
<?php
   class chart extends CI_Controller {
     public function __construct(){
       parent::__construct();
       $this->load->helper(array('form', 'url'));
     }

      public function index() {
        $const = 'JKTDC';
        $json_array = $this->model_users->rata2construct();
   //print_r($json_array);
       $hehe = json_encode($json_array);
       print_r($hehe);

}





public function consWPDirektoratjktdc() {
  $dir = 'JKTDC';
  $cons = 'WP';
  $json_array = $this->model_users->LAdirektorat($dir, $cons);
//print_r($json_array);
 $hehe = json_encode($json_array);
//print_r($hehe);

}

      public function tampilkan(){

//         $this->load->view('chart');

         //echo "haiii";
         $json_array = $this->model_users->rata2construct();
         $this->load->view('chart');

         json_encode($json_array);
      }
   }
?>
