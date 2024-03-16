<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Models\Box;
use Models\Song;
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
        $boxId = $entityManager->getRepository(Box::class)->findOneBy(['name'=>'Orchard Tower'])?->id ?? 1;
        $seeder([
            ['name' => "Subuh (03-09)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 1, 'prayer_time_date' => "2024-03-09", 'prayer_time' => "06:14"],
            ['name' => "Zohor (03-09)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 2, 'prayer_time_date' => "2024-03-09", 'prayer_time' => "13:26"],
            ['name' => "Asar (03-09)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 3, 'prayer_time_date' => "2024-03-09", 'prayer_time' => "16:38"],
            ['name' => "Maghrib (03-09)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 4, 'prayer_time_date' => "2024-03-09", 'prayer_time' => "19:28"],
            ['name' => "Isyak (03-09)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 5, 'prayer_time_date' => "2024-03-09", 'prayer_time' => "20:37"],
            ['name' => "Subuh (03-10)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 6, 'prayer_time_date' => "2024-03-10", 'prayer_time' => "06:14"],
            ['name' => "Zohor (03-10)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 7, 'prayer_time_date' => "2024-03-10", 'prayer_time' => "13:26"],
            ['name' => "Asar (03-10)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 8, 'prayer_time_date' => "2024-03-10", 'prayer_time' => "16:37"],
            ['name' => "Maghrib (03-10)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 9, 'prayer_time_date' => "2024-03-10", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-10)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 10, 'prayer_time_date' => "2024-03-10", 'prayer_time' => "20:36"],
            ['name' => "Subuh (03-11)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 11, 'prayer_time_date' => "2024-03-11", 'prayer_time' => "06:14"],
            ['name' => "Zohor (03-11)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 12, 'prayer_time_date' => "2024-03-11", 'prayer_time' => "13:26"],
            ['name' => "Asar (03-11)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 13, 'prayer_time_date' => "2024-03-11", 'prayer_time' => "16:36"],
            ['name' => "Maghrib (03-11)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 14, 'prayer_time_date' => "2024-03-11", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-11)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 15, 'prayer_time_date' => "2024-03-11", 'prayer_time' => "20:36"],
            ['name' => "Subuh (03-12)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 16, 'prayer_time_date' => "2024-03-12", 'prayer_time' => "06:13"],
            ['name' => "Zohor (03-12)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 17, 'prayer_time_date' => "2024-03-12", 'prayer_time' => "13:26"],
            ['name' => "Asar (03-12)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 18, 'prayer_time_date' => "2024-03-12", 'prayer_time' => "16:36"],
            ['name' => "Maghrib (03-12)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 19, 'prayer_time_date' => "2024-03-12", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-12)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 20, 'prayer_time_date' => "2024-03-12", 'prayer_time' => "20:36"],
            ['name' => "Subuh (03-13)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 21, 'prayer_time_date' => "2024-03-13", 'prayer_time' => "06:13"],
            ['name' => "Zohor (03-13)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 22, 'prayer_time_date' => "2024-03-13", 'prayer_time' => "13:25"],
            ['name' => "Asar (03-13)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 23, 'prayer_time_date' => "2024-03-13", 'prayer_time' => "16:35"],
            ['name' => "Maghrib (03-13)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 24, 'prayer_time_date' => "2024-03-13", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-13)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 25, 'prayer_time_date' => "2024-03-13", 'prayer_time' => "20:36"],
            ['name' => "Subuh (03-14)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 26, 'prayer_time_date' => "2024-03-14", 'prayer_time' => "06:13"],
            ['name' => "Zohor (03-14)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 27, 'prayer_time_date' => "2024-03-14", 'prayer_time' => "13:25"],
            ['name' => "Asar (03-14)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 28, 'prayer_time_date' => "2024-03-14", 'prayer_time' => "16:34"],
            ['name' => "Maghrib (03-14)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 29, 'prayer_time_date' => "2024-03-14", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-14)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 30, 'prayer_time_date' => "2024-03-14", 'prayer_time' => "20:36"],
            ['name' => "Subuh (03-15)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 31, 'prayer_time_date' => "2024-03-15", 'prayer_time' => "06:12"],
            ['name' => "Zohor (03-15)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 32, 'prayer_time_date' => "2024-03-15", 'prayer_time' => "13:25"],
            ['name' => "Asar (03-15)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 33, 'prayer_time_date' => "2024-03-15", 'prayer_time' => "16:33"],
            ['name' => "Maghrib (03-15)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 34, 'prayer_time_date' => "2024-03-15", 'prayer_time' => "19:27"],
            ['name' => "Isyak (03-15)", "subscriber_id" => 1, "box_id" => $boxId, 'prayer_time_seq' => 35, 'prayer_time_date' => "2024-03-15", 'prayer_time' => "20:35"],
        ], Song::class);
        $entityManager->flush();
    }
}