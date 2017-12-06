<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $format = isset($_GET["format"]) ? $_GET["format"] : "";
        $level = isset($_GET["level"]) ? $_GET["level"] : "";
        $type = isset($_GET["type"]) ? $_GET["type"] : "";
        $condition = isset($_GET["condition"]) ? $_GET["condition"] : "";
        $organizer = isset($_GET["organizer"]) ? $_GET["organizer"] : "";
        $trainer = isset($_GET["trainer"]) ? $_GET["trainer"] : "";
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $results_per_page = 12;
        $link = 7;
        $start_from = ($page - 1) * $results_per_page;

        $sql_string = "SELECT * "
            . "FROM sessions "
            . "WHERE datetime_to > now() "
            . "AND (title LIKE '%$condition%' "
            . "OR long_description LIKE '%$condition%') ";
        if ($format) {
            $sql_string .= "AND format='$format' ";
        }
        if ($level) {
            $sql_string .= "AND level='$level' ";
        }
        if ($organizer) {
            $sql_string .= "AND organizer_id='$organizer' ";
        }
        if ($trainer) {
            $sql_string .= "AND trainer_id='$trainer' ";
        }
        $sql_string .= "LIMIT $start_from, $results_per_page";
        $sql_query = $this->db->query($sql_string);


        $sql_string = "SELECT COUNT(session_id) AS total "
            . "FROM sessions "
            . "WHERE datetime_to > now() "
            . "AND (title LIKE '%$condition%' "
            . "OR long_description LIKE '%$condition%') ";
        if ($format) {
            $sql_string .= "AND format = '$format' ";
        }
        if ($level) {
            $sql_string .= "AND level='$level' ";
        }
        if ($organizer) {
            $sql_string .= "AND organizer_id='$organizer' ";
        }
        if ($trainer) {
            $sql_string .= "AND trainer_id='$trainer' ";
        }
        $result = $this->db->query($sql_string);
        $row = $result->row();

        $data["pageTitle"] = "Search sport session | Today's Sport";
        $data["total_pages"] = ceil($row->total / $results_per_page);
        $data["current_page"] = $page;
        $data["query_listing"] = $sql_query;
        $data["format"] = $format;
        $data["level"] = $level;
        $data["type"] = $type;
        $data["condition"] = $condition;
        $data["organizer"] = $organizer;
        $data["trainer"] = $trainer;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('search', $data);
        $this->load->view('footer', $data);
    }
}