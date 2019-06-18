<?php
require_once './vendor/autoload.php';
require 'composer.json';
return [
    'paths' => [
        'migrations' => 'migrations'
    ],
    'migration_base_class' => 'App\Migration\Migration',
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'dev',
        'dev' => [
            'driver' => 'mysql',
            'host' => 'test',
            'database' => 'test',
            'username' => 'test',
            'password' => 'test',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ]
];
