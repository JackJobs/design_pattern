<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 15:25
 */
class FactoryGif implements Factory
{
    public static function getImage()
    {
        return new Gif();
    }
}