<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Bulan_model extends CI_Model
{
    public function getBulan()
    {
        return $this->db->get('bulan')->result_array();
    }

    public function tambahaksibulan() 
    {
        $data = [
            "januari" => $this->input->post('januari'),
            "februari" => $this->input->post('februari'),
            "maret" => $this->input->post('maret'),
            "april" => $this->input->post('april'),
            "mei" => $this->input->post('mei'),
            "juni" => $this->input->post('juni'),
            "juli" => $this->input->post('juli'),
            "agustus" => $this->input->post('agustus'),
            "september" => $this->input->post('september'),
            "oktober" => $this->input->post('oktober'),
            "november" => $this->input->post('november'),
            "desember" => $this->input->post('desember'),
            
        ];

        $this->db->insert('bulan', $data);
    }

    public function hapus_bulan($id){

        $this->db->where('id', $id);
        $this->db->delete('bulan');
    }

    public function databulan($id)
    {
        return $this->db->get_where('bulan', ['id' => $id])->row_array();
    }

    public function proses_editbulan()
    {
        $data = [
            "januari" => $this->input->post('januari'),
            "februari" => $this->input->post('februari'),
            "maret" => $this->input->post('maret'),
            "april" => $this->input->post('april'),
            "mei" => $this->input->post('mei'),
            "juni" => $this->input->post('juni'),
            "juli" => $this->input->post('juli'),
            "agustus" => $this->input->post('agustus'),
            "september" => $this->input->post('september'),
            "oktober" => $this->input->post('oktober'),
            "november" => $this->input->post('november'),
            "desember" => $this->input->post('desember'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bulan' , $data);
    }
}
