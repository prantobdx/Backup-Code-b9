<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $x='10';
    public $y=20;
    public $z=30;
    public $myArray  =array('11',2,3);
    public $myArray2 = array(
      'a' => '11',
      'b' => '12',
      'c' => 12
    );
    public $myArray3 ;

    public $student;


    public function __construct()
    {
        $this->message = 'Hello-world';
        $this->myArray3 = [
          ['a' => '11'],
          ['b' => '12'],
          ['c' => '13'],
        ];

        $this->student= [
            [
             'name' => 'Rafi',
             'email' => 'rafi@gmail.com',
             'phone' => [
                 'mobile-1' => '01546738323',
                 'mobile-2' => [
                     'tel-1' => '3rd-dimession',
                     'tel-2' => '3rd-dimession',
                     'tel-3' => [
                         'mob' => '4th-dimession-array',
                         'mob1' => '4th-dimession-array',
                     ],
                 ]
             ],
            ],
            [
             'name' => 'kafi',
             'email' => 'kafi@gmail.com',
             'phone' => '01725242275'
            ],
        ];
    }
    public function index()
    {
//        ......................For-loop...............................
//        for(initialization;condition;inc/dec)
//        {
//            //statement
//        }

//        for($this->x;$this->x<100;$this->x++)
//        {
//            echo $this->x.'<br>';
//        }
//.......................while-loop...............................
//        initilazation;
//        while (condition)
//        {
//            statement;
//        }

//        $this->x;
//        while($this->x < 100){
//            echo $this->x.' ';
//            $this->x++;
//..........................do-while-loop...............................
//        do{
//            echo $this->x.' ';
//            $this->x++;
//          }
//        while($this-> x < 100);

        echo'<pre>';
//        print_r($this->myArray);
//        var_dump($this->myArray);
//        echo '<br>';
//        print_r($this->myArray2);
//        var_dump($this->myArray2);
//        echo '<br>';
//        print_r($this->myArray3);
//        var_dump($this->myArray3);
//.....................Foreach-loop.............................
//        foreach($this->myArray as $key => $item){
//           print_r($key.'=>'.$item.'<br>') ;
//        }
//
//        foreach($this->myArray2 as $value){
//           echo $value.'<br>' ;
//        }

//        echo '<pre>';
//        var_dump($this->student);

//..........................Nested-Array 4th dimention Findout value...........................

        foreach($this->student as $value)
        {
            foreach($value as $item)
            {
                if(is_array($item))
                {
                    foreach ($item as $p_value)
                    {
                        if(is_array($p_value))
                        {
                            foreach ($p_value as $tel)
                            {
                                if(is_array($tel)){
                                    foreach ($tel as $mob){
                                        echo $mob.'<br>';
                                    }
                                }
                                else{
                                    echo $tel.'<br>'.'<br>';
                                }
                            }
                        }
                        else{
                            echo $p_value.'<br>'.'<br>';
                        }
                    }
                }
                else {
                   echo $item.'<br>';
                }
            }
            echo'<br>';
        }


        /* array in dimension is 2 cteogory.
            1)single array/one dimesntion
            2)nested array/multi-dimension
        */
        /* array in key is 3 cteogory.
            1)numerical array
            2)assosiative array
            3)hybrid array
        */

    }
}