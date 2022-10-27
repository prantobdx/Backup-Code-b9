<?php


namespace App\classes;


class calculaotor
{
    public $firstNumber;
    public $lastNumber;
    public $option;
    public $result;

//    public function __construct($post = null)
//    {
//        if ($post )
//        {
//            $this->firstNumber = $post['first_number'];
//            $this->lastNumber = $post['last_number'];
//            $this->option = $post['option'];
//         }
//    }


    public function useCalculator($post = null)
    {
        if ($post )
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option = $post['option'];
        }


        switch ($this->option)
        {
            case '+':
                $this->result = $this->firstNumber + $this->lastNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->lastNumber;;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->lastNumber;
                break;
            case '/':
                $this->result = $this->firstNumber / $this->lastNumber;;
                break;
            case '%':
                $this->result = $this->firstNumber % $this->lastNumber;
                break;
            default:
                echo 'not-calculate';
        }
        return $this->result;
    }
}