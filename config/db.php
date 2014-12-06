<?php

if (array_key_exists('DB1_HOST' ,$_SERVER)) {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => "mysql:host=" . $_SERVER['DB1_HOST'] . ";dbname=" . $_SERVER['DB1_NAME'],
        'username' => $_SERVER['DB1_USER'],
        'password' => $_SERVER['DB1_PASS'],
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
