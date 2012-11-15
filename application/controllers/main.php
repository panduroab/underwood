<?php

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuariomodel');
    }

    public function index() {
        $data['usuario'] = $this->usuariomodel->get();
        $this->load->view('main/index', $data);
    }

    public function insertar() {
        $usuario = array(
            'usuario' => '',
            'nombre' => 'con model',
            'apellidos' => 'prueba',
            'email' => 'email@amal.com',
            'password' => '1234',
            'imagen' => 'kdkdjd',
            'tipo' => 'usuario'
        );
        $this->usuariomodel->create('usuario', $usuario);
    }

}
