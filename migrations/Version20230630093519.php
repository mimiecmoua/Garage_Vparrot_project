<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630093519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire ADD debut_am VARCHAR(255) NOT NULL, ADD fin_am VARCHAR(255) NOT NULL, ADD debut_pm VARCHAR(255) NOT NULL, ADD fin_pm VARCHAR(255) NOT NULL, DROP debut_matin, DROP fin_matin, DROP debut_apresmidi, DROP fin_apresmidi');
        $this->addSql('ALTER TABLE occasion CHANGE type_motorisation motor VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE service CHANGE prix_horaires prix_heure INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire ADD debut_matin VARCHAR(255) NOT NULL, ADD fin_matin VARCHAR(255) NOT NULL, ADD debut_apresmidi VARCHAR(255) NOT NULL, ADD fin_apresmidi VARCHAR(255) NOT NULL, DROP debut_am, DROP fin_am, DROP debut_pm, DROP fin_pm');
        $this->addSql('ALTER TABLE occasion CHANGE motor type_motorisation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE service CHANGE prix_heure prix_horaires INT NOT NULL');
    }
}
