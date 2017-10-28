<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 14:49
 */
class ScienceDiscount implements DiscountStrategy
{

    private $discount = 0.5;
    private $type = '理科';

    /**
     * ArtsDiscount constructor.
     * @param float $discount
     */
    public function __construct($discount = 0.5,  $type = '理科')
    {
        $this->discount = $discount;
        $this->type = $type;
    }

    public function discount()
    {
        return $this->discount;
    }

    public function type()
    {
        return $this->type;
    }
}