<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  ";
        return $this->db->query($query)->result_array();

    }

    public function hapusmenu($id){

        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }

    public function datamenu($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function proses_editmenu()
    {
        $data = [
            "menu" => $this->input->post('menu'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu' , $data);
    }

    // SUB MENU
    public function hapus_submenu($id){

        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    public function datasubmenu($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }

    public function proses_editsubmenu()
    {
        $data = [
            "menu_id" => $this->input->post('menu_id'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu' , $data);
    }
       
}