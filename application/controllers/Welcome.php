<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$result = "Oops! You're not supposed to be here!";
		$this->data['content'] = $result;
		$this->render();
	}

}
