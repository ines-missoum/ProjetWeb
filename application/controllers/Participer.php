<?php

class Participer extends CI_Controller { 

	public function creation_participation($id_partage){ 


		if( get_cookie('cookieUtilisateur')!=''){


                           $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                           $data=array(
                            "num_partage" =>$id_partage,
                            "nom_utilisateur"=> $valeur_decrypte
                            
                            );

                           $this->Participer_model->insert($data);
                           $this->a_venir_recevoir();
                   

            }else{

               redirect('Utilisateur/index');
                
            }
	}


   public function a_venir_recevoir(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Participer_model->a_venir_recevoir($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('participer/a_venir_recevoir',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }
 public function historique_recevoir(){ 

            if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $result['partage'] = $this->Participer_model->historique_recevoir($valeur_decrypte);

                // On stocke notre page dans la variable $page
                $page = $this->load->view('participer/historique_recevoir',$result,true);

                // On affiche notre page avec le template
                $this->load->view('template', array('page' => $page));

            }else{

                redirect('Utilisateur/index');
                
            } 

            
        }


         public function supp_participation($id_partage){ 

             if( get_cookie('cookieUtilisateur')!=''){

                $valeur_decrypte = $this->encryption->decrypt(get_cookie('cookieUtilisateur'));

                $this->Participer_model->supp_participation($valeur_decrypte,$id_partage);
                
                $this->a_venir_recevoir();

            }else{

                $this->page_connexion();
                
            }    
        }

}