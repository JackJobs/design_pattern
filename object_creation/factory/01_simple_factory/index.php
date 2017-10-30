<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 15:09
 */

require_once 'Jpeg.php';
require_once 'Png.php';
require_once 'Gif.php';
require_once 'Factory.php';

$jpeg = Factory::getImage(Factory::JPEG);
echo $jpeg->getWidth().$jpeg->getHeight();

