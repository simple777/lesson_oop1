<?php

require_once __DIR__.'/../classes/class.db.php';

class News
{
    public $id;
    public $title;
    public $text;

    public static function getAll ()
    {
        $db = new DB;
        $sql = 'SELECT `id`, `title`, `text`  from `news`';
        $class = 'News';

        return $db->queryAll($sql, $class);
    }

    public static function getOne($id)
    {
        $db = new DB;
        return $db->queryOne('SELECT `id`, `title`, `text`  from `news` WHERE id='.(int)$id, 'News');
    }
}