<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
    {
            $this->load->model('Customers_model');

            $data['customer'] = $this->Customers_model->get_customer(3);

            $this->load->view('welcome_message',$data);
    }
}