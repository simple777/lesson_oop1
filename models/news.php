<?php

//require_once __DIR__.'/../classes/db.php'; //autoload

class News extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';

}