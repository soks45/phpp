<?php
    use Framework\Container;

    if (file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    }

    Container::getApp()->run();
