<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DataAccessLayer {
    
    private $_table;

    public function __construct($object) {
        $this->_table = $object;
    }

}
