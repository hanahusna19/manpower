<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ngelola_model extends CI_Model
{
    public function getDataNgelola()
    {
        return $this->db->get('pengelolaan')->result_array();
    }

    public function tambahaksingelola() 
    {
        $data = [
            "tanggal_pengajuan" => $this->input->post('tanggal_pengajuan'),
            "periode" => $this->input->post('periode'),
            "posisi_pegawai" => $this->input->post('posisi_pegawai'),
            "status_pegawai" => $this->input->post('status_pegawai'),
            "deskripsi" => $this->input->post('deskripsi'),
            "unit" => $this->input->post('unit'),
            
        ];

        $this->db->insert('pengelolaan', $data);
    }

    public function hapus_ngelola($id){

        $this->db->where('id', $id);
        $this->db->delete('pengelolaan');
    }

    public function datangelola($id)
    {
        return $this->db->get_where('pengelolaan', ['id' => $id])->row_array();
    }

    public function proses_editngelola()
    {
        $data = [
            "tanggal_pengajuan" => $this->input->post('tanggal_pengajuan'),
            "periode" => $this->input->post('periode'),
            "posisi_pegawai" => $this->input->post('posisi_pegawai'),
            "status_pegawai" => $this->input->post('status_pegawai'),
            "deskripsi" => $this->input->post('deskripsi'),
            "unit" => $this->input->post('unit'),
            
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengelolaan' , $data);
    }
}
