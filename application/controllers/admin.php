<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        $data["pageTitle"] = "Admin";

        $this->load->view('admin_header', $data);
        $this->load->view('admin_nav', $data);
        $this->load->view('admin_index', $data);
        $this->load->view('admin_footer', $data);
    }

    public function organizer()
    {
        $this->load->database();
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $results_per_page = 10;
        $link = 7;
        $start_from = ($page-1) * $results_per_page;

        $sql_string = "SELECT o.*, "
            . "(SELECT COUNT(*) FROM sessions s WHERE s.organizer_id=o.organizer_id) AS event_amount "
            . "FROM organizers AS o "
            . "ORDER BY o.organizer_id DESC "
            . "LIMIT $start_from, $results_per_page";
        $sql_query = $this->db->query($sql_string);

        $result = $this->db->query("SELECT COUNT(organizer_id) AS total FROM organizers;");
        $row = $result->row();

        $data["total_pages"] = ceil($row->total / $results_per_page);
        $data["current_page"] = $page;
        $data["query_listing"] = $sql_query;

        $this->load->view('admin_header', $data);
        $this->load->view('admin_nav', $data);
        $this->load->view('admin_organizer', $data);
        $this->load->view('admin_footer', $data);
    }

    public function organizer_edit()
    {
        $this->load->database();
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;

        $sql_string = "SELECT o.*, "
            . "(SELECT COUNT(*) FROM sessions s WHERE s.organizer_id=o.organizer_id) AS event_amount "
            . "FROM organizers AS o "
            . "WHERE o.organizer_id=$id";
        $sql_query = $this->db->query($sql_string);
        $data["query_listing"] = $sql_query;

        $this->load->view('admin_header', $data);
        $this->load->view('admin_nav', $data);
        $this->load->view('admin_organizer_edit', $data);
        $this->load->view('admin_footer', $data);
    }

}
