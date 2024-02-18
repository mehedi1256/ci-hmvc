<?php
/**
 * Parent Controller for our modular based controllers
 */

 class MY_Controller extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->module(array('school', 'mystring'));
    }
 }