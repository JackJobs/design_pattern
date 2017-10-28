<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 10:51
 */
class MathScience extends Science
{
    public function cost()
    {
        return $this->discount * $this->num * 100;
    }

    public function type()
    {
        return '你购买了'.$this->type.'数学课程';
    }

}