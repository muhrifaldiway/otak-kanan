<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Data Murid';

        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelas'] = $this->db->get('data_kelas')->result_array();
        $data['wali'] = $this->Admin_model->get_kelas_murid();

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('id_data_kelas', 'kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin');
            $this->load->view('sekolah/murid', $data);
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
            redirect('sekolah');
        }
    }


    public function edit_murid($id_login)
    {

        $data['title'] = 'Ubah Murid';
        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $data['murid'] = $this->Admin_model->edit_murid($id_login);
        $data['kelas'] = $this->db->get('data_kelas')->result_array();

        $this->load->view('templates/header_admin');
        $this->load->view('sekolah/edit_murid', $data);
        $this->load->view('templates/footer_admin');
    }

    public function update_murid()
    {

        $id_login = $this->input->post('id_login');
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'id_data_kelas' => $this->input->post('id_data_kelas'),
            'level' => $this->input->post('level'),
        ];

        $this->db->set($data);
        $this->db->where('id_login', $id_login);
        $this->db->update('login');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('sekolah');
    }

    public function hapus_murid($id_login)
    {
        $this->Admin_model->hapus_murid($id_login);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('sekolah');
    }































    public function guru()
    {
        $data['title'] = 'Halaman Data Guru';

        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $data['LPS'] = $this->Admin_model->get_kelas_guru();
        $data['kelas'] = $this->db->get('data_kelas')->result_array();

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('id_data_kelas', 'kelas', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin');
            $this->load->view('sekolah/guru', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'id_data_kelas' => $this->input->post('id_data_kelas'),
                'level' => $this->input->post('level')

            ];

            $this->db->insert('login', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil ditambahkan</div>');
            redirect('sekolah/guru');
        }
    }


    public function edit_guru($id_login)
    {

        $data['title'] = 'Ubah Guru';
        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $data['guru'] = $this->Admin_model->edit_guru($id_login);
        $data['kelas'] = $this->db->get('data_kelas')->result_array();

        $this->load->view('templates/header_admin');
        $this->load->view('sekolah/edit_guru', $data);
        $this->load->view('templates/footer_admin');
    }

    public function update_guru()
    {

        $id_login = $this->input->post('id_login');
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'id_data_kelas' => $this->input->post('id_data_kelas'),
            'level' => $this->input->post('level'),
        ];

        $this->db->set($data);
        $this->db->where('id_login', $id_login);
        $this->db->update('login');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('sekolah/guru');
    }

    public function hapus_guru($id_login)
    {
        $this->Admin_model->hapus_guru($id_login);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('sekolah/guru');
    }
































    public function kelas()
    {
        $data['title'] = 'Halaman Data Kelas';

        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required|trim');

        $data['kelas'] = $this->db->get('data_kelas')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin');
            $this->load->view('sekolah/kelas', $data);
            $this->load->view('templates/footer_admin');
        } else {

            $data = [
                'nama_kelas' => $this->input->post('nama_kelas')
            ];

            $this->db->insert('data_kelas', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
            berhasil ditambahkan</div>');
            redirect('sekolah/kelas');
        }
    }


    public function edit_kelas($id)
    {

        $data['title'] = 'Ubah Kelas';
        $data['login'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelas'] = $this->db->get_where('data_kelas', ['id' => $id])->result();

        $this->load->view('templates/header_admin');
        $this->load->view('sekolah/edit_kelas', $data);
        $this->load->view('templates/footer_admin');
    }

    public function update_kelas()
    {

        $id = $this->input->post('id');
        $data = [
            'nama_kelas' => $this->input->post('nama_kelas'),
        ];

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('data_kelas');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('sekolah/kelas');
    }

    public function hapus_kelas($id)
    {
        $this->Admin_model->hapus_kelas($id);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('sekolah/kelas');
    }
}
