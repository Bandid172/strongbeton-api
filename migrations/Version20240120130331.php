<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240120130331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD text LONGTEXT NOT NULL, ADD strength VARCHAR(255) NOT NULL, ADD density VARCHAR(255) NOT NULL, ADD freeze_resistance VARCHAR(255) NOT NULL, ADD consistency VARCHAR(255) NOT NULL, ADD waterproofing_capacity VARCHAR(255) NOT NULL, ADD gost VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP text, DROP strength, DROP density, DROP freeze_resistance, DROP consistency, DROP waterproofing_capacity, DROP gost');
    }
}
