<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

if (!function_exists('entityManager')) {
    function entityManager()
    {
        global $em;
        if($em) return $em;
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(__DIR__ . "/src/models"),
//            isDevMode: true,
        );

        $dbParams = getMigrationsDbConfig();
        $connection = DriverManager::getConnection($dbParams, $config);

        $em = new EntityManager($connection, $config);
        return $em;
    }
}
