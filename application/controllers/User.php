<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
	}	
	public function index()
	{	
		$obj['data'] = $this->MyModel->getPorto()->result();	
		$this->load->view('User/index',$obj);	
	}
        
}
        
    /* End of file  User.php */
        
                            
