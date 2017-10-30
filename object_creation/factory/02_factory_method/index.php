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
require_once 'FactoryJpeg.php';
require_once 'FactoryGif.php';
require_once 'FactoryPng.php';

$jpeg = FactoryJpeg::getImage();
echo $jpeg->getWidth().$jpeg->getHeight();

