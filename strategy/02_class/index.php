<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:29
 */

require_once 'Lesson.php';
require_once 'EnglishLesson.php';
require_once 'MathLesson.php';
require_once 'SportLesson.php';

$english = new EnglishLesson(5);
echo $english->type().$english->cost();

echo '<br />';

$math = new MathLesson(5);
echo $math->type().$math->cost();

echo '<br />';