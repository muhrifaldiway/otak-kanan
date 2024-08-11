<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['title'] = 'Halaman Guru';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['LPS'] = $this->db->get('pertanyaan_lps')->result_array();
    $data['id_kelas'] = $this->Admin_model->data_murid();
    $data['kelas'] = $this->db->get('data_kelas')->result_array();

    $this->load->view('templates/header');
    $this->load->view('guru/siswa', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_lps()
  {

    $result = array();
    foreach ($_POST['pertanyaan'] as $key => $val) {
      $result[] = array(
        'pertanyaan' => $_POST['pertanyaan'][$key],
        'id_data_wali' => $_POST['id_data_wali'][$key],
        'id_data_guru' => $_POST['id_data_guru'][$key],
        'jawaban' => $_POST['jawaban'][$key]
      );
    }
    $this->db->insert_batch('hasil_lps_guru', $result);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    jawaban anda telah dikirm</div>');
    redirect('guru');
  }


  public function lps_guru($id_login)
  {
    $data['title'] = 'Halaman Guru';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['LPS'] = $this->db->get('pertanyaan_lps')->result_array();
    $data['siswa'] = $this->db->get_where('login', ['id_login' => $id_login])->row();
    $data['id_kelas'] = $this->Admin_model->data_murid();
    $data['kelas'] = $this->db->get('data_kelas')->result_array();

    $this->load->view('templates/header');
    $this->load->view('guru/lps_guru', $data);
    $this->load->view('templates/footer');
  }


  public function terima_kasih()
  {
    $data['title'] = 'Halaman Siswa';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header');
    $this->load->view('guru/terima_kasih', $data);
    $this->load->view('templates/footer');
  }
}

  /* End of file User.php */
