<?php

require __DIR__.'/classes/class.db.php';

$db = new DB;
$items = $db->query('SELECT * FROM news');
var_dump($items);

?>