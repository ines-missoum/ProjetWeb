<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partage_model extends CI_Model{
    
	    protected $table='partage';

	    public function __construct() {
	        parent::__construct();
	        
	    } 

	    public function a_venir($valeur_decrypte){

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->where('nom_utilisateur',$valeur_decrypte)		
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

			$this->db->insert('partage', $data);

		}
  }