<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('wali_model');
  }

  public function index()
  {
    $data['title'] = 'Halaman Orang Tua';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['LPS'] = $this->db->get('pertanyaan_lps')->result_array();

    $this->load->view('templates/header');
    $this->load->view('wali/lps', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_lps()
  {

    $result = array();
    foreach ($_POST['pertanyaan'] as $key => $val) {
      $result[] = array(
        'pertanyaan' => $_POST['pertanyaan'][$key],
        'id_data_wali' => $_POST['id_data_wali'][$key],
        'jawaban' => $_POST['jawaban'][$key]
      );
    }
    $this->db->insert_batch('hasil_lps', $result);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    jawaban anda telah dikirm</div>');
    redirect('wali');
  }

  public function kuesioner()
  {
    $data['title'] = 'Halaman Orang Tua';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['kuesioner'] = $this->db->get('kuesioner')->result_array();

    $this->load->view('templates/header');
    $this->load->view('wali/kuesioner', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_kuesioner()
  {
    $result = array();
    foreach ($_POST['pertanyaan'] as $key => $val) {
      $result[] = array(
        'pertanyaan' => $_POST['pertanyaan'][$key],
        'id_data_wali' => $_POST['id_data_wali'][$key],
        'jawaban' => $_POST['jawaban'][$key]
      );
    }
    $this->db->insert_batch('hasil_kuesioner', $result);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    jawaban anda telah dikirm</div>');
    redirect('wali/kuesioner');
  }

  public function lhb()
  {
    $data['title'] = 'Halaman Orang Tua';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header');
    $this->load->view('wali/lhb', $data);
    $this->load->view('templates/footer');
  }


  public function responden()
  {
    $data['title'] = 'Halaman Orang Tua';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();


    $this->load->view('wali/responden', $data);
    
  }

  public function terima_kasih()
  {
    $data['title'] = 'Halaman Orang Tua';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header');
    $this->load->view('wali/terima_kasih', $data);
    $this->load->view('templates/footer');
  }
}

  /* End of file User.php */
