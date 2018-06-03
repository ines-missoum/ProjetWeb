<?php

class Note extends CI_Controller {


        public function index(){
            $this->a_noter();
        }

        

         public function detail_notes_partage($id_partage){

             if( get_cookie('cookieUtilisateur')!=''){
                
                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['note'] = $this->Note_model->get_notes_partages($id_partage, $valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('note/detail_notes_partage',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

             }else{

                redirect('Utilisateur/index');
                
            } 


         }
     

        public function a_noter(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Note_model->a_noter($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('note/a_noter',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

             }else{

                redirect('Utilisateur/index');
                
            } 

            
        }
 
        public function noter($id_partage){


             if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                           $data=array(
                            "nom_utilisateur" => $valeur_decrypte,
                            "num_partage"=> $id_partage,
                             "note"=> htmlspecialchars($_POST['note']),
                             "commentaire_note" => htmlspecialchars($_POST['commentaire_note']),
                             
                            );

                          
                           $this->Note_model->insert($data);
                           $this->a_noter();

             }else{

                redirect('Utilisateur/index');
                
            } 

            
        }


     
}


