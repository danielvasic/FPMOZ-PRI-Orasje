<?php

class Korisnik extends CI_Model {
    public function daj_sve () {
        $upit = $this->db->get("korisnik");
        return $upit->result(); 
    }
}