<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425072455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_item DROP FOREIGN KEY FK_F0FE25274584665A');
        $this->addSql('DROP INDEX IDX_F0FE25274584665A ON cart_item');
        $this->addSql('ALTER TABLE cart_item DROP product_id');
        $this->addSql('ALTER TABLE product DROP diameter, DROP width, DROP length, DROP weight, DROP waterproof, DROP vibrating, DROP hypoallergenic, DROP rechargeable');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_item ADD product_id INT NOT NULL');
        $this->addSql('ALTER TABLE cart_item ADD CONSTRAINT FK_F0FE25274584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_F0FE25274584665A ON cart_item (product_id)');
        $this->addSql('ALTER TABLE product ADD diameter DOUBLE PRECISION DEFAULT NULL, ADD width DOUBLE PRECISION DEFAULT NULL, ADD length DOUBLE PRECISION DEFAULT NULL, ADD weight DOUBLE PRECISION DEFAULT NULL, ADD waterproof TINYINT(1) DEFAULT NULL, ADD vibrating TINYINT(1) DEFAULT NULL, ADD hypoallergenic TINYINT(1) DEFAULT NULL, ADD rechargeable TINYINT(1) DEFAULT NULL');
    }
}
