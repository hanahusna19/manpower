<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = ' Profil Unit Kerja';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');


    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profil';

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim');
        $this->form_validation->set_rules('unit', 'Unit', 'required|trim');

    if ($this->form_validation->run() == FALSE ) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    } else {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $status = $this->input->post('status');
        $posisi = $this->input->post('posisi');
        $unit = $this->input->post('unit');

        // upload gambar 
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);            
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        $this->db->set('name', $name);
        $this->db->set('status', $status);
        $this->db->set('posisi', $posisi);
        $this->db->set('unit', $unit);
        
        $this->db->where('email', $email);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Profile Telah Terganti!</div>'); 
        redirect('user/index');

        }
    }

    public function gantiPassword()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = ' Ubah Password';

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');

    if ($this->form_validation->run() == false ) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/gantipassword', $data);
        $this->load->view('templates/footer');
    } else {
        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password1');

        if (!password_verify($current_password, $data['user']['password'])) {   
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password Yang Anda Masukkan Salah!</div>'); 
            redirect('user/gantipassword');
        } else {
            if ($current_password == $new_password) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Kata sandi dan konfirmasi kata sandi tidak sama. Harap periksa kembali.</div>'); 
                redirect('user/gantipassword');
            } else {
                // password sudah sama 
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                
                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');
                    }
                }
            }
        }
    }
