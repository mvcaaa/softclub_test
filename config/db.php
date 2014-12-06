<?php

if (array_key_exists('DB1_HOST' ,$_ENV)) {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => "mysql:host=" . $_ENV['DB1_HOST'] . ";dbname=" . $_ENV['DB1_NAME'],
        'username' => $_ENV['DB1_USER'],
        'password' => $_ENV['DB1_PASS'],
        'charset' => 'utf8',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2',
        'username' => 'yii2user',
        'password' => '',
        'charset' => 'utf8',
    ];
}
