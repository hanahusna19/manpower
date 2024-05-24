<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perencanaan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Perencanaan Unit Kerja';
        $data['ngelola'] = $this->Ngelola_model->getDataNgelola();
        $data['bulan'] = $this->Bulan_model->getBulan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perencanaan/index', $data);
        $this->load->view('templates/footer');

    
    }

    public function tambahngelola()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $data['ngelola'] = $this->Ngelola_model->getDataNgelola();

        $data['title'] = 'Tambah Pengelolaan Baru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perencanaan/tambahngelola', $data);
        $this->load->view('templates/footer');

    }
    public function tambahaksingelola()
    {
        $this->Ngelola_model->tambahaksingelola();
        redirect('perencanaan/index');
    }

    public function hapus_ngelola($id)
    {
        $this->Ngelola_model->hapus_ngelola($id);
        redirect('perencanaan/index');
    }

    public function edit_ngelola($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengelolaan'] = $this->Ngelola_model->datangelola($id);

        $data['title'] = ' Edit Data Pengelolaan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perencanaan/editngelola', $data);
        $this->load->view('templates/footer');
    }

    public function proses_editngelola()
    {
        $this->Ngelola_model->proses_editngelola();
        redirect('perencanaan/index');

    }


    // BAGIAN PENGELOLAAN BULAN 

    public function tambahbulan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $data['bulan'] = $this->Bulan_model->getBulan();

        $data['title'] = 'Tambah Pengelolaan Bulan ';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perencanaan/tambahbulan', $data);
        $this->load->view('templates/footer');

    }

    public function tambahaksibulan()
    {
        $this->Bulan_model->tambahaksibulan();
        redirect('perencanaan/index');
    }

    public function hapus_bulan($id)
    {
        $this->Bulan_model->hapus_bulan($id);
        redirect('perencanaan/index');
    }
    
    public function edit_bulan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bulan'] = $this->Bulan_model->databulan($id);

        $data['title'] = ' Edit Data Pengelolaan Bulan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perencanaan/editbulan', $data);
        $this->load->view('templates/footer');
    }

    public function proses_editbulan()
    {
        $this->Bulan_model->proses_editbulan();
        redirect('perencanaan/index');

    }
}




