<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller {

	
	function __construct() 
	{
	parent::__construct();
	}
	
	function one_col($data)
	{
	$this->load->view('one_col', $data);
	}
	
	function two_col($data)
	{
	$this->load->view('two_col', $data);
	}
	
	function admin($data)
	{
	$this->load->view('admin', $data);
	}
}
