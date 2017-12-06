<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class session extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;

        $sql_string = "SELECT * FROM sessions NATURAL JOIN trainers NATURAL JOIN venues NATURAL JOIN organizers NATURAL JOIN session_levels WHERE session_id=$id";
        $sql_query = $this->db->query($sql_string)->row();
        $data["row"] = $sql_query;

        $sql_string = "SELECT * FROM relations r JOIN sessions s ON s.session_id = r.session_id WHERE r.related_id=1
UNION
SELECT * FROM relations r JOIN sessions s ON s.session_id = r.related_id WHERE r.session_id=1;";
        $sql_query = $this->db->query($sql_string);
        $data["relate"] = $sql_query;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('session', $data);
        $this->load->view('footer', $data);
    }
}