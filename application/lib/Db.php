<?php

namespace application\lib;

use PDO;

class Db {

    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'', $config['username'], $config['password']);
    }

    public function query($sql)
    {
        $uquery = $this->db->query($sql);
        $result = $uquery->fetchColumn();
        return $result;

    }


}


