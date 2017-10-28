<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:29
 */

require_once 'Lesson.php';
require_once 'Arts.php';
require_once 'Science.php';
require_once 'EnglishArts.php';
require_once 'EnglishScience.php';
require_once 'MathArts.php';
require_once 'MathScience.php';

$englishArts = new EnglishArts(5);
echo $englishArts->type().$englishArts->cost();

echo '<br />';

$englishScience = new EnglishScience(5);
echo $englishScience->type().$englishScience->cost();

echo '<br />';

//继承体系非常臃肿
//添加一个课程需要在所有系中都添加一个
//添加一个系需要将所有的课程都添加一遍