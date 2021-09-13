<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210908100426 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE GPMBAgrega (id INT AUTO_INCREMENT NOT NULL, aaaa INT NOT NULL, mm INT NOT NULL, jj INT NOT NULL, type_jour VARCHAR(1) NOT NULL, lib_jour VARCHAR(255) NOT NULL, lib_mois VARCHAR(255) NOT NULL, saison VARCHAR(1) NOT NULL, lib_dir VARCHAR(255) NOT NULL, affect INT DEFAULT NULL, dispo INT DEFAULT NULL, sortie INT DEFAULT NULL, immo INT DEFAULT NULL, immo_mo INT DEFAULT NULL, immo_mp INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Comments CHANGE user_id user_id INT DEFAULT NULL, CHANGE rapport_id rapport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Element CHANGE user_id user_id INT DEFAULT NULL, CHANGE start start DATE DEFAULT NULL, CHANGE end end DATE DEFAULT NULL, CHANGE data data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE isPublished isPublished TINYINT(1) DEFAULT NULL, CHANGE isArchived isArchived TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE Permission CHANGE context context VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE Rapport CHANGE user_id user_id INT DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE isPublished isPublished TINYINT(1) DEFAULT NULL, CHANGE isArchived isArchived TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE Share CHANGE user_id user_id INT DEFAULT NULL, CHANGE rapport_id rapport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE User CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE View CHANGE menu_id menu_id INT DEFAULT NULL, CHANGE permission_id permission_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE GPMBAgrega');
        $this->addSql('ALTER TABLE Comments CHANGE user_id user_id INT DEFAULT NULL, CHANGE rapport_id rapport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Element CHANGE user_id user_id INT DEFAULT NULL, CHANGE start start DATE DEFAULT \'NULL\', CHANGE end end DATE DEFAULT \'NULL\', CHANGE data data LONGTEXT CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE isPublished isPublished TINYINT(1) DEFAULT \'NULL\', CHANGE isArchived isArchived TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE Permission CHANGE context context VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE Rapport CHANGE user_id user_id INT DEFAULT NULL, CHANGE description description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE isPublished isPublished TINYINT(1) DEFAULT \'NULL\', CHANGE isArchived isArchived TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE Share CHANGE user_id user_id INT DEFAULT NULL, CHANGE rapport_id rapport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE User CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE View CHANGE menu_id menu_id INT DEFAULT NULL, CHANGE permission_id permission_id INT DEFAULT NULL');
    }
}
