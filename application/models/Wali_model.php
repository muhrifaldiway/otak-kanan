<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wali_model extends CI_model
{

  public function hasil()
  {
        $this->db->select('*');
        $this->db->from('hasil_lps');
        $this->db->join('obat', 'obat.id = biaya_obat.id_obat', 'left');
        $this->db->where('biaya_obat.id_pasien', $id);
        return $this->db->get()->result();
  }


}