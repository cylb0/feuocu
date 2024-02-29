<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323080647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hero ADD image_id INT NOT NULL, DROP path');
        $this->addSql('ALTER TABLE hero ADD CONSTRAINT FK_51CE6E863DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_51CE6E863DA5256D ON hero (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hero DROP FOREIGN KEY FK_51CE6E863DA5256D');
        $this->addSql('DROP INDEX UNIQ_51CE6E863DA5256D ON hero');
        $this->addSql('ALTER TABLE hero ADD path VARCHAR(255) NOT NULL, DROP image_id');
    }
}
