<?php

namespace App\Models;

use CodeIgniter\Model;

class excel_model extends Model
{
    
    protected $table="excel_data";
    protected $allowedFields=['name','trisemester','branch','division','subjects','marks'];

    public function insert_batch($data){
    
        if($this->db->affectedRows()>0){

            return 1;
        }


    
    }

}

?>