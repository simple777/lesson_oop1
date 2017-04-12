<?php

if ( isset( $_GET['ctrl'] ) )
{
    $data = array(
        'ctrl' => 'News',
        'act' => 'One',
        'id' => '1'
    );

    $getQuery = http_build_query($data) . "\n";
    echo "<meta http-equiv='refresh' content='0;URL=index.php?".$getQuery."' />";
}