<?php

/*
	Gestion des grandeurs démographiques
*/

Class Tb_model extends CI_Model
{


    public function __construct()
    {
        $this->load->database();
    }


    function get_nbfeedback() {
        return $this->db->count_all_results('note');
    }

    function get_nbdossierclient() {
        $this->db->select('*');
        $this->db->from('client');
        //$this->db->join('clientdossier', 'fkidclient = idclient');
        return $this->db->count_all_results();
    }
    function get_nbreceipt() {
        return $this->db->count_all_results('gestionacceuil');
    }

    function get_notemoy() {
        $this->db->select_avg('note');
        return $this->db->get('note')->row();
    }

    function get_noteimmo() {
        $this->db->select_avg('note')->where('fkiddossier=1');
        return $this->db->get('note')->row()->note;
    }

    function get_notecredit() {
        $this->db->select_avg('note')->where('fkiddossier=2');
        return $this->db->get('note')->row()->note;
    }
    function get_notefamille() {
        $this->db->select_avg('note')->where('fkiddossier=3');
        return $this->db->get('note')->row()->note;
    }

    function get_noteaffaire() {
        $this->db->select_avg('note')->where('fkiddossier=4');
        return $this->db->get('note')->row()->note;
    }
function returnmonthint($monthval) {
        switch ($monthval){
            case '01':
                $monthint = 1;
            break;
            case '02':
                $monthint = 2;
            break;
            case '03':
                $monthint = 3;
            break;
            case '04':
                $monthint = 4;
            break;
            case '05':
                $monthint = 5;
            break;
            case '06':
                $monthint = 6;
            break;
            case '07':
                $monthint = 7;
            break;
            case '08':
                $monthint = 8;
            case '09':
                $monthint = 9;
            break;
            case  '10':
                $monthint = 10;
            break;
            case '11':
                $monthint = 11;
            break;
            case '12':
                $monthint = 12;
            break;
        }
        return $monthint;
}

    function get_immo() {
        $datenow = date("Y");

        $this->db->select("DATE_FORMAT(date, '%m') as d");
        $this->db->select_avg('note');
        $this->db->where('fkiddossier=1');
        $this->db->where("DATE_FORMAT(date, '%Y') = $datenow");
        $this->db->group_by("DATE_FORMAT(date, '%m') asc;");
        $datr = $this->db->get('note')->result_array();

        $d = array();

        foreach ($datr as $da) {
            $monthid = $this->returnmonthint($da['d']);
            $d[$monthid] = '['.$monthid.','.$da['note'].']';

        }

        $elt = array();

        array_push($elt, $d,$d);

        if(array_key_exists('1', $d)) $a = $d['1']; else $a = '[1,0]';
        if(array_key_exists('2', $d)) $b = $d['2']; else $b = '[2,0]';
        if(array_key_exists('3', $d)) $c = $d['3']; else $c = '[3,0]';
        if(array_key_exists('4', $d)) $e = $d['4']; else $e = '[4,0]';
        if(array_key_exists('5', $d)) $f = $d['5']; else $f = '[5,0]';
        if(array_key_exists('6', $d)) $g = $d['6']; else $g = '[6,0]';
        if(array_key_exists('7', $d)) $h = $d['7']; else $h = '[7,0]';
        if(array_key_exists('8', $d)) $i = $d['8']; else $i = '[8,0]';
        if(array_key_exists('9', $d)) $j = $d['9']; else $j = '[9,0]';
        if(array_key_exists('10', $d)) $k = $d['10']; else $k = '[10,0]';
        if(array_key_exists('11', $d)) $l = $d['11']; else $l = '[11,0]';
        if(array_key_exists('12', $d)) $m = $d['12']; else $m = '[12,0]';

        $elt = array();

        array_push($elt, $a,$b,$c,$e,$f,$g,$h,$i,$j,$k,$l,$m);

        return  implode(',', $elt);

    }

    function get_credit() {
        $datenow = date("Y");

        $this->db->select("DATE_FORMAT(date, '%m') as d");
        $this->db->select_avg('note');
        $this->db->where('fkiddossier=2');
        $this->db->where("DATE_FORMAT(date, '%Y') = $datenow");
        $this->db->group_by("DATE_FORMAT(date, '%m') asc;");
        $datr = $this->db->get('note')->result_array();

        $d = array();
        foreach ($datr as $da) {
            $monthid = $this->returnmonthint($da['d']);
            $d[$monthid] = '['.$monthid.','.$da['note'].']';

        }

        $elt = array();

        array_push($elt, $d,$d);

        if(array_key_exists('1', $d)) $a = $d['1']; else $a = '[1,0]';
        if(array_key_exists('2', $d)) $b = $d['2']; else $b = '[2,0]';
        if(array_key_exists('3', $d)) $c = $d['3']; else $c = '[3,0]';
        if(array_key_exists('4', $d)) $e = $d['4']; else $e = '[4,0]';
        if(array_key_exists('5', $d)) $f = $d['5']; else $f = '[5,0]';
        if(array_key_exists('6', $d)) $g = $d['6']; else $g = '[6,0]';
        if(array_key_exists('7', $d)) $h = $d['7']; else $h = '[7,0]';
        if(array_key_exists('8', $d)) $i = $d['8']; else $i = '[8,0]';
        if(array_key_exists('9', $d)) $j = $d['9']; else $j = '[9,0]';
        if(array_key_exists('10', $d)) $k = $d['10']; else $k = '[10,0]';
        if(array_key_exists('11', $d)) $l = $d['11']; else $l = '[11,0]';
        if(array_key_exists('12', $d)) $m = $d['12']; else $m = '[12,0]';

        $elt = array();

        array_push($elt, $a,$b,$c,$e,$f,$g,$h,$i,$j,$k,$l,$m);

        return implode(',', $elt);

    }
    function get_famille() {
        $datenow = date("Y");

        $this->db->select("DATE_FORMAT(date, '%m') as d");
        $this->db->select_avg('note');
        $this->db->where('fkiddossier=3');
        $this->db->where("DATE_FORMAT(date, '%Y') = $datenow");
        $this->db->group_by("DATE_FORMAT(date, '%m') asc;");
        $datr = $this->db->get('note')->result_array();

        $d = array();
        foreach ($datr as $da) {
            $monthid = $this->returnmonthint($da['d']);
            $d[$monthid] = '['.$monthid.','.$da['note'].']';

        }

        $elt = array();

        array_push($elt, $d,$d);

        if(array_key_exists('1', $d)) $a = $d['1']; else $a = '[1,0]';
        if(array_key_exists('2', $d)) $b = $d['2']; else $b = '[2,0]';
        if(array_key_exists('3', $d)) $c = $d['3']; else $c = '[3,0]';
        if(array_key_exists('4', $d)) $e = $d['4']; else $e = '[4,0]';
        if(array_key_exists('5', $d)) $f = $d['5']; else $f = '[5,0]';
        if(array_key_exists('6', $d)) $g = $d['6']; else $g = '[6,0]';
        if(array_key_exists('7', $d)) $h = $d['7']; else $h = '[7,0]';
        if(array_key_exists('8', $d)) $i = $d['8']; else $i = '[8,0]';
        if(array_key_exists('9', $d)) $j = $d['9']; else $j = '[9,0]';
        if(array_key_exists('10', $d)) $k = $d['10']; else $k = '[10,0]';
        if(array_key_exists('11', $d)) $l = $d['11']; else $l = '[11,0]';
        if(array_key_exists('12', $d)) $m = $d['12']; else $m = '[12,0]';

        $elt = array();

        array_push($elt, $a,$b,$c,$e,$f,$g,$h,$i,$j,$k,$l,$m);

        return implode(',', $elt);

    }

    function get_affaire() {
        $datenow = date("Y");

        $this->db->select("DATE_FORMAT(date, '%m') as d");
        $this->db->select_avg('note');
        $this->db->where('fkiddossier=4');
        $this->db->where("DATE_FORMAT(date, '%Y') = $datenow");
        $this->db->group_by("DATE_FORMAT(date, '%m') asc;");
        $datr = $this->db->get('note')->result_array();

        $d = array();
        foreach ($datr as $da) {
            $monthid = $this->returnmonthint($da['d']);
            $d[$monthid] = '['.$monthid.','.$da['note'].']';

        }

        $elt = array();

        array_push($elt, $d,$d);

        if(array_key_exists('1', $d)) $a = $d['1']; else $a = '[1,0]';
        if(array_key_exists('2', $d)) $b = $d['2']; else $b = '[2,0]';
        if(array_key_exists('3', $d)) $c = $d['3']; else $c = '[3,0]';
        if(array_key_exists('4', $d)) $e = $d['4']; else $e = '[4,0]';
        if(array_key_exists('5', $d)) $f = $d['5']; else $f = '[5,0]';
        if(array_key_exists('6', $d)) $g = $d['6']; else $g = '[6,0]';
        if(array_key_exists('7', $d)) $h = $d['7']; else $h = '[7,0]';
        if(array_key_exists('8', $d)) $i = $d['8']; else $i = '[8,0]';
        if(array_key_exists('9', $d)) $j = $d['9']; else $j = '[9,0]';
        if(array_key_exists('10', $d)) $k = $d['10']; else $k = '[10,0]';
        if(array_key_exists('11', $d)) $l = $d['11']; else $l = '[11,0]';
        if(array_key_exists('12', $d)) $m = $d['12']; else $m = '[12,0]';

        $elt = array();

        array_push($elt, $a,$b,$c,$e,$f,$g,$h,$i,$j,$k,$l,$m);

       return implode(',', $elt);


    }


}

?>