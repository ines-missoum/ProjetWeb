<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utilisateur_model extends CI_Model{
    

	    protected $table ='utilisateur';
	    
	     public function __construct() {
	        parent::__construct();
	        
	    } 


	     public function verif_connexion($data){ 
	    

		 	$result = $this->db->select('nom_utilisateur','mot_de_passe')
		 						->from($this->table)	
		 						->where('nom_utilisateur',$data['nom_utilisateur'])
		 						->where('mot_de_passe',$data['mot_de_passe'])
		 						->get()
		 						->result();
		 	 return $result;	
    	} 

	    public function insert($data) {
	        

		 	/*$this->db->set('nom_utilisateur', $data['nom_utilisateur'])
		 	->set('mot_de_passe', $data['mot_de_passe'])
		 	->set('nom', $data['nom'])
		 	->set('prenom', $data['prenom'])
		 	->set('ville', $data['ville'])
		 	->set('nb_points', $data['nb_points'])
		 	->insert($this->table);*/

			$this->db->insert('utilisateur', $data);

		}

		/*public function get_nom(){ 
	    

		 	$result = $this->db->select('prenom')
		 						->from($this->table)	
		 						->where('nom_utilisateur',get_cookie('cookieUtilisateur'))
		 						->get()
		 						->result();
		 	 return $result;	
    	}*/
	


  }