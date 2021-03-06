<?php

class Utilisateur extends CI_Controller {

        public function index(){ 

            

            if( get_cookie('cookieUtilisateur')!=''){
                
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

         public function verif_points($id_partage){ 

            

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));
                
                $points= $this->Utilisateur_model->get_points($valeur_decrypte);

                
                    if ($points[0]->nb_points<3){
                        // On vérifie que l'utilisateur a assez de points pour participer à un partage
                    

                    // On stocke notre page dans la variable $page
                        $page = $this->load->view('utilisateur/pas_assez_points','',true);

                        $data = array(
                            'page' => $page
                        );
                        // On affiche notre page avec le template
                        $this->load->view('template', $data);

                    }else{


                       $ref = site_url("Participer/creation_participation/$id_partage"); 

                        redirect($ref);
                    }

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

                $ok=true;
                $inscription=false;
                $this->load->view('utilisateur/form_connexion',array('ok'=>$ok, 'inscription'=>$inscription));

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
                    
                    $ok=false;// mot de passe ou id invalide
                    $inscription=false;
                    $this->load->view('utilisateur/form_connexion',array('ok'=>$ok, 'inscription'=>$inscription));

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
                             "email"=> htmlspecialchars($_POST['email'])
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

                        // on crypte le mdp
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
                             "email"=> htmlspecialchars($_POST['email'])
                            );

                          
                           $this->Utilisateur_model->insert($data);
                           $ok=true;
                           $inscription=true;//inscription ok 
                           $this->load->view('utilisateur/form_connexion',array('ok'=>$ok, 'inscription'=>$inscription));
                    }

                }else{

                $this->index();
                
            }
        }
}