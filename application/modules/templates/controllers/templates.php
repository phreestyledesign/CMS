<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller {

	
	function __construct() 
	{
	parent::__construct();
	}
	
	function one_col($data)
		{
		if (!isset($data['page_title'])) {
	        $data['page_title'] = "Default Page Title";
	    }
	    
	    if (!isset($data['keywords'])) {
	        $data['keywords'] = "some, cool, keywords";
	    }
	    
	    if (!isset($data['description'])) {
	        $data['description'] = "here is a default meta description";
	    }
		$data['css_link'] = 'stylesheet';
		$this->load->view('header', $data);
		$this->load->view('sitenav', $data);
		$this->load->view('content', $data);
		}
	
	function two_col($data)
		{
		if (!isset($data['page_title'])) {
	        $data['page_title'] = "Default Page Title";
	    }
	    
	    if (!isset($data['keywords'])) {
	        $data['keywords'] = "some, cool, keywords";
	    }
	    
	    if (!isset($data['description'])) {
	        $data['description'] = "here is a default meta description";
	    }
		$data['css_link'] = 'stylesheet2';
		$this->load->view('header', $data);
		$this->load->view('sitenav', $data);
		$this->load->view('sidebar', $data);// sidebar
		$this->load->view('content', $data);
		}
	
	function admin($data)
		{
		if (!isset($data['page_title'])) {
	        $data['page_title'] = "Admin page";
	    }
	    
	    if (!isset($data['keywords'])) {
	        $data['keywords'] = "No cool keywords here";
	    }
	    
	    if (!isset($data['description'])) {
	        $data['description'] = "Administration portal";
	    }
		
		$data['css_link'] = 'stylesheet3';
		$this->load->view('header', $data);
		$this->load->view('sitenav', $data);
		$this->load->view('admin', $data);
		}
}
