<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Participer_model extends CI_Model{

	protected $table='participer';

	public function insert($data) {

			 $this->db->set('nom_utilisateur', $data['nom_utilisateur'])
		 			  ->set('num_partage', $data['num_partage'])
		 			  ->insert($this->table);

			/*$this->db->insert('participer', $data);*/

		}

	public function a_venir_recevoir($valeur_decrypte){

	     	$datestring = '%Y %m %d';

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->join('partage','partage.num_partage=participer.num_partage')
		 						->where('participer.nom_utilisateur =',$valeur_decrypte)
		 						->where('partage.daterdv >=',mdate($datestring))
		 						->order_by('partage.daterdv')		
		 						->get()
		 						->result();
		 	 return $result;
	    }

    public function historique_recevoir($valeur_decrypte){

	     	$datestring = '%Y %m %d';

	    	$result = $this->db->select('*')
		 						->from($this->table)
		 						->join('partage','partage.num_partage=participer.num_partage')
		 						->where('participer.nom_utilisateur =',$valeur_decrypte)
		 						->where('partage.daterdv <',mdate($datestring))
		 						->order_by('partage.daterdv',"desc")		
		 						->get()
		 						->result();
		 	 return $result;
	    }



	 public function supp_participation($valeur_decrypte,$id_partage){

	 	$this->db->where('nom_utilisateur =',$valeur_decrypte)
	 			 ->where('num_partage =',$id_partage)
	 	         ->delete($this->table);
		 						

	 }

    }