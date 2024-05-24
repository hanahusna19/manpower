<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ganti_model extends CI_Model
{
    public function getDataGanti()
    {
        return $this->db->get('pengajuan_baru')->result_array();
    }
}