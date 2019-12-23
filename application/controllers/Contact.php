<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('contact_model');
		$this->load->library('user_agent');
	}

    public function index(){
        $this->load->helper('form');
		$this->load->view('contact');
    }

    public function send_mail(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('tp','Telephone Number','trim|min_length[6]',array('min_length' => 'Enter a valid phone number'));
        $this->form_validation->set_rules('subject','Subject','trim|required');
        $this->form_validation->set_rules('message','Message','trim|required|min_length[2]',array('min_length' => 'Message is too short'));

        if ($this->form_validation->run() == FALSE){
            $this->load->view('contact');
        }else{
            $this->load->view('contact');
            $this->mail();
        }
    }

    protected function mail(){
		
        $this->load->library('email');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

		$this->email->initialize($config);

		$country = file_get_contents('https://ipapi.co/'.$this->input->post('ip').'/country_name/'); 
		$city = file_get_contents('https://ipapi.co/'. $_SERVER['REMOTE_ADDR'].'/city/');
        $subject = $this->input->post('subject');

        $data['co_data'] = array(
            'co_name' => $this->input->post('name'),
            'co_email' => $this->input->post('email'),
            'co_subject' => $subject,
            'co_phone_number' => $this->input->post('tp'),
			'co_message' => $this->input->post('message'),
			'co_date' => $this->input->post('date'),
			'co_time' => $this->input->post('time'),
			'co_ip' => $this->input->post('ip'),
			'co_device' => $this->input->post('device'),
			'co_country' => $country,
			'co_city' => $city
        );
		
		$this->contact_model->save_contact($data);
        $body = $this->load->view('emails/email-template.php',$data,TRUE);

        $dev_email = $this->config->item('dev_email');
		$admin_email = $this->config->item('admin_email');
		$this->email->to($admin_email);
								
		if($dev_email){
		$this->email->bcc($dev_email);
		}
        
        $this->email->from('contact-form@contact.com', 'Contact-form');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->subject('Contact Form -'.$subject);
        $this->email->message($body);

        if($this->email->send()){
			$this->session->set_flashdata('send_email', "Message sent!");
			redirect('contact');
		}else{
			$this->session->set_flashdata('send_email', "Message not sent! Try again");
        }

    }
}
