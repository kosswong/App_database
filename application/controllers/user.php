<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

    public function index()
    {
        $data["pageTitle"] = "Login";
        $data["pageHeading"] = "login";

        $this->load->view('header', $data);
        $this->load->view('navigation', $data);
        $this->load->view('login', $data);
        $this->load->view('footer', $data);
    }

    public function login()
    {
        session_start();

        $user_check = $_SESSION['login_user'];

        $ses_sql = $this->db->query("select username from admin where username = '$user_check' ");

        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

        $login_session = $row['username'];

        if(!isset($_SESSION['login_user'])){
            header("location:login.php");
        }
    }

}
