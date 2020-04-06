<?php

Class Note extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->database();
        $this->load->library(array('session'));
        $this->db->simple_query('SET NAMES utf8');
        $this->load->helper('path');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Note_model', 'note');
    }


    public function index()
    {

        $this->load->helper(array('form'));

        $this->form_validation->set_rules('dossier', 'dossier', 'trim|required');
        $this->form_validation->set_rules('accueil', 'Accueil', 'trim|required');
        $this->form_validation->set_rules('delai', 'delai', 'trim|required');
        $this->form_validation->set_rules('dispo', 'dispo', 'trim|required');
        $this->form_validation->set_rules('clarte', 'clarte', 'trim|required');
        $this->form_validation->set_rules('suivi', 'suivi', 'trim|required');
        $this->form_validation->set_rules('efficacite', 'efficacite', 'trim|required');
        $this->form_validation->set_rules('access', 'access', 'trim|required');
        $this->form_validation->set_rules('review', 'review', 'trim|required');
        $this->form_validation->set_rules('note', 'note', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $dataf = array(
                'js' => array(
                    /*'assets/plugins/parsley/dist/parsley.js',
                    'assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js',
                    'assets/js/demo/form-wizards-validation.demo.min.js',*/

                    'assets/plugins/jquerywizard/dist/jquery.simplewizard.js',
                    'assets/plugins/jquerywizard/dist/jquery.validate.min.js',

                )
            );

            $datah = array(
                'css' => array(
                    'assets/plugins/jquerywizard/dist/jquery.simplewizard.css'
                    /*'assets/plugins/parsley/src/parsley.css',
                    'assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css',
                    'assets/plugins/bootstrap-select/bootstrap-select.min.css',
                    'assets/plugins/select2/dist/css/select2.min.css',*/
                )
            );


            $this->load->view('common/hnote', $datah);
            //$this->load->view('common/menu', $datam);
            $this->load->view('note/note');
            $this->load->view('common/fnote', $dataf);;

        } else {

            $dossier = $this->input->post('dossier');
            $accueil = $this->input->post('accueil');
            $delai = $this->input->post('delai');
            $dispo = $this->input->post('dispo');
            $clarte = $this->input->post('clarte');
            $suivi = $this->input->post('suivi');
            $efficacite = $this->input->post('efficacite');
            $access = $this->input->post('access');
            $review = $this->input->post('review');
            $note = $this->input->post('note');

            $this->db->trans_begin();

            $this->note->insert_note($dossier, $accueil, $delai, $dispo, $clarte, $suivi,
                $efficacite,$access,  $review,  $note);

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $msg = "<div class='alert alert-danger'>Echec de la création du client</div>";
                $this->session->set_flashdata('msg', $msg);
            } else {
                $this->db->trans_commit();
                $msg = "<div class='alert alert-success'>Formulaire soumise avec succès!</div>";
                $this->session->set_flashdata('msg', $msg);
            }
            redirect('note');


        }
    }



}

?>