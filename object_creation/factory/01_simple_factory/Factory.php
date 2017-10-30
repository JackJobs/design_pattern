<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 15:06
 */
class Factory
{
    const JPEG = 'JPEG';
    const PNG = 'PNG';
    const GIF = 'GIF';
    
    public static function getImage($type)
    {
        switch ($type) {
            case self::JPEG:
                return new Jpeg();
            case self::PNG:
                return new Png();
            case self::GIF:
                return new Gif();
        }
    }
}