<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230317134917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD ean VARCHAR(13) NOT NULL, ADD diameter DOUBLE PRECISION DEFAULT NULL, ADD width DOUBLE PRECISION DEFAULT NULL, ADD length DOUBLE PRECISION DEFAULT NULL, ADD weight DOUBLE PRECISION DEFAULT NULL, ADD waterproof TINYINT(1) DEFAULT NULL, ADD vibrating TINYINT(1) DEFAULT NULL, ADD hypoallergenic TINYINT(1) DEFAULT NULL, ADD rechargeable TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP ean, DROP diameter, DROP width, DROP length, DROP weight, DROP waterproof, DROP vibrating, DROP hypoallergenic, DROP rechargeable');
    }
}
