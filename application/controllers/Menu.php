<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
 
    // TABEL MENU
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Menu Akses Manajemen';
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false ) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');

    } else {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu ditambahkan</div>');
        redirect('menu');
     }

    }

    public function hapusmenu($id)
{
    $this->Menu_model->hapusmenu($id);
    redirect('menu');
}

    public function editmenu($id)
{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['user_menu'] = $this->Menu_model->datamenu($id);

    $data['title'] = ' Edit Menu Baru';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/editmenu', $data);
    $this->load->view('templates/footer');
}

    public function proses_editmenu()
{
    $this->Menu_model->proses_editmenu();
    redirect('menu');

}

    // TABEL SUBMENU

    public function submenu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submenu Akses';

        $this->load->model('Menu_model','menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false ) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
        
    } else {
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $this->db->insert('user_sub_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        SubMenu ditambahkan</div>');
        redirect('menu/submenu');
        
    }
        
}

    public function hapus_submenu($id)
{
    $this->Menu_model->hapus_submenu($id);
    redirect('menu/submenu');
}


    public function edit_submenu($id)
{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['user_sub_menu'] = $this->Menu_model->datasubmenu($id);

    $data['title'] = ' Edit Sub Menu Baru';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/editsubmenu', $data);
    $this->load->view('templates/footer');
}

    public function proses_editsubmenu()
{
    $this->Menu_model->proses_editsubmenu();
    redirect('menu/submenu');

}
}