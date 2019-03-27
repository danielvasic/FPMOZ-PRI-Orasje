<?php

class Korisnici extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("korisnik");
    }

    function index () {
        $this->load->view("korisnici_view");
    }

    function svi () {
        echo( json_encode($this->korisnik->daj_sve()) );
    }
}