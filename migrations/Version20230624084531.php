<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230624084531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE horaires');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE users');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE horaires (id INT AUTO_INCREMENT NOT NULL, jour_semaine VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, debut_matin VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, fin_matin VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, debut_apresmidi VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, fin_apresmidi VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, fermeture_matin TINYINT(1) DEFAULT NULL, fermeture_apresmidi TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix_horaire INT NOT NULL, logo VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(250) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
