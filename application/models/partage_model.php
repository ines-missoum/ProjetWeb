<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class partage_model extends CI_Model{
    
	    protected $table='partage';

	    public function __construct() {
	        parent::__construct();
	        
	    } 

	    public function a_venir(){

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->where('nom_utilisateur',get_cookie('cookieUtilisateur'))		
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    

  }