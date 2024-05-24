<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Baru_model extends CI_Model
{
    public function getDataBaru()
    {
        return $this->db->get('pengajuan_baru')->result_array();
    }
       
    public function tambahaksibaru() 
    {
        $data = [
            "tanggal_pengajuan" => $this->input->post('tanggal_pengajuan'),
            "periode_awal" => $this->input->post('periode_awal'),
            "periode_akhir" => $this->input->post('periode_akhir'),
            "posisi_pegawai" => $this->input->post('posisi_pegawai'),
            "status_pegawai" => $this->input->post('status_pegawai'),
            "deskripsi" => $this->input->post('deskripsi'),
            "jumlah" => $this->input->post('jumlah'),
            "unit" => $this->input->post('unit'),
            
        ];

        $this->db->insert('pengajuan_baru', $data);
    }

    public function hapus_baru($id){

        $this->db->where('id', $id);
        $this->db->delete('pengajuan_baru');
    }

    public function databaru($id)
    {
        return $this->db->get_where('pengajuan_baru', ['id' => $id])->row_array();
    }

    public function proses_editbaru()
    {
        $data = [
            "tanggal_pengajuan" => $this->input->post('tanggal_pengajuan'),
            "periode_awal" => $this->input->post('periode_awal'),
            "periode_akhir" => $this->input->post('periode_akhir'),
            "posisi_pegawai" => $this->input->post('posisi_pegawai'),
            "status_pegawai" => $this->input->post('status_pegawai'),
            "deskripsi" => $this->input->post('deskripsi'),
            "jumlah" => $this->input->post('jumlah'),
            "unit" => $this->input->post('unit'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengajuan_baru' , $data);
    }
}
