<?php

Class Secretaire extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('secretaire_model', 'secretaire');

        $this->load->model('admin_model', 'admin');
        $this->load->helper('url_helper');
        $this->load->database();
        $this->load->library(array('session'));
        $this->db->simple_query('SET NAMES utf8');
        $this->load->helper('path');
        $this->load->helper('form');
        $this->load->library('form_validation');

        require_once FCPATH . 'application/libraries/phpmailer/PHPMailerAutoload.php';

        if ($_SESSION['loggedin'] == NULL || $_SESSION['loggedin'] == FALSE) {
            redirect(base_url());
        }


    }

    public function index()
    {
        $this->load->view('common/header');
        $this->load->view('common/menu');
        $this->load->view('secretaire/rdvfuturs');
        $this->load->view('common/footer');
    }

   public function users()
    {

        $dataf = array(
            'js' => array(
                'assets/plugins/DataTables/media/js/jquery.dataTables.js',
                'assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                'assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
               // 'assets/js/demo/table-manage-responsive.demo.min.js',
                'assets/plugins/datatables-rowsgroup-master/dataTables.rowsGroup.js',
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/clientlist.js',
            )
        );


        $datah = array(
            'css' => array(

                'assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
            )
        );


        $datad = array(
            'clientlist' => $this->admin->get_userslist()
        );

        $datam['menu'] = 'clients';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/users', $datad);
        $this->load->view('common/footer', $dataf);
    }

public function violence()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
           //     'assets/others/receiptlist1.js',
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
            'violence' => $this->secretaire->get_violence()
        );

        $datam['menu'] = 'violence';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/violence', $datad);
        $this->load->view('common/footer', $dataf);
    }



    public function rdvfuturs()
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
               'assets/others/receiptlist1.js',
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
            'rdvfuturslist' => $this->secretaire->get_rdvfuturslist()
        );

        $datam['menu'] = 'rdvfuturs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/rdvfuturs', $datad);
        $this->load->view('common/footer', $dataf);
    }

        public function prpartenaire()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
           //     'assets/others/receiptlist1.js',
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
            'rdvfuturslist' => $this->secretaire->get_load()
        );

        $datam['menu'] = 'rdvfuturs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/plaintespart', $datad);
        $this->load->view('common/footer', $dataf);
    }

  public function validate($id)
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'miseajour' => $this->secretaire->get_update($id),
            'rdvfuturslist' => $this->secretaire->get_rdvfuturslist()
        );

        $datam['menu'] = 'rdvfuturs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/send', $datad);
        $this->load->view('common/footer', $dataf);


    }

  public function transfer($id)
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'miseajour' => $this->secretaire->get_send($id),
            'rdvfuturslist' => $this->secretaire->get_rdvfuturslist()
        );

        $datam['menu'] = 'rdvfuturs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/send', $datad);
        $this->load->view('common/footer', $dataf);


    }
    public function suppr($id)
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'miseajour' => $this->secretaire->del($id),
            'rdvfuturslist' => $this->secretaire->get_rdvfuturslist()
        );

        $datam['menu'] = 'rdvfuturs';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/send', $datad);
        $this->load->view('common/footer', $dataf);


    }
  public function view($id)
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'vue' => $this->secretaire->get_vue($id)
        );

        $datam['menu'] = 'vue';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/vue', $datad);
        $this->load->view('common/footer', $dataf);
    }
    public function voir($id)
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'vue' => $this->secretaire->get_voir($id)
        );

        $datam['menu'] = 'vue';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/details', $datad);
        $this->load->view('common/footer', $dataf);
    }
    public function done()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'resolu' => $this->secretaire->get_resolu()
        );

        $datam['menu'] = 'resolu';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/resolu', $datad);
        $this->load->view('common/footer', $dataf);
    }

    public function load()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'partage' => $this->secretaire->get_load()
        );

        $datam['menu'] = 'partago';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/transfer', $datad);
        $this->load->view('common/footer', $dataf);
    }
    public function load_off()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'partage' => $this->secretaire->get_load_off()
        );

        $datam['menu'] = 'partage';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/transferoff', $datad);
        $this->load->view('common/footer', $dataf);
    }
