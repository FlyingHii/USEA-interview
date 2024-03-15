<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Models\Box;
use Models\Subscriber;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314092411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Database connection configuration
        $entityManager = getEntityManager();
        $seeder = function ($data, $className) use ($entityManager) {
            foreach ($data as $item) {
                $box = new $className();
                foreach ($item as $key => $val) {
                    $box->$key = $val;
                }
                $entityManager->persist($box);
            }
        };
        $seeder([
            ['name' => 'The Café'],
            ['name' => 'My Restaurant'],
        ], Subscriber::class);
        $seeder([
            ['name' => 'Orchard Tower', 'prayer_zone' => 'WLY01', 'subscriber_id' => 1],
            ['name' => 'United Square', 'prayer_zone' => 'SWK02', 'subscriber_id' => 1],
            ['name' => 'Thompson Plaza', 'prayer_zone' => 'JHR01', 'subscriber_id' => 2],
            ['name' => 'Peranakan Place', 'prayer_zone' => 'KDH01', 'subscriber_id' => 2],
            ['name' => 'Marina Boulevard', 'prayer_zone' => 'MLK01', 'subscriber_id' => 2],

        ], Box::class);
        $entityManager->flush();
    }
}