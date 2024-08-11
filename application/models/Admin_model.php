<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  public function get_kelas_murid()
  {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->join('data_kelas', 'data_kelas.id = login.id_data_kelas', 'left');
    $this->db->where('login.level', 'wali');
    return $this->db->get()->result();
  }

  public function get_kelas_guru()
  {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->join('data_kelas', 'data_kelas.id = login.id_data_kelas', 'left');
    $this->db->where('login.level', 'guru');
    return $this->db->get()->result();
  }


  public function data_murid()
  {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->join('data_kelas', 'data_kelas.id = login.id_data_kelas', 'left');

    return $this->db->get()->result();
  }


  public function edit_murid($id_login)
  {
    $query = "SELECT *
              FROM login JOIN data_kelas
              ON login.id_data_kelas = data_kelas.id
              WHERE login.id_login = '$id_login'
              ";

    return $this->db->query($query)->result();
  }

  public function edit_guru($id_login)
  {
    $query = "SELECT *
              FROM login JOIN data_kelas
              ON login.id_data_kelas = data_kelas.id
              WHERE login.id_login = '$id_login'
              ";

    return $this->db->query($query)->result();
  }




  function hapus_admin($id_login)
  {
    return $this->db->query("DELETE FROM login WHERE id_login = '$id_login'");
  }

  function hapus_murid($id_login)
  {
    return $this->db->query("DELETE FROM login WHERE id_login = '$id_login'");
  }

  function hapus_guru($id_login)
  {
    return $this->db->query("DELETE FROM login WHERE id_login = '$id_login'");
  }

  function hapus_kelas($id)
  {
    return $this->db->query("DELETE FROM data_kelas WHERE id = '$id'");
  }

  function hapus_lps($id)
  {
    return $this->db->query("DELETE FROM pertanyaan_lps WHERE id = '$id'");
  }

  function hapus_kuesioner($id)
  {
    return $this->db->query("DELETE FROM kuesioner WHERE id = '$id'");
  }
}

/* End of file Admin_model.php */
