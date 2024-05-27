<?php

namespace App\Controllers;
use App\Models\MyModel;

class UTS extends BaseController
{
    protected $Skill;
    
    public function __construct(){
        $this->Skill = new MyModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Profil',

            'skill' => $this->Skill->skill()
        ];

        return view('layout', $data);
    }
}
