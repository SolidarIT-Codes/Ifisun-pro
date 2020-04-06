<?php

/*
	Gestion des grandeurs démographiques
*/

Class Secretaire_model extends CI_Model
{


    public function __construct()
    {
        $this->load->database();
    }

        function get_vue($id)
            {
                $this->db->select('*');
                $this->db->from('plainte p');
                $this->db->where('p.id', $id);
                $query = $this->db->get()->result_array();
                return $query;
            }

            function get_update($id)
            {
                                $data = array(
                                 'effectue' => '1'
                                          );
                $this->db->where('id', $id);
              return   $this->db->update('plainte',$data);
                
                 }
                 function get_send($id)
            {
                                $data = array(
                                 'partage' => '1'
                                          );
                $this->db->where('id', $id);
              return   $this->db->update('plainte',$data);
                
                 }

             function del($id)
            {
                                
                $this->db->where('id', $id);
               return $this->db->delete('plainte');
            }

            function get_voir($id)
            {
                $this->db->select('*');
                $this->db->from('denonce p');
                $this->db->where('p.id', $id);
                $query = $this->db->get()->result_array();
                return $query;
            }

    function get_clientlist()
    {
        $this->db->select("c.*, (SELECT GROUP_CONCAT( CONCAT(cd.dateprochainrdv,'( ',d.libelledossier,')') SEPARATOR '<br>') FROM clientdossier cd join dossier d on d.iddossier = cd.fkiddossier WHERE cd.fkidclient= c.idclient) AS clientdoc", FALSE);
        $this->db->from('client c');
        $this->db->order_by('c.nomclient', 'DESC');
        $query = $this->db->get()->result_array();
        return $query;

    }

    

    function get_isaccorde()
    {


        $dnow = date('Y-m-d');
        $this->db->select("count(*) as nb");
        $this->db->from('rdvimmediat');
        $this->db->where('statut<>0');
        $this->db->where('isview=1');
        if($_SESSION['idrole'] == 1) {
            $this->db->where('secretairefkiduser='.$_SESSION['idrole'] );
        }
        elseif($_SESSION['idrole'] == 2){
            $this->db->where('collaborateurfkiduser='.$_SESSION['idrole'] );
        }
        //$this->db->where("DATE_FORMAT(datearrive,'%Y-%m-%d') = ".$this->db->escape(($dnow)));
        $query = $this->db->get()->row()->nb;

        return $query;

    }

    function get_resetview()
    {
        $idrole = $_SESSION['idrole'];
        $data = array(
            'isview' => 0
        );
        if($_SESSION['idrole'] == 1) {
            $w = "'secretairefkiduser'=>".$idrole;

        }
        elseif($_SESSION['idrole'] == 2){
            $w = "'collaborateurfkiduser'=>".$idrole;
        }

        return $this->db->update('rdvimmediat', $data, array('isview' => 1, $w));


    }

    

    function get_rdvfuturslist()
    {
        $this->db->select("*");
        $this->db->from('plainte ga');
        $this->db->where( array('ga.partage' => 0, 'ga.effectue' => 0));
        $this->db->order_by('ga.id', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }

    function get_temoignage()
    {
        $this->db->select("*");
        $this->db->from('temoignage ga');
        $this->db->order_by('ga.id', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }
    function get_violence()
    {
        $this->db->select("*");
        $this->db->from('denonce ga');
        $this->db->order_by('ga.id', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }
    function get_resolu()
    {
        $this->db->select("*");
        $this->db->from('plainte ga');
        $this->db->where('ga.effectue=1');
        $this->db->order_by('ga.id', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }
    function get_load()
    {
        $this->db->select("*");
        $this->db->from('plainte ga');
        $this->db->where(array('ga.partage' => 1, 'ga.effectue' => 0 ));
        $this->db->order_by('ga.id', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }
    function get_load_off()
    {
        $this->db->select("*");
        $this->db->from('plainte ga');
        $this->db->where(array('ga.partage' => 1, 'ga.effectue' => 1 ));
        $query = $this->db->get()->result_array();

        return $query;

    }
    function get_clientdossier($idclient)
    {
        $this->db->select("*");
        $this->db->from('clientdossier cd');
        $this->db->join('dossier d', 'd.iddossier=cd.fkiddossier');
        $this->db->where('cd.fkidclient', $idclient);
        $this->db->order_by('cd.idclientdossier', 'DESC');
        $query = $this->db->get()->result_array();
        return $query;

    }

    function get_clientbyid($idclient)
    {
        $this->db->select("*");
        $this->db->from('client c');
        $this->db->where('c.idclient', $idclient);
        $query = $this->db->get()->row();
        return $query;

    }

    function get_userbyid($id)
    {
        $this->db->select("emailuser");
        $this->db->from('user c');
        $this->db->where('c.iduser', $id);
        $query = $this->db->get()->row()->emailuser;
        return $query;

    }

    /*function get_clientbyid($id)
    {
        $this->db->select("concact(nomclient,' ',prenomclient) as client");
        $this->db->from('client');
        $this->db->where('idclient=$id');
        $query = $this->db->get()->result_array();
        return $query;
    }*/


    function get_clientlistid()
    {
        $this->db->select("*");
        $this->db->from('client c');
        $this->db->order_by('c.idclient', 'DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    function get_colllist()
    {
        $query = $this->db->get_where('user', array('fkidrole' => 2));
        $query = $query->result_array();
        return $query;

    }

    function get_dossierlist()
    {
        $this->db->select("*");
        $this->db->from('dossier');
        $query = $this->db->get()->result_array();
        return $query;

    }

    function get_secrelist()
    {
        $query = $this->db->get_where('user', array('fkidrole' => 3));
        $query = $query->result_array();
        return $query;

    }

    function insert_client($nomclient, $prenomclient, $contactclient, $typeclient, $emailclient)
    {
        $data1 = array(
            'nomclient' => $nomclient,
            'prenomclient' => $prenomclient,
            'contactclient' => $contactclient,
            'emailclient' => $emailclient,
            'typeclient' => $typeclient
        );

        $this->db->insert('client', $data1);
        $lastinsid = $this->db->insert_id();

      
    }

    function insert_rdvimmediat($fkidclient, $hasrdv, $collaborateurfkiduser, $descriptionvisite)
    {
        $data = array(
            'hasrdv' => $hasrdv,
            'fkidclient' => $fkidclient,
            'collaborateurfkiduser' => $collaborateurfkiduser,
            'descriptionvisite' => $descriptionvisite,
            'secretairefkiduser' => $_SESSION['iduser'],
            'datearrive' => date('Y-m-d H:i:s')
        );

        $this->db->insert('rdvimmediat', $data);
    }

    function insert_rdvfutur($fkidclient, $datetimedeb, $collaborateurfkiduser, $descriptionvisite)
    {
        $data = array(
            'fkidclient' => $fkidclient,
            'collaborateurfkiduser' => $collaborateurfkiduser,
            'descriptionvisite' => $descriptionvisite,
            'secretairefkiduser' => $_SESSION['iduser'],
            'datearrive' => $datetimedeb
        );

        $this->db->insert('rdvimmediat', $data);
    }

    function insert_receipt($fkidclient, $hasrdv, $collaborateurfkiduser, $descriptionvisite)
    {
        $data = array(
            'hasrdv' => $hasrdv,
            'fkidclient' => $fkidclient,
            'collaborateurfkiduser' => $collaborateurfkiduser,
            'descriptionvisite' => $descriptionvisite,
            'secretairefkiduser' => $_SESSION['iduser'],
            'datearrive' => date('Y-m-d H:i:s')
        );

        $this->db->insert('gestionacceuil', $data);
    }

    function insert_cdossier($fkidclient, $fkiddossier, $statut, $datetimedeb, $datetimefin)
    {
        $data = array(
            'fkidclient' => $fkidclient,
            'fkiddossier' => $fkiddossier,
            'statut' => $statut,
            'datevenu' => $datetimedeb,
            'dateprochainrdv' => $datetimefin
        );

        $this->db->insert('clientdossier', $data);
    }

    function update_clientdossier($idclientdossier, $data)
    {

        $query = $this->db->get_where('clientdossier', array('idclientdossier' => $idclientdossier))->row()->dateprochainrdv;

        if ($query != '0000-00-00 00:00:00') {
            $data['datevenu'] = $query;
        }

        return $this->db->update('clientdossier', $data, array('idclientdossier' => $idclientdossier));


    }

    function update_rdvimmediat($idrdv, $data)
    {

        return $this->db->update('rdvimmediat', $data, array('idrdvimmediat' => $idrdv));


    }

    function update_rdvfutur($idrdv, $data)
    {

        return $this->db->update('rdvfutur', $data, array('idrdvfutur' => $idrdv));


    }
}

?>