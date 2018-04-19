<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function adm()
	{
        
		$this->load->view('admin'); #na pogled pozdravljeni pošljemo polje data
	}
   
    

}


?>