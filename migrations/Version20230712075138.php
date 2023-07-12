<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230712075138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638181A8BA');
        $this->addSql('DROP INDEX IDX_4C62E638181A8BA ON contact');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638181A8BA FOREIGN KEY (voiture_id) REFERENCES occasion (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638181A8BA ON contact (voiture_id)');
    }
}
