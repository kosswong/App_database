<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $data["pageTitle"] = "Welcome";
        $data["pageHeading"] = "Featuring";

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('welcome', $data);
        $this->load->view('footer', $data);
    }


    public function listing()
    {
        $data["pageTitle"] = "News Listing";
        $data["pageHeading"] = "Please select a news below";

        $this->load->database();

        $sql_string = 'SELECT * FROM news_cat ORDER BY sorting';
        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
        $sql_query = $this->db->query($sql_string);
        $data["query_categories"] = $sql_query;
        $data["active_category"] = $this->uri->segment(3);

        $sql_string = "SELECT * FROM news"
            . " WHERE cat_id='"
            . $this->uri->segment(3)
            . "' ";
        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;

        $sql_query = $this->db->query($sql_string);
        $data["query_listing"] = $sql_query;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('news_listing', $data);
        $this->load->view('footer', $data);
    }

    public function fulltext()
    {
        $data["pageTitle"] = "Viewing News";

        $this->load->database();

        $sql_string = 'SELECT * FROM news_cat ORDER BY sorting';
        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
        $sql_query = $this->db->query($sql_string);
        $data["query_categories"] = $sql_query;

        /*
        $sql_string = "SELECT * FROM news"
                                    . " WHERE id='"
                                    . $this->uri->segment(3)
                                    . "' ";
        */
        //Join Tables
        $sql_string = "SELECT "
            . " news.id, news.heading, news.fulltext, news.images, news.cat_id, "
            . " news_cat.category "
            . " FROM news, news_cat "
            . " WHERE news.cat_id=news_cat.id "
            . " AND news.id='"
            . $this->uri->segment(3)
            . "' ";

        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;

        $sql_query = $this->db->query($sql_string);

        $data["query_fulltext"] = $sql_query;

        foreach ($sql_query->result() as $row)
            $data["active_category"] = $row->cat_id;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('news_fulltext', $data);
        $this->load->view('footer', $data);
    }


    function search()
    {
        $data["pageTitle"] = "News Listing";
        $data["pageHeading"] = "Please select a news below";

        $this->load->database();

        $sql_string = 'SELECT * FROM news_cat ORDER BY sorting';
        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
        $sql_query = $this->db->query($sql_string);
        $data["query_categories"] = $sql_query;

        $sql_string = "SELECT * FROM news"
            . " WHERE heading LIKE '%"
            . $_POST['keyword']
            . "%' ";
        //echo "<br /><b>SQL COMMAND:</b> " . $sql_string;

        $sql_query = $this->db->query($sql_string);
        $data["query_listing"] = $sql_query;

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('news_listing', $data);
        $this->load->view('footer', $data);

    }
}
