<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class session extends CI_Controller {
    public function index()
    {
        $this->load->database();
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;

        $sql_string = "SELECT * FROM sessions WHERE session_id=$id";
        $sql_query = $this->db->query($sql_string)->row();
        $data["row"] = $sql_query;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('session', $data);
        $this->load->view('footer', $data);
    }
}