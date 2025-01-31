<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
	{
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
        $data['title'] = 'Login';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    } else {
         
        $this->_login();

        }
    }
    
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
       
        //Jika User Ada
        if($user) {
            // Jika user Aktif
                if($user['is_active'] == 1) {         
                    // cek password
                    if(password_verify($password, $user['password'])) {

                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin');
                        } else {
                            redirect('user');

                        }
                
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password Salah </div>');
                        redirect('auth');
                    }
            
                } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Email Belum Di Aktivasi ! </div>');
                        redirect('auth');
                }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email Tersebut Belum Terdaftar!  </div>');
                    redirect('auth');
            }
        }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
     
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password Tidak Sesuai!',
            'min_length' => 'Password Terlalu Singkat!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

     if ($this->form_validation->run() == false) {
        $data['title'] = "User Register";
        $this->load->view('templates/auth_header' ,$data);
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    } else {
        
         $data = [
         'name'=> htmlspecialchars($this->input->post('name',true)),
         'email'=> htmlspecialchars($this->input->post('email',true)),
         'image'=> 'default.jpg',
         'password'=> password_hash($this->input->post('password1'),
         PASSWORD_DEFAULT),
         'role_id'=> 2,
         'is_active'=> 1,
         'date_created'=> time(),
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat akun anda sudah terdaftar! Silahkan Untuk Login </div>');

        redirect('auth'); 

    }
    
}
          
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
        Akun Mu sudah logout! </div>');

        redirect('auth');

}
    public function blocked()
    {
        $this->load->view('auth/blocked');
        
    }
}

