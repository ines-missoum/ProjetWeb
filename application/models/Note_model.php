<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note_model extends CI_Model{
		
		protected $table='note';
	     public function __construct() {
	        parent::__construct();
	        
	    } 

	    public function get_notes_partages($id_partage, $valeur_decrypte){

	    	$result = $this->db->select('note.nom_utilisateur as nom_utilisateur, note, commentaire_note, intitule')
		 						->from($this->table)
		 						->join('partage','partage.num_partage=note.num_partage')
		 						->where('partage.nom_utilisateur =',$valeur_decrypte)
		 						->where('note.num_partage',$id_partage)		
		 						->get()
		 						->result();
		 	 return $result;


	    }
	    public function a_noter($valeur_decrypte){

	    	$datestring = '%Y %m %d';

	    	$result = $this->db->select('*')
		 						->from('participer')
		 						->join('partage','partage.num_partage=participer.num_partage')
		 						->where('participer.nom_utilisateur =',$valeur_decrypte)
		 						->where('partage.daterdv <',mdate($datestring))
		 						->where(' participer.num_partage not in','(SELECT "num_partage" FROM "note" WHERE "nom_utilisateur"=\'' . $valeur_decrypte . '\')',false)
		 						->order_by('partage.daterdv',"desc")		
		 						->get()
		 						->result();
		 	 return $result;
	    }

	    public function insert($data) {

			 $this->db->set('nom_utilisateur', $data['nom_utilisateur'])
		 			  ->set('num_partage', $data['num_partage'])
		 			  ->set('note',$data['note'])
		 			  ->set('commentaire_note',$data['commentaire_note'])
		 			  ->insert('note');


		}
	    

  }