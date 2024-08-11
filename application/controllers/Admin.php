<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['title'] = 'Halaman Admin';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['admin'] = $this->db->get_where('login', ['level' => 'admin'])->result_array();

    $this->form_validation->set_rules('nama', 'nama', 'required|trim');
    $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[login.email]', ['is_unique' => 'email ini sudah terdaftar!']);
    $this->form_validation->set_rules('password', 'password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin');
      $this->load->view('admin/akses', $data);
      $this->load->view('templates/footer_admin');
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'id_data_kelas' => $this->input->post('id_data_kelas'),
        'level' => $this->input->post('level'),
      ];

      $this->db->insert('login', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    berhasil ditambahkan</div>');
      redirect('admin');
    }
  }

  public function hapus_admin($id_login)
  {

    $this->Admin_model->hapus_admin($id_login);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    admin telah berhasil dihapus</div>');
    redirect('admin');
  }


  public function data_lps()
  {
    $data['title'] = 'Halaman Admin';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['LPS'] = $this->db->get('pertanyaan_lps')->result_array();

    $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|trim');
    $this->form_validation->set_rules('jawaban_a', 'jawaban_a', 'required|trim');
    $this->form_validation->set_rules('jawaban_b', 'jawaban_b', 'required|trim');
    $this->form_validation->set_rules('jawaban_c', 'jawaban_c', 'required|trim');
    $this->form_validation->set_rules('jawaban_d', 'jawaban_d', 'required|trim');
    $this->form_validation->set_rules('jawaban_e', 'jawaban_e', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin');
      $this->load->view('admin/data_lps', $data);
      $this->load->view('templates/footer_admin');
    } else {
      $data = [
        'pertanyaan' => $this->input->post('pertanyaan'),
        'jawaban_a' => $this->input->post('jawaban_a'),
        'jawaban_b' => $this->input->post('jawaban_b'),
        'jawaban_c' => $this->input->post('jawaban_c'),
        'jawaban_d' => $this->input->post('jawaban_d'),
        'jawaban_e' => $this->input->post('jawaban_e'),
      ];

      $this->db->insert('pertanyaan_lps', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/data_lps');
    }
  }

  public function hapus_lps($id)
  {

    $this->Admin_model->hapus_lps($id);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    Data telah berhasil dihapus</div>');
    redirect('admin/data_lps');
  }


  public function data_lhb()
  {
    $data['title'] = 'Halaman Admin';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header_admin');
    $this->load->view('admin/data_lhb', $data);
    $this->load->view('templates/footer_admin');
  }


  public function data_kuesioner()
  {
    $data['title'] = 'Halaman Admin';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['kuesioner'] = $this->db->get('kuesioner')->result_array();

    $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|trim');
    $this->form_validation->set_rules('jawaban_a', 'jawaban_a', 'required|trim');
    $this->form_validation->set_rules('jawaban_b', 'jawaban_b', 'required|trim');
    $this->form_validation->set_rules('jawaban_c', 'jawaban_c', 'required|trim');
    $this->form_validation->set_rules('jawaban_d', 'jawaban_d', 'required|trim');
    $this->form_validation->set_rules('jawaban_e', 'jawaban_e', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin');
      $this->load->view('admin/data_kuesioner', $data);
      $this->load->view('templates/footer_admin');
    } else {
      $data = [
        'pertanyaan' => $this->input->post('pertanyaan'),
        'jawaban_a' => $this->input->post('jawaban_a'),
        'jawaban_b' => $this->input->post('jawaban_b'),
        'jawaban_c' => $this->input->post('jawaban_c'),
        'jawaban_d' => $this->input->post('jawaban_d'),
        'jawaban_e' => $this->input->post('jawaban_e'),
      ];

      $this->db->insert('kuesioner', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/data_kuesioner');
    }
  }

  public function hapus_kuesioner($id)
  {

    $this->Admin_model->hapus_kuesioner($id);
    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
    Data telah berhasil dihapus</div>');
    redirect('admin/data_kuesioner');
  }


  public function jawaban_kuesioner()
  {
    $data['title'] = 'Data  Siswa';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['siswa'] = $this->db->get_where('login', ['level' => 'wali'])->result();

    $this->load->view('templates/header_admin');
    $this->load->view('admin/jawaban_kuesioner', $data);
    $this->load->view('templates/footer_admin');
  }

  public function jawaban_kuesioner_siswa($id_login)
  {
    $data['title'] = 'Data Jawaban kuesioner Siswa';

    $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

    $data['jawaban'] = $this->db->get_where('hasil_kuesioner', ['id_data_wali' => $id_login])->result();

    $this->load->view('templates/header_admin');
    $this->load->view('admin/jawaban_kuesioner_siswa', $data);
    $this->load->view('templates/footer_admin');
  }
}



  /* End of file Admin.php */
