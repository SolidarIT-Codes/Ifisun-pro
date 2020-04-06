<?php

Class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'admin');
        $this->load->helper('url_helper');
        $this->load->database();
        $this->load->library(array('session'));
        $this->db->simple_query('SET NAMES utf8');
        $this->load->helper('path');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('pages/accueil');
        $this->load->view('common/footer');
    }


    /*
        By @Ed
    */
    public function login()
    {
        $data = new stdClass();

        $this->form_validation->set_rules('login', 'Identifiant', 'required');
        $this->form_validation->set_rules('password', 'Mot de passe', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pages/login');
        } else {


            $username = $this->input->post('login');
            $password = $this->input->post('password');

            if ($this->admin->resolveUserLogin($username, $password)) {
                $userId = $this->admin->getUserIdByUsername($username);
                $userState = $this->admin->getUserStateById($userId);

                if (!$userState) {
                    $user = $this->admin->getUserById($userId);
                    $_SESSION['iduser'] = $user->iduser;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['login'] = (string)($user->nomuser . ' ' . $user->prenomuser);
                    $_SESSION['role'] = $user->libellerole;
                    $_SESSION['idrole'] = $user->idrole;


                    $msg = "<div class='alert alert-success'>Accès authorisé</div>";
                    $this->session->set_flashdata('msg', $msg);

                    if ($_SESSION['idrole'] == 3) {
                        $_SESSION['nbusers'] = $this->admin->get_nbusers();
                        redirect('tb');
                    } elseif ($_SESSION['idrole'] == 2) {
                        $_SESSION['nbrdvs'] = $this->admin->get_nbrdvs();
                        redirect('tb');
                    } else {
                        redirect('secretaire/rdvfuturs');
                    }


                } else {
                    $msg = "<div class='alert alert-danger'>Accès refusé</div>";
                    $this->session->set_flashdata('msg', $msg);
                    redirect(base_url());
                }

            } else {
                $msg = "<div class='alert alert-danger'>Accès refusé</div>";
                $this->session->set_flashdata('msg', $msg);
                redirect(base_url());
            }

        }
    }

    public function user()
    {

        $this->load->helper(array('form'));

        $this->form_validation->set_rules('nomuser', 'nom user', 'trim|required');
        $this->form_validation->set_rules('prenomuser', 'prénom user', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $dataf = array(
                'js' => array(
                    'assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js',
                    'assets/js/demo/form-wizards-validation.demo.min.js',
                    'assets/plugins/select2/dist/js/select2.min.js',
                    'assets/plugins/bootstrap-select/bootstrap-select.min.js',
                    'assets/plugins/jquerywizard/dist/jquery.validate.min.js',

                )
            );

            $datah = array(
                'css' => array(
                    'assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css',
                    'assets/plugins/bootstrap-select/bootstrap-select.min.css',
                    'assets/plugins/select2/dist/css/select2.min.css',
                )
            );

            $datam['menu'] = 'users';

            $this->load->view('common/header', $datah);
            $this->load->view('common/menu', $datam);
            $this->load->view('secretaire/user');
            $this->load->view('common/footer', $dataf);;

        } else {

            $nomuser = $this->input->post('nomuser');
            $prenomuser = $this->input->post('prenomuser');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $emailuser = $this->input->post('emailuser');
            $contactuser = $this->input->post('contactuser');
            $fkidrole = $this->input->post('fkidrole');
            /*$hasrdv = $this->input->post('hasrdv');
            $collaborateurfkiduser = $this->input->post('collaborateur');
            $descriptionvisite = $this->input->post('descriptionvisite');*/

            $this->db->trans_begin();

            $this->admin->insert_user($nomuser, $prenomuser, $username, $password, $fkidrole, $emailuser, $contactuser);

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $msg = "<div class='alert alert-danger'>Echec de la création du user</div>";
                $this->session->set_flashdata('msg', $msg);
            } else {
                $this->db->trans_commit();
                $msg = "<div class='alert alert-success'>user créer avec succès!</div>";
                $this->session->set_flashdata('msg', $msg);
            }
            redirect('admin/users');


        }

    }

    public function logout()
    {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
        } else {
        }

        redirect(base_url());
        die();
    }

    public function rdvs()
    {

        $dataf = array(
            'js' => array(
                'assets/plugins/DataTables/media/js/jquery.dataTables.js',
                'assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                'assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                'assets/js/demo/table-manage-responsive.demo.min.js',
                'assets/plugins/datatables-rowsgroup-master/dataTables.rowsGroup.js',
                'assets/plugins/moment/min/moment.min.js',
                'assets/plugins/moment/min/fr.js',
                'assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/rdvs.js',
            )
        );


        $datah = array(
            'css' => array(

                'assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
                'assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
            )
        );


        $datad = array(
            'rdvs' => $this->admin->get_rdvslist()
        );

        $datam['menu'] = 'rdvs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/rdvs', $datad);
        $this->load->view('common/footer', $dataf);
    }

    public function users()
    {

        $dataf = array(
            'js' => array(
                'assets/plugins/DataTables/media/js/jquery.dataTables.js',
                'assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                'assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                'assets/js/demo/table-manage-responsive.demo.min.js',
                'assets/plugins/datatables-rowsgroup-master/dataTables.rowsGroup.js',
                //'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/users.js',
            )
        );


        $datah = array(
            'css' => array(

                'assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
            )
        );


        $datad = array(
            'users' => $this->admin->get_userslist(),
        );

        $datam['menu'] = 'users';


        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/users', $datad);
        $this->load->view('common/footer', $dataf);
    }

    function rdvsedit() {
        header('Content-Type: application/json');
        $input = filter_input_array(INPUT_POST);


        if ($input['action'] === 'edit') {

            $idrdv = $input['idrdv'];

            if (array_key_exists('statut', $input)) {
                $data['statut'] = $input['statut'];
            }
            if (array_key_exists('dateretenu', $input)) {
                $data['dateretenu'] = $input['dateretenu'];

                list($dated, $hoursd) = explode(' ', $data['dateretenu']);
                list($dd, $md, $yd) = explode('/', $dated);
                $data['dateretenu'] = $yd . '-' . $md . '-' . $dd . ' ' . $hoursd;
            }

            $data['isview'] = 1;

            if (sizeof($data) != 0) {
                if ($this->admin->update_rdvs($idrdv, $data)) {
                    $msg = "<div class='alert alert-success'>Enregistrement effectué !</div>";
                    $this->session->set_flashdata('msg', $msg);
                } else {
                    $msg = "<div class='alert alert-danger'>Enregistrement refuser !</div>";
                    $this->session->set_flashdata('msg', $msg);
                }
            }

        }
        if ($input['action'] === 'delete') {


        } else if ($input['action'] === 'restore') {


        }

        echo json_encode($input);
    }
}

?>