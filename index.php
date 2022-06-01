<?php
    /**
     * Filename: index.php
     * Description:
     * User: NINJA MASTER - Mustafa Shaaban
     * Date: 6/1/2022
     */

    require __DIR__ . '/vendor/autoload.php';
    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->addWarning('Foo');