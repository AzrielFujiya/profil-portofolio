<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model{
    public function skill(){
        return $this->db->table('desc_project_skills')
                        ->select('*')
                        ->get()
                        ->getResultArray();
    }
}