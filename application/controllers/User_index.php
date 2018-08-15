<?php
  /**
   *
   */
  class User_index extends CI_Controller
  {
	  
	  public function indexjktdc()
    {
      $this->load->view('header2');
      $this->load->view('admin/unit_jktdc');
      $this->load->view('footer');
    }

    public function indexjktcc()
    {
      $this->load->view('admin/view_admin_indexjktcc');
    }
	
	public function indexjktcg()
    {
      $this->load->view('admin/view_admin_indexjktcg');
    }
	
	public function indexjktci()
    {
      $this->load->view('admin/view_admin_indexjktci');
    }
	
	
	
	public function indexjktde()
    {
      $this->load->view('header2');
      $this->load->view('admin/unit_jktde');
      $this->load->view('footer');
    }

    public function indexjktmq()
    {
      $this->load->view('admin/view_admin_indexjktmq');
    }
	
	public function indexjktml()
    {
      $this->load->view('admin/view_admin_indexjktml');
    }
	
	
  }


 ?>
