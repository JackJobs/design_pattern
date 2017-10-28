<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 14:48
 */
interface DiscountStrategy
{
    public function discount();
    public function type();
}