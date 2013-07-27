<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends MX_Controller
{

function __construct() {
parent::__construct();
}

function make_hash()
	{
		$password ='test';
		$safe_pass = sha1($password);
		$new_pass = md5 ($safe_pass.=$password);
		echo $new_pass;
	}
	
}