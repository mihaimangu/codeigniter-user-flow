<?php 
require(APPPATH.'/libraries/REST_Controller.php');

class users extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

    public function index_get()
    {
        
        echo 'Codeigniter User-Flow';
        
    }
    
    
}

