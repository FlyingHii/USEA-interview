<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

if (!function_exists('getConfig')) {
    function getMigrationsDbConfig()
    {
        return require "migrations-db.php";
    }
}
