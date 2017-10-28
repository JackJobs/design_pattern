<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 14:49
 */
class ArtsDiscount implements DiscountStrategy
{

    private $discount = 0.9;
    private $type = '文科';

    /**
     * ArtsDiscount constructor.
     * @param float $discount
     */
    public function __construct($discount = 0.9, $type = '文科')
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