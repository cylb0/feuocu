<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230315193743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_discount DROP FOREIGN KEY FK_2A50DE994C7C611F');
        $this->addSql('ALTER TABLE product_discount DROP FOREIGN KEY FK_2A50DE994584665A');
        $this->addSql('DROP TABLE product_discount');
        $this->addSql('ALTER TABLE product ADD discount_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD4C7C611F FOREIGN KEY (discount_id) REFERENCES discount (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD4C7C611F ON product (discount_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_discount (product_id INT NOT NULL, discount_id INT NOT NULL, INDEX IDX_2A50DE994C7C611F (discount_id), INDEX IDX_2A50DE994584665A (product_id), PRIMARY KEY(product_id, discount_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product_discount ADD CONSTRAINT FK_2A50DE994C7C611F FOREIGN KEY (discount_id) REFERENCES discount (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_discount ADD CONSTRAINT FK_2A50DE994584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD4C7C611F');
        $this->addSql('DROP INDEX IDX_D34A04AD4C7C611F ON product');
        $this->addSql('ALTER TABLE product DROP discount_id');
    }
}
