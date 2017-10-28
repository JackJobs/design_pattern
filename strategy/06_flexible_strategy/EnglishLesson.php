<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class EnglishLesson implements LessonStrategy
{
    public function cost(Lesson $lesson)
    {
        return $lesson->discount * $lesson->num * 100;
    }

    public function type(Lesson $lesson)
    {
        return '你购买了'.$lesson->type.'英语课程';
    }
}