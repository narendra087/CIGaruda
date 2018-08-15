<?php
class editform extends CI_Controller{    
    function index(){
        $this->load->model('model_users');
        $judul          = "Daftar Barang";
        $data['judul']  = $judul;
        $data['pertanyaan'] = $this->model_users->tb_kuesioner()->result();
        $this->load->view('list_kuesioner',$data);
    }



    //kuesioner ------------------------------------------------------------------
    function input_kue(){
        $this->load->model('model_users');
        $this->load->helper('form_helper');
 
        $data_cons = array(
            // 'LA' => 'Leadership Age'
            // 'IE' => 'Innovation Element';
            'dd_construct' => $this->model_users->dd_construct(),
            'construct_selected' => $this->input->post('construct') ? $this->input->post('construct') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
        );
        $this->load->view('editform/input_pertanyaan_kue', $data_cons);
    }
    
    function input_simpan_kue(){
        $kue='kue';
        $datapertanyaan = array(
            'id_metode' => $kue,
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'  =>  $this->input->post('id_construct'));
        $this->db->insert('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_kuesioner');   
    }

    // function preview_kue(){
    //     $judul          = "Isilah Pernyataan Berikut Sesuai dengan yang seharusnya";
    //     $data['judul']  = $judul;
    //     $data['pertanyaan'] = $this->model_users->list_kuesioner()->result();
    //     $this->load->view('form_view',$data);
    // }

    function edit_kue(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('header2');
        $this->load->view('editform/edit_pertanyaan_kue',$data);
        $this->load->view('footer');
    }
      
    function edit_simpan_kue(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_kuesioner');
    }

    function delete_kue(){
        $id_pertanyaan = $this->uri->segment(3);
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('hasil_nilai');
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('tb_pertanyaan');
        redirect('admin/edit_kuesioner');
    }

    
    //kuesioner -------------------------------


    //presentation -----------------------------
    function input_pre(){
        $this->load->view('editform/input_pertanyaan_pre');
    }
    
    function input_simpan_pre(){
        $kue='pre';
        $datapertanyaan = array(
            'id_metode' => $kue,
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'  =>  $this->input->post('id_construct'));
        $this->db->insert('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_presentation');   
    }

    // function preview_pre(){
    //     $judul          = "Isilah Pernyataan Berikut Sesuai dengan yang seharusnya";
    //     $data['judul']  = $judul;
    //     $data['pertanyaan'] = $this->model_users->list_kuesioner()->result();
    //     $this->load->view('form_view',$data);
    //}

    function edit_pre(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('header2');
        $this->load->view('editform/edit_pertanyaan_pre',$data);
        $this->load->view('footer');
    }
      
    function edit_simpan_pre(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_presentation');
    }

    function delete_pre(){
        $id_pertanyaan = $this->uri->segment(3);
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('hasil_nilai');
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('tb_pertanyaan');
        redirect('admin/edit_presentation');
    }
    //presentation ---------------------

    //FGD -----------------------------
    function input_fgd(){
        $this->load->view('editform/input_pertanyaan_fgd');
    }
    
    function input_simpan_fgd(){
        $kue='fgd';
        $datapertanyaan = array(
            'id_metode' => $kue,
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'  =>  $this->input->post('id_construct'));
        $this->db->insert('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_fgd');   
    }

    // function preview_pre(){
    //     $judul          = "Isilah Pernyataan Berikut Sesuai dengan yang seharusnya";
    //     $data['judul']  = $judul;
    //     $data['pertanyaan'] = $this->model_users->list_kuesioner()->result();
    //     $this->load->view('form_view',$data);
    //}

    function edit_fgd(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('header2');
        $this->load->view('editform/edit_pertanyaan_fgd',$data);
        $this->load->view('footer');

    }
      
    function edit_simpan_fgd(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_fgd');
    }

    function delete_fgd(){
        $id_pertanyaan = $this->uri->segment(3);
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('hasil_nilai');
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('tb_pertanyaan');
        redirect('admin/edit_fgd');
    }
    //FGD ---------------------

    //interview -----------------------------
    function input_inter(){
        $this->load->view('editform/input_pertanyaan_inter');
    }
    
    function input_simpan_inter(){
        $kue='inter';
        $datapertanyaan = array(
            'id_metode' => $kue,
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'  =>  $this->input->post('id_construct'));
        $this->db->insert('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_interview');   
    }

    // function preview_pre(){
    //     $judul          = "Isilah Pernyataan Berikut Sesuai dengan yang seharusnya";
    //     $data['judul']  = $judul;
    //     $data['pertanyaan'] = $this->model_users->list_kuesioner()->result();
    //     $this->load->view('form_view',$data);
    //}

    function edit_inter(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('header2');
        $this->load->view('editform/edit_pertanyaan_inter',$data);
        $this->load->view('footer');

    }
      
    function edit_simpan_inter(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_interview');
    }

    function delete_inter(){
        $id_pertanyaan = $this->uri->segment(3);
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('hasil_nilai');
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('tb_pertanyaan');
        redirect('admin/edit_interview');
    }
    //interview ---------------------

    //observation -----------------------------
    function input_obs(){
        $this->load->view('editform/input_pertanyaan_obs');
    }
    
    function input_simpan_obs(){
        $kue='obs';
        $datapertanyaan = array(
            'id_metode' => $kue,
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'  =>  $this->input->post('id_construct'));
        $this->db->insert('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_observation');   
    }

    // function preview_pre(){
    //     $judul          = "Isilah Pernyataan Berikut Sesuai dengan yang seharusnya";
    //     $data['judul']  = $judul;
    //     $data['pertanyaan'] = $this->model_users->list_kuesioner()->result();
    //     $this->load->view('form_view',$data);
    //}

    function edit_obs(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('header2');
        $this->load->view('editform/edit_pertanyaan_obs',$data);
        $this->load->view('footer');

    }
      
    function edit_simpan_obs(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_observation');
    }

    function delete_obs(){
        $id_pertanyaan = $this->uri->segment(3);
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('hasil_nilai');
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->delete('tb_pertanyaan');
        redirect('admin/edit_observation');
    }
    //observation ---------------------
}