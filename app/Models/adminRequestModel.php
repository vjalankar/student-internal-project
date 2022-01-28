<?php

namespace App\Models;

use CodeIgniter\Model;

class adminRequestModel extends Model
{
    
    protected $table="adminrequest";
    protected $allowedFields=['year','school','department','subject','trisemester'];
}

?>