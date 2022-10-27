<?php


namespace App\classes;


class Student
{
    public $student=[];

    public function __construct()
    {
        $this->student=[
            0=>[
              'id'=>1,
              'name' =>'rafi',
              'email' =>'rafi@gmail.com',
              'phone' =>'01982365343',
              ],
            1=>[
                'id'=>2,
                'name' =>'rafi-2',
                'email' =>'rafi-2@gmail.com',
                'phone' =>'0182365343',
            ],
            2=>[
                'id'=>3,
                'name' =>'rafi-3',
                'email' =>'rafi-3@gmail.com',
                'phone' =>'01992365343',
            ],
            3=>[
                'id'=>4,
                'name' =>'Mohibul',
                'email' =>'Mohibul@gmail.com',
                'phone' =>'01672365340',
            ],
        ];
    }
    public function allStudent(){
        return $this->student;
    }

}