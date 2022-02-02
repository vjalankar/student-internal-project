<?php

namespace App\Models;

use CodeIgniter\Model;

class SuperAdminLoginModel extends Model
{
    
    protected $table="superadminlogin";
    protected $allowedFields=['username','password'];
}

?>