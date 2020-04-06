<?php

Class Tb extends CI_Controller
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
        $this->load->model('Tb_model', 'tb');
        if ($_SESSION['loggedin'] == NULL || $_SESSION['loggedin'] == FALSE) {
            redirect(base_url());
        }
    }


    public function index()
    {

        $dataf = array(
            'js' => array(
                /*'assets/plugins/DataTables/media/js/jquery.dataTables.js',
                'assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
                'assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
                'assets/js/demo/table-manage-responsive.demo.min.js',
                'assets/plugins/datatables-rowsgroup-master/dataTables.rowsGroup.js',
                'assets/plugins/jquery-tabledit/jquery.tabledit.js',*/

                'assets/plugins/gritter/js/jquery.gritter.js',
                'assets/plugins/flot/jquery.flot.min.js',
                'assets/plugins/flot/jquery.flot.time.min.js',
                'assets/plugins/flot/jquery.flot.resize.min.js',
                'assets/plugins/flot/jquery.flot.pie.min.js',
                'assets/plugins/sparkline/jquery.sparkline.js',
                'assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js',
                'assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js',
                'assets/js/demo/dashboard.min.js',
                'assets/others/tb.js',
            )
        );


        $datah = array(
            'css' => array(

                /*'assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',*/
                'assets/plugins/jquery-jvectormap/jquery-jvectormap.css',
                'assets/plugins/gritter/css/jquery.gritter.css',
            )
        );


        $datad = array(
            'nbfeedback' => $this->tb->get_nbfeedback(),
            'notemoy' => $this->tb->get_notemoy(),
            'nbdossierclient' => $this->tb->get_nbdossierclient(),
            'nbreceipt' => $this->tb->get_nbreceipt(),

            'noteimmo' => $this->tb->get_noteimmo(),
            'notecredit' => $this->tb->get_notecredit(),
            'notefamille' => $this->tb->get_notefamille(),
            'noteaffaire' => $this->tb->get_noteaffaire(),

            'immo' => $this->tb->get_immo(),
            'credit' => $this->tb->get_credit(),
            'famille' => $this->tb->get_famille(),
            'affaire' => $this->tb->get_affaire(),
        );

        $datam['menu'] = 'tb';

        $this->load->view('common/header', $datah);
        $this->load->view('common/menu', $datam);
        $this->load->view('tb/stat');
        $this->load->view('common/footer', $dataf);
    }


}

?>