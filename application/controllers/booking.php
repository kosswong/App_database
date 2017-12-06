<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller {
    public function index()
    {
    }

    public function submit_booking()
    {
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone']) && isset($_POST['email'])) {
            $data = NULL;



            $booking_code = substr(hash('sha512',rand()),0,12);

            // generate booking ID
            $this->load->view('header', $data);
            $this->load->view('navigation', $data);
            $this->load->view('footer', $data);
        }else{
            exit("invalid operation.");
        }
    }
}