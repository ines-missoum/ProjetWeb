<?php

class utilisateur extends CI_Controller {

        public function index(){ 

            

            if( get_cookie('cookieUtilisateur')!=''){

                //$prenom_utilisateur = $this->utilisateur_model->get_nom();

                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/accueil','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page/*, 'prenom_utilisateur' => $prenom_utilisateur */));

            }else{

                $this->page_connexion();
                
            } 

            
        }

        public function modifier(){ 

             if( get_cookie('cookieUtilisateur')!=''){

                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/modifier','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            }    
        }

        public function profil(){ 
            if( get_cookie('cookieUtilisateur')!=''){
                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/profil','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));
            }else{

                $this->page_connexion();
                
            }
            
        }


        public function deconnexion(){ 


            delete_cookie('cookieUtilisateur');
            $this->load->view('utilisateur/deconnexion');
             
        }

        public function page_connexion(){ 

            if( get_cookie('cookieUtilisateur')==''){

              $this->load->view('utilisateur/form_connexion');  
            }else{

                $this->index();
                
            }
            
        }
        public function verif_connexion(){ 

           if( get_cookie('cookieUtilisateur')==''){
                $data=array(
                            "nom_utilisateur" => htmlspecialchars($_POST['username']),
                            "mot_de_passe"=> htmlspecialchars($_POST['password'])
                        );

                $result = $this->utilisateur_model->verif_connexion($data);

                if(empty($result)){
                    $this->load->view('utilisateur/form_connexion');
                }else{
                    set_cookie('cookieUtilisateur', $data['nom_utilisateur'], '300');//86400 pour 24h (duree de vie du cookie)
                    
                        // On stocke notre page dans la variable $page
                        $page = $this->load->view('utilisateur/modifier','',true);

                        // On affiche notre page avec le template
                        $this->load->view('template', array('page' => $page));
                }

            }else{

                $this->index();
                
            }
            
        }

        public function oubli_mdp(){ 

            if( get_cookie('cookieUtilisateur')==''){

                $this->load->view('utilisateur/form_oubli_mdp');

            }else{

                $this->index();
                
            }

        }
        
        public function inscription(){       

              if( get_cookie('cookieUtilisateur')==''){

                    $this->form_validation->set_rules('username', 'Username', 'min_length[5]|max_length[12]|is_unique[utilisateur.nom_utilisateur]',
                    array(
                    'is_unique'     => "Identifiant déjà utilisé"
                            )
                    );

                    $this->form_validation->set_rules('password', 'Password', 'required');

                     $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',
                    array(
                    'matches'     => "Les mots de passe ne correspondent pas"
                            )
                    );

                    if ($this->form_validation->run() == FALSE){

                            $this->load->view('utilisateur/form_inscription');
                    }else{
                           
                           $data=array(
                            "nom_utilisateur" => htmlspecialchars($_POST['username']),
                            "mot_de_passe"=> htmlspecialchars($_POST['password']),
                             "nom"=> htmlspecialchars($_POST['nom']),
                             "prenom" => htmlspecialchars($_POST['prenom']),
                             "ville"=> htmlspecialchars($_POST['ville']),
                             "nb_points"=> 3
                            );

                          
                           $this->utilisateur_model->insert($data);
                           $this->load->view('utilisateur/inscriptionOK');
                    }

                }else{

                $this->index();
                
            }
        }
}