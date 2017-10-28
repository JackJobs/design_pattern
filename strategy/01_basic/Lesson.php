<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:15
 */
class Lesson
{
    private $num;
    
    private $type;
    
    const MATH = 1;
    const ENGLISH = 2;
    const SPORT = 3;

    /**
     * Lesson constructor.
     * @param $num
     * @param $type
     */
    public function __construct($num, $type)
    {
        $this->num = $num;
        $this->type = $type;
    }


    public function cost()
    {
        switch ($this->type) {
            case self::ENGLISH:
                return $this->num * 100;
            case self::MATH:
                return $this->num * 200;
            case self::SPORT:
                return $this->num * 300;
        }
    }

    public function type()
    {
        switch ($this->type) {
            case self::ENGLISH:
                return '你购买了英语课程';
            case self::MATH:
                return '你购买了数学课程';
            case self::SPORT:
                return '你购买了体育课程';
        }
    }
}