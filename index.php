<?php
    use Dotenv\Dotenv;
    use Framework\Container;
    use Framework\DbConnection;

    define('PATH_TO_MODELS',$_SERVER['DOCUMENT_ROOT'].'/framework/');

    include_once PATH_TO_MODELS.'Container.php';

    if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    }

    if (file_exists(".env"))
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo "Окружение загружено<p>";
    }
    else {
        echo "Ошибка хагрузки ENV<br>";
    }

    Container::getApp()->run();

    die();
