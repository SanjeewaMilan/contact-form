<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {

	/**

	 */

	public function __construct()
	{
			parent::__construct();
	}

	public function index()
	{
		
		 $this->site_template_dir = $this->config->item('site_template_dir');
		 //$this->site_template_dir = FCPATH.'application/views';
		
		
		if(file_exists($this->site_template_dir.DIRECTORY_SEPARATOR.uri_string().'.php')){
			//echo 	($this->site_template_dir.DIRECTORY_SEPARATOR.uri_string().'.php');	
			$this->load->view(uri_string());
		}else{	
			$this->load->view('404');
		}

		
	}

}