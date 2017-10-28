<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:24
 */
abstract class Lesson
{
    protected $num;
    
    /**
     * Lesson constructor.
     * @param $num
     * @param $type
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    abstract public function cost();

    abstract public function type();
}