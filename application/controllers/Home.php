<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    $this->load->library('form_validation');
  }


  public function index()
  {

    $this->load->view('home/index');


  }

  public function persetujuan()
  {
    $this->load->view('home/persetujuan');

  }

  public function login()
  {


    $this->load->view('home/login');


  }


  public function proses_login()
  {


                //set form validation
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $email = $this->input->post("email", TRUE);
                $password = $this->input->post('password');

                //checking data via model
                $checking = $this->Login_model->check_login('login', array('email' => $email), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(

                            'email' => $apps->email,
                            'user_pass' => $apps->password,
                            'level'      => $apps->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == "admin"){
                            redirect('admin');
                        }else if ($this->session->userdata("level") == "guru") {
                            redirect('guru');
                        }else{
                            redirect('wali');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> MAAF</b> username atau password salah!</div></div>';
                    $this->load->view('home/login', $data);
                }

            }else{

                $this->load->view('home/login');
            }




  }

  public function logout()
  {
    $this->load->view('home/index');

  }










}

  /* End of file Home.php */




  // $data = array(
  //   'email' => $this->input->post('name'),
  //   'password' => $this->input->post('password'),
  // );
  // $hasil = $this->Login_model->cek_user($data);
  // if($hasil == 1){
  //   $log_info = array(
  //     'name' => $this->input->post('name'),
  //     'logged_in' => TRUE
  //   );
  //   $this->session->set_userdata($log_info);
  //   redirect(site_url('Admin'));
  // }else {
  //   $pesan = 'username/password salah';
  //   $this->session->set_flashdata('error', $pesan);
  //   redirect(site_url('home/login'));
  // }
