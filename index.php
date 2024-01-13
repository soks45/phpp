<?php
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo $_SERVER['QUERY_STRING'];


    phpinfo();

    if (file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    }
