<?php

namespace App\Models;

use CodeIgniter\Model;

class userDetails extends Model
{
    
    protected $table="userdetails";
    protected $allowedFields=['trisemester','branch','division'];
}

?>