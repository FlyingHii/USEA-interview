<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Models\Box;

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
        $a = [
            ['name' => 'The Café'],
            ['name' => 'My Restaurant'],
        ];

        foreach ($a as $item) {
            $box = new Box();
            $box->setName($item['name']);
            $entityManager->persist($box);
        }
        $entityManager->flush();
    }
}