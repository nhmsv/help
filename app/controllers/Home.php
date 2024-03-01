<?php

namespace Controller;

if(!defined("ROOT")) die ("direct script access denied");

use Database;
 

class Home extends Controller
{
	
	public function index()
	{
		$this->view('home',$this->data);
	}
	
}