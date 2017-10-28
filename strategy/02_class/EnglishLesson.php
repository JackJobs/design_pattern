<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class EnglishLesson extends Lesson
{
    public function cost()
    {
        return $this->num * 100;
    }

    public function type()
    {
        return '你购买了英语课程';
    }
}