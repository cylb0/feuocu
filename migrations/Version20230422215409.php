<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422215409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE variant_price DROP FOREIGN KEY FK_4A42BD843B69A9AF');
        $this->addSql('DROP TABLE variant_price');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE variant_price (id INT AUTO_INCREMENT NOT NULL, variant_id INT NOT NULL, price DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_4A42BD843B69A9AF (variant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE variant_price ADD CONSTRAINT FK_4A42BD843B69A9AF FOREIGN KEY (variant_id) REFERENCES product_variant (id)');
    }
}
