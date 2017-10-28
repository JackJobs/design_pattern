<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:45
 */

require_once 'Lesson.php';
require_once 'DiscountStrategy.php';
require_once 'ArtsDiscount.php';
require_once 'ScienceDiscount.php';
require_once 'LessonStrategy.php';
require_once 'EnglishLesson.php';
require_once 'MathLesson.php';

//尝试对前一种策略模式的改进
//完全采用组合的方式来代替之前部分继承的方式

$englishArts = new Lesson(5, new EnglishLesson(), new ArtsDiscount());
echo $englishArts->type().$englishArts->cost();

echo '<br />';

$englishScience = new Lesson(5, new EnglishLesson(), new ScienceDiscount());
echo $englishScience->type().$englishScience->cost();

echo '<br />';