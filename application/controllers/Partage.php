<?php

class Partage extends CI_Controller { 
                

        public function creation_partage(){

            if( get_cookie('cookieUtilisateur')!=''){ 

                

                    $this->form_validation->set_rules('intitule', 'Intitule', 'required');


                    if ($this->form_validation->run() == FALSE){
                    

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
                             "nom_utilisateur" => $valeur_decrypte,
                             "num_categorie"=> htmlspecialchars($_POST['categorie'])
                            );

                          
                           $this->Partage_model->insert($data);
                           $this->a_venir();
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

                // On stocke notre page dans la variable $page
                $page = $this->load->view('partage/assister_partage','',true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }



}