<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		 }
    public function index(){
		$this->render1('template/base/test');
	}


}