<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313120713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('subscribers');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->setPrimaryKey(['id']);

        $table = $schema->createTable('boxes');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('prayer_zone', 'string', ['length' => 255]);
        $table->addColumn('subscriber_id', 'integer');
        $table->setPrimaryKey(['id']);

        $table = $schema->createTable('songs');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('name', 'string', ['length' => 255]);
        $table->addColumn('subscriber_id', 'integer');
        $table->addColumn('box_id', 'integer');
        $table->addColumn('prayer_time_date', 'datetime');
        $table->addColumn('prayer_time_seq', 'integer');
        $table->addColumn('prayer_time', 'string', ['length' => 255]);
        $table->setPrimaryKey(['id']);
        $table->addUniqueIndex(['prayer_time_seq']);
        $table->addForeignKeyConstraint(
            'boxes',
            ['box_id'],
            ['id'],
            ['onDelete' => 'CASCADE']
        );
        $table->addForeignKeyConstraint(
            'subscribers',
            ['subscriber_id'],
            ['id'],
            ['onDelete' => 'CASCADE']
        );
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('subscribers');
        $schema->dropTable('songs');
        $schema->dropTable('boxes');
    }
}
