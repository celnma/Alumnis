<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210313165900 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internship_offer ADD added_by_id INT NOT NULL');
        $this->addSql('ALTER TABLE internship_offer ADD CONSTRAINT FK_4625DE4155B127A4 FOREIGN KEY (added_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4625DE4155B127A4 ON internship_offer (added_by_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internship_offer DROP FOREIGN KEY FK_4625DE4155B127A4');
        $this->addSql('DROP INDEX IDX_4625DE4155B127A4 ON internship_offer');
        $this->addSql('ALTER TABLE internship_offer DROP added_by_id');
    }
}
