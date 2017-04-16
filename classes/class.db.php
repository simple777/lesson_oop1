<?php

class DB
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('mvc');
    }

    public function query ($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res)
        {
            return false;
        }
        while ($row = mysql_fetch_object($res, $class))
        {
            $ret[] = $row;
        }
        return $ret;
    }
}