<?php

namespace App\Models;

use CodeIgniter\Model;

class userLoginModel extends Model
{
    
    protected $table="user";
    protected $allowedFields=['email','password'];
}

?>