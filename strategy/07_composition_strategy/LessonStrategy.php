<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:54
 */
interface LessonStrategy
{
    public function cost(Lesson $lesson);
    
    public function type(DiscountStrategy $discountStrategy);
}