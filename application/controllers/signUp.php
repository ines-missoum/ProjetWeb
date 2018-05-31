<?php

class utilisateur extends CI_Controller {

        
        public function inscription(){       

                $this->load->database('default');
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');


                /*if($this->input->post('nom_utlisateur') != $original_value) {
                   $is_unique =  '|is_unique[utilisateur.nom_utlisateur]';
                } else {
                   $is_unique =  '';
                }

                $this->form_validation->set_rules('user_name', 'User Name', 'required|trim|xss_clean'.$is_unique);*/

                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[utilisateur.nom_utilisateur]',
                array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
                        )
                );

                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

                

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('utilisateur/form_inscription');
                }
                else
                {
                       
                       $data=array(
                        "nom_utilisateur" => htmlspecialchars($_POST['username']),
                        "mot_de_passe"=> htmlspecialchars($_POST['password']),
                         "nom"=> htmlspecialchars($_POST['nom']),
                         "prenom" => htmlspecialchars($_POST['prenom']),
                         "ville"=> htmlspecialchars($_POST['ville']),
                         "nb_points"=> 3,
                        );

                      
                       $this->signUp_model->insert($data);
                       $this->load->view('utilisateur/inscriptionOK');
                }
        }
}