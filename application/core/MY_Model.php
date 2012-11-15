<?php

class MY_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Inserta un registro de una tabla en la base de datos
     * @param String $table nombre de la tabla donde se insetaran los campos
     * @param array $fields arreglo de elementos a insertar
     */
    public function create($table, array $fields) {
        $this->db->insert($table, $fields);
        return $this->db->insert_id();
    }

    /**
     * Actualiza un registro en la base de datos
     * @param String $table Nombre de la tabla
     * @param array $fields Arreglo de campos a insertar
     * @param Integer $id Id del registro a modificar
     */
    public function update($table, array $fields, $id) {
        
    }

    /**
     * Elimina un registro de la tabla en la base de datos
     * @param String $table Nombre de la tabla
     * @param Integer $id Identificador del registro
     */
    public function delete($table, $id){
        
    }
}
