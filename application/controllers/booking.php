<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller
{
    public function index()
    {
    }

    public function submit_booking()
    {
        $this->load->database();

        if (isset($_POST['session_id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone']) && isset($_POST['email'])) {
            $data = NULL;

            $session_id = $_POST['session_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $this->load->view('header', $data);
            $this->load->view('navigation', $data);

            $sql_string = "SELECT * FROM bookings WHERE session_id=$session_id AND user_email='$email'";
            $sql_query = $this->db->query($sql_string)->row();
            if (isset($sql_query)) {
                $data['message'] = "Sorry! You have already registered it, please give the chance other user. Thank you!";
                $this->load->view('message', $data);
            } else {

                $booking_code = substr(hash('sha512', rand()), 0, 12) . ($_POST['phone']);
                $sql_string = "INSERT INTO bookings "
                    . "(booking_code, user_first_name, user_last_name, user_email, user_phone, session_id) "
                    . "VALUES ('$booking_code', '$first_name', '$last_name', '$email', '$phone', '$session_id')";
                $result = $this->db->query($sql_string);
                $sql_string = "UPDATE sessions SET tickets=tickets-1 WHERE session_id= $session_id;";
                $ticket_result = $this->db->query($sql_string);

                if ($result && $ticket_result) {
                    $data['message'] = "You have registered it successfully!";
                    $data['important'] = 'Please be remind of your booking detail:<br><hr>';
                    $data['important'] .= 'Session ID: ' . $session_id . '<br>';
                    $data['important'] .= 'Booking code*: ' . $booking_code . '<br><hr>';
                    $data['important'] .= 'Booker/Participant: ' . $last_name . ', ' . $first_name . '<br>';
                    $data['important'] .= 'Email: ' . $email . '<br>';
                    $data['important'] .= 'Phone number: ' . $phone . '<br><hr>';
                    $data['important'] .= '*You can use the booking code to check or delete your session, you should received a confirmation email.<br>';
                    $this->load->view('message', $data);
                } else {
                    $data['message'] = "Database error!";
                    $this->load->view('message', $data);
                }
            }

            $this->load->view('footer', $data);
        } else {
            exit("invalid operation.");
        }
    }

    public function code_check_booking()
    {
        $this->load->database();

        if (isset($_GET['code'])) {
            $data = NULL;
            $code = $_GET['code'];
            $this->load->view('header', $data);
            $this->load->view('navigation', $data);

            $sql_string = "SELECT * FROM bookings b JOIN sessions s NATURAL JOIN trainers NATURAL JOIN venues NATURAL JOIN organizers NATURAL JOIN session_levels ON b.session_id = s.session_id WHERE booking_code='$code'";
            $sql_query = $this->db->query($sql_string)->row();
            if (!isset($sql_query)) {
                $data['message'] = "Sorry! No related record!";
                $this->load->view('message', $data);
            } else {
                $data['row'] = $sql_query;
                $this->load->view('booking', $data);
                $this->load->view('booking_detail', $data);
            }
            $this->load->view('footer', $data);
        } else {
            exit("invalid operation.");
        }
    }

    public function full_check_booking()
    {
        $this->load->database();

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone'])) {
            $data = NULL;
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $this->load->view('header', $data);
            $this->load->view('navigation', $data);

            $sql_string = "SELECT * FROM bookings b JOIN sessions s ON s.session_id = b.session_id WHERE b.user_first_name='$first_name' AND b.user_last_name='$last_name' AND b.user_email='$email' AND b.user_phone='$phone'";
            $sql_query = $this->db->query($sql_string);
            if (!$sql_query) {
                $data['message'] = "Sorry! No related record!";
                $this->load->view('message', $data);
            } else {
                $data['query_listing'] = $sql_query;
                $this->load->view('booking', $data);
                $this->load->view('booking_list', $data);
            }
            $this->load->view('footer', $data);
        } else {
            exit("invalid operation.");
        }
    }
}