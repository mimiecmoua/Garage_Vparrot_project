<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230624193522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, auteur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, commentaire LONGTEXT NOT NULL, publie DATE NOT NULL, INDEX IDX_67F068BC60BB6FE6 (auteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, acteur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, vu TINYINT(1) NOT NULL, action VARCHAR(255) NOT NULL, INDEX IDX_4C62E638DA6F574A (acteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horaire (id INT AUTO_INCREMENT NOT NULL, jour VARCHAR(255) NOT NULL, debut_matin VARCHAR(255) NOT NULL, fin_matin VARCHAR(255) NOT NULL, debut_apresmidi VARCHAR(255) NOT NULL, fin_apresmidi VARCHAR(255) NOT NULL, fermeture TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, prix_horaires INT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC60BB6FE6 FOREIGN KEY (auteur_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638DA6F574A FOREIGN KEY (acteur_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC60BB6FE6');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638DA6F574A');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE horaire');
        $this->addSql('DROP TABLE service');
    }
}
