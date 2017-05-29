<?php
//
// Мой класс DrupTwiksCron
class MyModule
{
    public $str = '12345';
    public $queues;

    function __construct($array)
    {
        $this->array = $array;
        echo "print {$array}\n";
    }
// mcat() - просто теставая
    function mcat()
    {
        $this->str += $this->array;
        echo "cat: {$this->str}\n";
    }


// ваша функция infoQueues
    public function infoQueues($queue_info, $key = False)
    { // $queues = module_invoke_all($this->queue_info);
        $queues = $this->array;

        if ($key == 0) {
//            $queues += module_invoke_all($queue_info);
            echo "0. qu folse=> {$queues}\n";
        } else
//            $queues = module_invoke_all($queue_info);
        echo "1. qu Try=> {$queues}\n";
    }
}

// Реализация класса MyModule
$ma = new MyModule("98765");
$ma; // выводит на экран: print 98765
$ma->mcat();
// mcat() - просто теставая
// выводит на экран: cat: 111110
//
$ma->infoQueues("test", 0);
// и наша infoQueues() выводит на экран:
// 0. qu folse=> 98765