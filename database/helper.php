<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

if (!function_exists('getEntityManager')) {
    function getEntityManager()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(__DIR__ . "/src/models"),
//            isDevMode: true,
        );

        $dbParams = getMigrationsDbConfig();
        $connection = DriverManager::getConnection($dbParams, $config);

        return new EntityManager($connection, $config);
    }
}
