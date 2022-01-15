<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminLoginModel extends Model
{
    
    protected $table="adminlogin";
    protected $allowedFields=['adminEmail','adminPassword'];
}

?>