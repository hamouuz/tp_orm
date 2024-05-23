<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240523121627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tables for Article, Depeche, Illustration, and Tag entities';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, date_publication DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depeche (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, source VARCHAR(255) NOT NULL, contenu_original LONGTEXT NOT NULL, date_reception DATETIME NOT NULL, UNIQUE INDEX UNIQ_D3B2E0DB7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE illustration (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, url VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_4B9A2507294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_tag (article_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_14DC75E87294869C (article_id), INDEX IDX_14DC75E8BAD26311 (tag_id), PRIMARY KEY(article_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE depeche ADD CONSTRAINT FK_D3B2E0DB7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE illustration ADD CONSTRAINT FK_4B9A2507294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article_tag ADD CONSTRAINT FK_14DC75E87294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_tag ADD CONSTRAINT FK_14DC75E8BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE article_tag DROP FOREIGN KEY FK_14DC75E87294869C');
        $this->addSql('ALTER TABLE article_tag DROP FOREIGN KEY FK_14DC75E8BAD26311');
        $this->addSql('ALTER TABLE depeche DROP FOREIGN KEY FK_D3B2E0DB7294869C');
        $this->addSql('ALTER TABLE illustration DROP FOREIGN KEY FK_4B9A2507294869C');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE depeche');
        $this->addSql('DROP TABLE illustration');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE article_tag');
    }
}