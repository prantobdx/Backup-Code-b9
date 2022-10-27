<?php

namespace App\classes;

class HelloWorld
{
    public $message;
    public $x = 10;
    public $y = 20;
    public $z = 30;
    public function __construct()
    {
        $this->message = 'Hello-world';
    }
    public function index()
    {

//.................Assignment Operator.......................
//        echo $this->message.'<br>';
//
//        echo $this->x++.'<br>';//10
//
//        echo ++$this->x.'<br>';//12;
//
//        echo  $this->x--.'<br>';//12;
//
//        echo --$this->x.'<br>';//10;
//
//        echo -$this->x.'<br>';//-10;

// .............conditional operator..................
//        echo ($this->x > $this->y).'<br>';//0;
//
//        echo ($this->x < $this->y).'<br>';//1;
//        echo ($this->x >= $this->y).'<br>';//0;
//        echo ($this->x <= $this->y).'<br>';//1;
//        echo $this->x == $this->y;//0;
//        echo '<br>';
//        echo ($this->x === $this->y).'<br>';//0;
//        echo ( $this->x != $this->y).'<br>';//1;
//        echo ($this->x !== $this->y).'<br>';//0;

//.........................logical operator..............................
        echo ( $this->x > $this->y ) && ( $this->x == $this->z ); //0
        echo '<br>';
        echo ( $this->x > $this->y ) && ( $this->x < $this->z ); //0
        echo '<br>';
        echo ( $this->x < $this->y ) && ( $this->x == $this->z ); //0
        echo '<br>';
        echo ( $this->x < $this->y ) && ( $this->x < $this->z ); //1
        echo '<br>';

        echo ( $this->x > $this->y ) || ( $this->x == $this->z ); //0
        echo '<br>'
        ;
        echo ( $this->x > $this->y ) || ( $this->x == $this->z ); //0
        echo '<br>';
        echo ( $this->x > $this->y ) || ( $this->x == $this->z ); //0
        echo '<br>';
        echo ( $this->x < $this->y ) || ( $this->x < $this->z ); //1
        echo '<br>';

//        ..................Statemnt......................
        /*
         * Single line statement
         * conditional statement
         * Repated Statement
         */
//        if($this->x < $this->y){
//            echo $this->x . '<br>';
//        }
//
//        if ($this->x > $this->y)
//        {
//            echo $this->x.'<br>';
//        }
//        else{
//            echo $this->y .'<br>';
//        }
//
//        if($this->x > $this->y){
//            echo $this->x.'<br>';
//        }
//        elseif ($this->x < $this->z){
//            echo $this->z.'<br>';
//        }

        switch ( $this->x )
        {
            case 'card':
                if ( $this->y == 20 && $this->z == 30 )
                {
                    echo '10%';
                }
                if ( $this->y == 20 && $this->z == 30 )
                {
                    echo '8%';
                }
                break;
            case 20:
                echo 'hello 20';
                break;
            case 30:
                echo 'hello 30';
                break;
            default:
                echo 'not found';
        }
    }
}