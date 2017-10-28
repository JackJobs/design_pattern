<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:34
 */

class Lesson
{
    private $num;

    private $strategy;

    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * Lesson constructor.
     * @param $num
     * @param $strategy
     */
    public function __construct($num, $strategy)
    {
        $this->num = $num;
        $this->strategy = $strategy;
    }

    public function cost()
    {
        return $this->strategy->cost($this);
    }

    public function type()
    {
        return $this->strategy->type($this);
    }
}