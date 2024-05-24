<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    // TABEL PENGAJUAN 

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Tabel Pengajuan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('unit/index', $data);
        $this->load->view('templates/footer');

    }

        // TABEL PEGAWAI BARU

    public function pegawaibaru()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           
            $data['baru'] = $this->Baru_model->getDataBaru();

            $data['title'] = 'Pegawai Baru';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('unit/pegawaibaru', $data);
            $this->load->view('templates/footer');

        }

        public function tambah_data()
        {
             
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           
            $data['baru'] = $this->Baru_model->getDataBaru();

            $data['title'] = ' Tambah Data Pegawai Baru';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/tambah_baru', $data);
            $this->load->view('templates/footer');

        }

            public function tambahaksibaru()
            {
                $this->Baru_model->tambahaksibaru();
                redirect('unit/pegawaibaru');
            }

            public function hapus_baru($id)
            {
                $this->Baru_model->hapus_baru($id);
                redirect('unit/pegawaibaru');
            }

            public function edit_baru($id)
            {
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['pengajuan_baru'] = $this->Baru_model->databaru($id);

                $data['title'] = ' Edit Data Pegawai Baru';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('pengajuan/edit_baru', $data);
                $this->load->view('templates/footer');
            }

            public function proses_editbaru()
            {
                $this->Baru_model->proses_editbaru();
                redirect('unit/pegawaibaru');

            }
    


    // TABEL PEGAWAI GANTI

    
    public function pegawaiganti()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['ganti'] = $this->Ganti_model->getDataGanti();

            $data['title'] = 'Pegawai Penganti';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('unit/pegawaiganti', $data);
            $this->load->view('templates/footer');

        }
    
    }