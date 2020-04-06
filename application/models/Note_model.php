<?php

/*
	Gestion des grandeurs démographiques
*/

Class Note_model extends CI_Model
{


    public function __construct()
    {
        $this->load->database();
    }




    function insert_note($dossier, $accueil, $delai, $dispo, $clarte, $suivi,
                          $efficacite,$access,  $review,  $note){
        $data1 = array(
            'fkiddossier' => $dossier,
            'accueil' => $accueil,
            'delai' => $delai,
            'dispo' => $dispo,
            'clarte' => $clarte,
            'suivi' => $suivi,
            'efficacite' => $efficacite,
            'access' => $access,
            'review' => $review,
            'note' => $note,
            'date' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('note', $data1);
        $lastinsid = $this->db->insert_id();

    }

}

?>