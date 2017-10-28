<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class SportLesson extends Lesson
{
    public function cost()
    {
        return $this->num * 300;
    }

    public function type()
    {
        return '你购买了体育课程';
    }
}