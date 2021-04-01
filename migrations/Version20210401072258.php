<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401072258 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activiteiten ADD max_deelnemers INT NOT NULL');
        $this->addSql('ALTER TABLE soortactiviteiten CHANGE beschrijving beschrijving VARCHAR(2550) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activiteiten DROP max_deelnemers');
        $this->addSql('ALTER TABLE soortactiviteiten CHANGE beschrijving beschrijving LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
    }
}
