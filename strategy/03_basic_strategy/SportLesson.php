<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class SportLesson
{
    public function cost(Lesson $lesson)
    {
        return $lesson->num * 300;
    }

    public function type()
    {
        return '你购买了体育课程';
    }
}