<?php

abstract class AbstractModel
{
    protected static $table;

    public static function getAll ()
    {
        $db = new DB;
        $sql = 'SELECT `id`, `title`, `text`  FROM ' . static::$table;

        return $db->queryAll($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB;
        $sql = 'SELECT `id`, `title`, `text`  FROM '.static::$table.' WHERE id='.(int)$id;
        return $db->queryOne($sql, static::$class);
    }
}