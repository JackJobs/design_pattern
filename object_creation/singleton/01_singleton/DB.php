<?php

/**
 * Created by PhpStorm.
 * User: zshanjun
 * Date: 2017/10/29
 * Time: 10:39
 *
 * 单例类所需要的三个元素
 * 1、必须拥有一个构造方法，并且必须被标记为private
 * 2、拥有一个保存类实例的静态成员字段
 * 3、拥有一个访问这个实例的公共的静态方法
 *
 */
class DB
{
    private $db;

    private static $instance;

    /**
     * DB constructor.
     * @param $db
     */
    private function __construct()
    {
        try {
            echo "创建一次数据库连接";
            $this->db = new PDO("mysql:dbname=mysql;host=localhost", "root", "");
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new DB();
        }

        return self::$instance;
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    //private function __clone(){}
}