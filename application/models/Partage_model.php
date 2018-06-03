<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partage_model extends CI_Model{
    
	    protected $table='partage';

	    public function __construct() {
	        parent::__construct();
	        
	    } 


	     public function a_venir_offrir($valeur_decrypte){

	     	$datestring = '%Y %m %d';

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->where('nom_utilisateur =',$valeur_decrypte)
		 						->where('daterdv >=',mdate($datestring))
		 						->order_by('daterdv')		
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    public function assister_partage($valeur_decrypte){

	    	$datestring = '%Y %m %d';

	     	$result = $this->db->select('*')
		 						->from($this->table)
		 						->where('nom_utilisateur !=',$valeur_decrypte)//pas créateur
		 						->where('daterdv >=',mdate($datestring))//à venir
		 						->where('places_dispo > 0')//avec des places dispos
		 						->where('"num_partage" not in','(SELECT "num_partage" FROM "participer" WHERE "nom_utilisateur"=\'' . $valeur_decrypte . '\')',false)//ou j'ai pas déjà participer*/
		 						->order_by('daterdv')		
		 						->get()
		 						->result();

		 	 return $result;
	    }

	    

	    public function historique_offrir($valeur_decrypte){

	     	$datestring = '%Y %m %d';

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->where('nom_utilisateur =',$valeur_decrypte)
		 						->where('daterdv <',mdate($datestring))
		 						->order_by('daterdv',"desc")		
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    public function detail_partage($id_partage, $nom_utilisateur){


	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->join('utilisateur', 'utilisateur.nom_utilisateur=partage.nom_utilisateur')
		 						->join('categorie', 'categorie.num_categorie=partage.num_categorie')
		 						->where('partage.num_partage =',$id_partage)
		 						->where('partage.nom_utilisateur !=',$nom_utilisateur)	
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    public function get_partage($id_partage){


	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->join('categorie', 'categorie.num_categorie=partage.num_categorie')
		 						->where('partage.num_partage =',$id_partage)	
		 						->get()
		 						->result();
		 	 return $result;
	    }


	    
	    public function insert($data) {
	        

			$this->db->insert('partage', $data);

		}
  }