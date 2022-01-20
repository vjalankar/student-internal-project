<?php

namespace App\Models;

use CodeIgniter\Model;

class superAdminModel extends Model
{
    
    protected $table="superAdmin";
    protected $allowedFields=['year','school','branch','subject1','subject2','subject3','subject4','subject5','subject6','subject7','subject8','subject9','subject10'];
}

?>