<?php
class Message extends MY_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('');
        // $this->load->library('');
        // $this->load->helper('');
        // $this->load->module('school');
    }

    public function show_message() {
        echo "<h3>This is my simple message for this first module</h3>";
        $this->school->get_school_name();
        echo "<br/>";
        $this->school->get_school_address();
        echo "<br/>";
        $string = "online web tutor";
        echo $this->mystring->my_uppercase($string);
        echo "<br/>";
        echo $this->mystring->my_strlen($string);
    }

    public function simpleMessage() {
        $content['message'] = "Simple view message I am writing.";
        $this->load->view("message/simple-message", $content);
    }
}