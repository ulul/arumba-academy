<?php

namespace App\Models;

use App\DB\Config;

class Model
{
    protected $db;
    function __construct()
    {
        $this->db = Config::initDB();
    }    
}
