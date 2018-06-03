<?php

class Partage extends CI_Controller { 

        public function index(){
            
            $this->creation_partage();
        }
                

        public function creation_partage(){

            if( get_cookie('cookieUtilisateur')!=''){ 

                    $this->form_validation->set_rules('intitule', 'Intitule', 'max_length[30]',
                    array(
                    'max_length'     => "Pas plus de 30 caractères"
                            )
                    );

                    $this->form_validation->set_rules('ville', 'Ville', 'max_length[50]',
                    array(
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );

                    $this->form_validation->set_rules('rue', 'Rue', 'max_length[50]',
                    array(
                    'max_length'     => "Pas plus de 50 caractères"
                            )
                    );

                   


                    if ($this->form_validation->run() == FALSE){
                    // si les regles du formulaires ne sont pas respectées on recharge le formulaire

                        $categories['cat']=$this->Categorie_model->categories();


                        // On stocke notre page dans la variable $page
                        $page = $this->load->view('partage/form_creation_partage',$categories,true);


                        // On affiche notre page avec le template
                        $this->load->view('template', array('page' => $page));


                    }else{

                           $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                           $data=array(
                            "intitule" => htmlspecialchars($_POST['intitule']),
                            "nb_max_personne"=> htmlspecialchars($_POST['nb_max']),
                             "adresserdv"=> htmlspecialchars($_POST['rue']),
                             "daterdv" => htmlspecialchars($_POST['jour']),
                             "heure_deb"=> htmlspecialchars($_POST['h_debut']),
                             "heure_fin"=> htmlspecialchars($_POST['h_fin']),
                             "ville"=> htmlspecialchars($_POST['ville']),
                             "description" => htmlspecialchars($_POST['description']),
                             "commentaire_partage"=> htmlspecialchars($_POST['commentaire']),
                             "places_dispo"=> htmlspecialchars($_POST['nb_max']),
                             "nom_utilisateur" => $valeur_decrypte,
                             "num_categorie"=> htmlspecialchars($_POST['categorie'])
                            );

                          
                           $this->Partage_model->insert($data);
                           $this->a_venir_offrir();
                    }



            }else{

               redirect('Utilisateur/index');
                
            } 

            
        }


        public function a_venir_offrir(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->a_venir_offrir($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/a_venir_offrir',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

       

        public function detail_partage($id_partage){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->detail_partage($id_partage,$valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/detail_partage',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

        public function mon_partage($id_partage){ 

            if( get_cookie('cookieUtilisateur')!=''){


                $result['partage'] = $this->Partage_model->get_partage($id_partage);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/mon_partage',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

        public function detail_partage_note($id_partage){ 

            if( get_cookie('cookieUtilisateur')!=''){


                $result['partage'] = $this->Partage_model->get_partage($id_partage);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/detail_partage_note',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

        public function detail_partage_a_recevoir($id_partage){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->detail_partage($id_partage,$valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/partage_a_recevoir',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

        public function detail_partage_recu($id_partage){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->detail_partage($id_partage,$valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/partage_recu',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

        public function historique_offrir(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->historique_offrir($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/historique_offrir',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }

       

         public function assister_partage(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Partage_model->assister_partage($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/assister_partage',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }


}