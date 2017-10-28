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
        return $lesson->num * 200;
    }

    public function type(DiscountStrategy $discountStrategy)
    {
        return '你购买了'.$discountStrategy->type().'数学课程';
    }
}