<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 11:00
 */
abstract class Action
{
    protected $db;

    /**
     * Action constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }
}