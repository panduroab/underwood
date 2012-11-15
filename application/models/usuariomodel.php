<?php

class Usuariomodel extends MY_Model {
    
    /*private $usuario;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $image;
    private $tipo;*/

    public function __construct() {
        parent::__construct();
    }

    public function get() {
        $return = array();
        $result = $this->db->get('usuario');
        foreach ($result->result_array() as $row) {
            $return[] = $row;
        }
        return $return;
    }

}
