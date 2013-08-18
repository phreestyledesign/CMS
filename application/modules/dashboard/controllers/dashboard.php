<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

function __construct() 
{
parent::__construct();
Modules::run('site_security/make_sure_is_admin');
}
	function home()
	{
		$data['view_file'] = "home";

		$this->load->module('templates');
		$this->templates->one_col($data);
		
	}
	
	
}