public function temoignage()
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
               // 'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/others/receiptlist1.js',
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
            'temoignage' => $this->secretaire->get_temoignage()
        );

        $datam['menu'] = 'temoignage';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/temoignage', $datad);
        $this->load->view('common/footer', $dataf);
    }

    public function dossier()
    {

        $this->load->helper(array('form'));

        $this->form_validation->set_rules('idclient', 'Client', 'trim|required');
        if (isset($_GET['id'])) {
            $idclient = $_GET['id'];
        } else {
            $idclient = $this->input->post('idclient');
        }

        if ($this->form_validation->run() == FALSE) {

            $dataf = array(
                'js' => array(
                    'assets/plugins/parsley/dist/parsley.js',
                    'assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js',
                    'assets/js/demo/form-wizards-validation.demo.min.js',
                    'assets/plugins/select2/dist/js/select2.min.js',
                    'assets/plugins/bootstrap-select/bootstrap-select.min.js',
                    'assets/plugins/moment/min/moment.min.js',
                    'assets/plugins/moment/min/fr.js',
                    'assets/others/dossier.js',
                    'assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js'

                )
            );

            $datah = array(
                'css' => array(
                    'assets/plugins/parsley/src/parsley.css',
                    'assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css',
                    'assets/plugins/bootstrap-select/bootstrap-select.min.css',
                    'assets/plugins/select2/dist/css/select2.min.css',
                    'assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
                )
            );

            $datad = array(
                'dossier' => $this->secretaire->get_dossierlist(),
                'client' => $this->secretaire->get_clientlistid(),
            );

            $datam['menu'] = 'clients';

            $this->load->view('common/header', $datah);
            $this->load->view('common/menu', $datam);
            $this->load->view('secretaire/dossier', $datad);
            $this->load->view('common/footer', $dataf);;

        } else {

            $fkidclient = $idclient;
            $fkiddossier = $this->input->post('iddossier');
            $statut = $this->input->post('statut');
            $datetimedeb = $this->input->post('datetimedeb');
            $datetimefin = $this->input->post('datetimefin');


            list($dated, $hoursd) = explode(' ', $datetimedeb);
            list($dd, $md, $yd) = explode('/', $dated);
            $datetimedeb = $yd . '-' . $md . '-' . $dd . ' ' . $hoursd;


            if (isset($datetimefin) & $datetimefin != '') {
                list($datef, $hoursf) = explode(' ', $datetimefin);
                list($df, $mf, $yf) = explode('/', $datef);
                $datetimefin = $yf . '-' . $mf . '-' . $df . ' ' . $hoursf;
            }


            $this->db->trans_begin();

            $this->secretaire->insert_cdossier($fkidclient, $fkiddossier, $statut, $datetimedeb, $datetimefin);

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $msg = "<div class='alert alert-danger'>Enregistrement refuser !</div>";
                $this->session->set_flashdata('msg', $msg);
            } else {
                $this->db->trans_commit();
                $msg = "<div class='alert alert-success'>Enregistrement réussit !</div>";
                $this->session->set_flashdata('msg', $msg);
            }
            redirect('secretaire/clients');


        }

    }

    public function details()
    {

        if (isset($_GET['id'])) {
            $idclient = $_GET['id'];
        }

        $dataf = array(
            'js' => array(

                'assets/plugins/jquery-tabledit/jquery.tabledit.js',
                'assets/plugins/DataTables/media/js/jquery.dataTables.js',
                'assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                'assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',

                'assets/plugins/moment/min/moment.min.js',
                'assets/plugins/moment/min/fr.js',
                'assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                'assets/others/detailslist.js',
            )
        );


        $datah = array(
            'css' => array(

                'assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
            )
        );

        $datad = array(
            'clientdoc' => $this->secretaire->get_clientdossier($idclient),
            'client' => $this->secretaire->get_clientbyid($idclient)
        );

        //var_dump($datad);
        //die('r');
        $datam['menu'] = 'clients';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('secretaire/dossiers', $datad);
        $this->load->view('common/footer', $dataf);
    }

    function rdvfuturedit()
    {

        header('Content-Type: application/json');
        $input = filter_input_array(INPUT_POST);


        if ($input['action'] === 'edit') {

            $id = $input['id'];

            /*if (array_key_exists('dateretenu', $input)) {
                $data['dateretenu'] = $input['dateretenu'];
            }*/
            if (array_key_exists('type', $input)) {
                $data['type'] = $input['type'];
            }
            if (array_key_exists('descriptionvisite', $input)) {
                $data['dateretenu'] = $input['dateretenu'];

                list($dated, $hoursd) = explode(' ', $data['dateretenu']);
                list($dd, $md, $yd) = explode('/', $dated);
                $data['dateretenu'] = $yd . '-' . $md . '-' . $dd . ' ' . $hoursd;
            }

            if (sizeof($data) != 0) {
                if ($this->secretaire->update_rdvfutur($idrdv, $data)) {
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

    function modif()
    {
        $isaccorde = $this->secretaire->get_isaccorde();

        echo $isaccorde;
    }

    function resetview() {
        return $this->secretaire->get_resetview();
    }
}

?>