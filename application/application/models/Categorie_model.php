<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorie_model extends CI_Model{
    
    	protected $table ='categorie';
	    
	     public function __construct() {
	        parent::__construct();
	        
	    } 

	    public function categories(){

	    	$result = $this->db->select('*')
		 						->from($this->table)	
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    

  }