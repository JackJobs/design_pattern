<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 11:07
 */

require_once 'DB.php';
require_once 'Action.php';
require_once 'Article.php';
require_once 'User.php';

$a = clone DB::getInstance();
$a = clone DB::getInstance();
$a = clone DB::getInstance();
$a = clone DB::getInstance();

$user = new User();
var_dump($user->query("select * from user"));

$article = new Article();
var_dump($article->query("select * from user"));