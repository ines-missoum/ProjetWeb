<?php

class partage extends CI_Controller {


        public function creation_partage(){

            if( get_cookie('cookieUtilisateur')!=''){ 

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/form_creation_partage','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            } 

            
        }

        public function a_venir(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/a_venir','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            } 

            
        }


        public function assister_partage(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/assister_partage','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            } 

            
        }

         public function historique(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/historique','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            } 

            
        }


}