<?php

class test extends CI_Controller{
public function __construct()
{
    parent::__construct();
    $this->load->model('model_users');
    $this->load->helper(array('form', 'url'));

}
//tset

public function index()
{
    $this->load->view('header');
    $this->load->view('user/view_fgd');
  $this->load->view('footer');


}
}
?>
