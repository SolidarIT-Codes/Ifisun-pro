<?php

/*
	Gestion des grandeurs démographiques
*/

Class Admin_model extends CI_Model
{


    public function __construct()
    {
        $this->load->database();
    }

    function insert_user($nomuser, $prenomuser, $username, $password, $fkidrole, $emailuser, $contactuser) {
        $data1 = array(
            'nomuser' => $nomuser,
            'prenomuser' => $prenomuser,
            'username' => $username,
            'password' => $this->hashPassword($password),
            'fkidrole' => $fkidrole,
            'emailuser' => $emailuser,
            'contactuser' => $contactuser,
            'createdat' => date("Y-m-d H:i:s"),
        );

        $this->db->insert('user', $data1);
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function verifyPasswordHash($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function getUserStateById($userId)
    {
        $this->db->select('isdeleted');
        $this->db->from('user');
        $this->db->where('iduser', $userId);

        return $this->db->get()->row('isdeleted');
    }

    public function getUserIdByUsername($username)
    {
        $this->db->select('iduser');
        $this->db->from('user');
        $this->db->where('username', $username);

        return $this->db->get()->row('iduser');
    }

    public function getUserById($userId)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'role.idrole=user.fkidrole');
        $this->db->where('iduser', $userId);
        return $this->db->get()->row();
    }

    public function resolveUserLogin($username, $password)
    {
        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->verifyPasswordHash($password, $hash);
    }

    public function getUserInstanceById($userId) 
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('iduser', $userId);
       
        return $this->db->get()->row()->instance;
    }

    function get_rdvslist()
    {
        $this->db->select("*");
        $this->db->from('rdvfutur ga');
        $this->db->join('client c', 'c.idclient=ga.fkidclient');
        $this->db->where('collaborateurfkiduser='.$_SESSION['iduser']);
        $this->db->order_by('ga.idrdvfutur', 'DESC');
        $query = $this->db->get()->result_array();

        return $query;

    }

    function get_userslist() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'idrole=fkidrole');
        return $this->db->get()->result_array();
    }
    function get_nbusers() {
        return $this->db->count_all_results('user');
    }
    function get_nbrdvs() {
        $this->db->select("count(*) as nbrdvs");
        $this->db->from('rdvfutur ga');
        $this->db->where('collaborateurfkiduser='.$_SESSION['iduser']);
        return $this->db->get()->row()->nbrdvs;
    }

    function update_rdvs($idrdv, $data) {
        return $this->db->update('rdvfutur', $data, array('idrdvfutur' => $idrdv));
    }
}

?>