<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:45
 */

require_once 'Lesson.php';
require_once 'LessonStrategy.php';
require_once 'EnglishLesson.php';
require_once 'MathLesson.php';


//通过不同的参数，来改变不同的课程行为
//这种方式实现了，类切换，就是多态
$lesson = new Lesson(5, new EnglishLesson());
echo $lesson->type().$lesson->cost();

echo '<br />';

$lesson = new Lesson(5, new MathLesson());
echo $lesson->type().$lesson->cost();

echo '<br />';