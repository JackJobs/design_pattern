<?php
/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/28
 * Time: 9:34
 */

class Lesson
{
    private $num;

    private $lessonStrategy;
    
    private $discountStrategy;

    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * Lesson constructor.
     * @param $num
     * @param $lessonStrategy
     */
    public function __construct($num, LessonStrategy $lessonStrategy, DiscountStrategy $discountStrategy)
    {
        $this->num = $num;
        $this->lessonStrategy = $lessonStrategy;
        $this->discountStrategy = $discountStrategy;
    }

    public function cost()
    {
        return $this->discountStrategy->discount() * $this->lessonStrategy->cost($this);
    }

    public function type()
    {
        return $this->lessonStrategy->type($this->discountStrategy);
    }
}