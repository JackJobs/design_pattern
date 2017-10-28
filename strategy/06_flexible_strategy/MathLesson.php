<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:25
 */
class MathLesson implements LessonStrategy
{
    public function cost(Lesson $lesson)
    {
        return $lesson->discount * $lesson->num * 200;
    }

    public function type(Lesson $lesson)
    {
        return '你购买了'.$lesson->type.'数学课程';
    }
}