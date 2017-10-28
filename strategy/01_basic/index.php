<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:21
 */

require_once 'Lesson.php';

$lesson = new Lesson(5, Lesson::ENGLISH);
echo $lesson->type().$lesson->cost();

echo '<br />';


$lesson = new Lesson(5, Lesson::MATH);
echo $lesson->type().$lesson->cost();