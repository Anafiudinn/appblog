<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller 
{
	public function index()
	{
		view('backend/dashboard/index');
	}
	public function table()
	{
		view('backend/dashboard/table');
	}

}