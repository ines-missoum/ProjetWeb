<?php

class Note extends CI_Controller {


        public function mes_notes(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                
                // On stocke notre page dans la variable $page
                $page = $this->load->view('note/mes_notes','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

             }else{

                redirect('Utilisateur/index');
                
            } 
            
        }

        public function a_noter(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                // On stocke notre page dans la variable $page
                $page = $this->load->view('note/a_noter','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

             }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

}