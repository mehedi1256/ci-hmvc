<?php
class Message extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function show_message() {
        echo "<h3>This is my simple message for this first module</h3>";
    }

    public function simpleMessage() {
        $content['message'] = "Simple view message I am writing.";
        $this->load->view("message/simple-message", $content);
    }
}