<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class MathLesson
{
    public function cost(Lesson $lesson)
    {
        return $lesson->num * 200;
    }

    public function type()
    {
        return '你购买了数学课程';
    }
}