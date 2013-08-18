<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_security extends MX_Controller
{

function __construct() {
parent::__construct();
}

function make_hash ($password)
	{
		$safe_pass = $this->mega_hash ($password);
		return $safe_pass;
	}
	
	function mega_hash ($password)
	{
		$new_pass = $password.="bla";
		return $new_pass;
	}

	function make_sure_is_admin ()
	{
		$user_id = $this->session->userdata('user_id');
			if (!is_numeric($user_id))
			{
				redirect(base_url());
			}
		
	}
	
}