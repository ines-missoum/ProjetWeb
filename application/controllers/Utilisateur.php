<?php

class Utilisateur extends CI_Controller {

        public function index(){ 

            

            if( get_cookie('cookieUtilisateur')!=''){
                
                //$prenom_utilisateur = $this->utilisateur_model->get_nom();

                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/accueil','',true);

                $data = array(
                    'page' => $page
                );
                // On affiche notre page avec le template
                $this->load->view('template', $data);

            }else{

                $this->page_connexion();
                
            } 

            
        }

        public function modifier(){ 

             if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['utilisateur'] = $this->Utilisateur_model->get_utilisateur($valeur_decrypte);
                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/modifier',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                $this->page_connexion();
                
            }    
        }

        public function profil(){ 
            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['utilisateur'] = $this->Utilisateur_model->get_utilisateur($valeur_decrypte);
                // On stocke notre page dans la variable $page
                $page = $this->load->view('utilisateur/profil',$result,true);

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

                define("PREFIXE", "mysteremystere");
                define("SUFFIXE", "etbouledegomme");
                $mdpCrypte= md5( sha1(PREFIXE) . htmlspecialchars($_POST['password']) . sha1(SUFFIXE) );//sha1, md5 : algo de hachages (md5=50caracteres)

                $data=array(
                            "nom_utilisateur" => htmlspecialchars($_POST['username']),
                            "mot_de_passe"=> $mdpCrypte
                        );

                $result = $this->Utilisateur_model->verif_connexion($data);

                if(empty($result)){
                    $this->load->view('utilisateur/form_connexion');
                }else{

                    $valeur_crypte= $this->encryption->encrypt($data['nom_utilisateur']);
                    set_cookie('cookieUtilisateur', $valeur_crypte , '86400');//86400 pour 24h (duree de vie du cookie)
                    
                        // On stocke notre page dans la variable $page
                        $page = $this->load->view('utilisateur/accueil','',true);

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

        public function valid_modif(){

            if( get_cookie('cookieUtilisateur')!=''){


                     $this->form_validation->set_rules('nom', 'Nom', 'max_length[30]',
                    array(
                    'max_length'     => "Pas plus de 30 caractères"

                            )
                    );

                     $this->form_validation->set_rules('prenom', 'Prenom', 'max_length[30]',
                    array(
                    'max_length'     => "Pas plus de 30 caractères"

                            )
                    );

                    $this->form_validation->set_rules('email', 'Email', 'max_length[50]',
                    array(
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );


                    $this->form_validation->set_rules('ville', 'Ville', 'max_length[50]',
                    array(
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );


                    if ($this->form_validation->run() == FALSE){
                    
                            $this->modifier();

                    }else{

                           $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                           $data=array(
                            "nom_utilisateur"=>$valeur_decrypte,
                             "nom"=> htmlspecialchars($_POST['nom']),
                             "prenom" => htmlspecialchars($_POST['prenom']),
                             "ville"=> htmlspecialchars($_POST['ville']),
                             "email"=> htmlspecialchars($_POST['email']),
                             "a_propos"=> htmlspecialchars($_POST['a_propos'])
                             
                            );

                          
                           $this->Utilisateur_model->modification($data);
                           $this->profil();
                    }

                }else{

                $this->index();
                
            }

        }
        
        
        public function inscription(){       

              if( get_cookie('cookieUtilisateur')==''){

                    $this->form_validation->set_rules('username', 'Username', 'min_length[5]|max_length[30]|is_unique[utilisateur.nom_utilisateur]',
                    array(
                    'is_unique'     => "Identifiant déjà utilisé",
                    'min_length'     => "Au moins 5 caractères",
                    'max_length'     => "Pas plus de 30 caractères"

                            )
                    );

                     $this->form_validation->set_rules('nom', 'Nom', 'max_length[30]',
                    array(
                    'max_length'     => "Pas plus de 30 caractères"

                            )
                    );

                     $this->form_validation->set_rules('prenom', 'Prenom', 'max_length[30]',
                    array(
                    'max_length'     => "Pas plus de 30 caractères"

                            )
                    );

                    $this->form_validation->set_rules('email', 'Email', 'max_length[50]|is_unique[utilisateur.email]',
                    array(
                    'is_unique'     => "Un compte est déjà rattaché à cette adresse",
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );


                    $this->form_validation->set_rules('ville', 'Ville', 'max_length[50]',
                    array(
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );

                    $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[50]',
                    array(
                    'min_length'     => "Au moins 8 caractères",
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );

                    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',
                    array(
                    'matches'     => "Les mots de passe ne correspondent pas"
                            )
                    );


                    if ($this->form_validation->run() == FALSE){
                    

                            $this->load->view('utilisateur/form_inscription');
                    }else{

                        define("PREFIXE", "mysteremystere");
                        define("SUFFIXE", "etbouledegomme");
                        $mdpCrypte= md5( sha1(PREFIXE) . htmlspecialchars($_POST['password']) . sha1(SUFFIXE) );//sha1, md5 : algo de hachages (md5=50caracteres)

                           $data=array(
                            "nom_utilisateur" => htmlspecialchars($_POST['username']),
                            "mot_de_passe"=> $mdpCrypte,
                             "nom"=> htmlspecialchars($_POST['nom']),
                             "prenom" => htmlspecialchars($_POST['prenom']),
                             "ville"=> htmlspecialchars($_POST['ville']),
                             "nb_points"=> 3,
                             "email"=> htmlspecialchars($_POST['email']),
                             "a_propos"=> "Pas de description",
                            );

                          
                           $this->Utilisateur_model->insert($data);
                           $this->index();
                    }

                }else{

                $this->index();
                
            }
        }
}