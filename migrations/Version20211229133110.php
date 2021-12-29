<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229133110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE kanji (id INT AUTO_INCREMENT NOT NULL, symbol VARCHAR(1) NOT NULL, strokes SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kanji_key_kanji (kanji_id INT NOT NULL, key_kanji_id INT NOT NULL, INDEX IDX_49655DE7FB3081B8 (kanji_id), INDEX IDX_49655DE73A334A37 (key_kanji_id), PRIMARY KEY(kanji_id, key_kanji_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE key_kanji (id INT AUTO_INCREMENT NOT NULL, symbol_key VARCHAR(1) NOT NULL, name_key VARCHAR(30) NOT NULL, key_number SMALLINT NOT NULL, strokes SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE meanings_fr (id INT AUTO_INCREMENT NOT NULL, kanji_id INT NOT NULL, meaning_fr VARCHAR(255) NOT NULL, INDEX IDX_DD74F406FB3081B8 (kanji_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE readings_kun (id INT AUTO_INCREMENT NOT NULL, kanji_id INT NOT NULL, reading_kun VARCHAR(255) NOT NULL, INDEX IDX_3D8D8F94FB3081B8 (kanji_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE readings_on (id INT AUTO_INCREMENT NOT NULL, kanji_id INT NOT NULL, reading_on VARCHAR(255) NOT NULL, INDEX IDX_B4793FC5FB3081B8 (kanji_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kanji_key_kanji ADD CONSTRAINT FK_49655DE7FB3081B8 FOREIGN KEY (kanji_id) REFERENCES kanji (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kanji_key_kanji ADD CONSTRAINT FK_49655DE73A334A37 FOREIGN KEY (key_kanji_id) REFERENCES key_kanji (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE meanings_fr ADD CONSTRAINT FK_DD74F406FB3081B8 FOREIGN KEY (kanji_id) REFERENCES kanji (id)');
        $this->addSql('ALTER TABLE readings_kun ADD CONSTRAINT FK_3D8D8F94FB3081B8 FOREIGN KEY (kanji_id) REFERENCES kanji (id)');
        $this->addSql('ALTER TABLE readings_on ADD CONSTRAINT FK_B4793FC5FB3081B8 FOREIGN KEY (kanji_id) REFERENCES kanji (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kanji_key_kanji DROP FOREIGN KEY FK_49655DE7FB3081B8');
        $this->addSql('ALTER TABLE meanings_fr DROP FOREIGN KEY FK_DD74F406FB3081B8');
        $this->addSql('ALTER TABLE readings_kun DROP FOREIGN KEY FK_3D8D8F94FB3081B8');
        $this->addSql('ALTER TABLE readings_on DROP FOREIGN KEY FK_B4793FC5FB3081B8');
        $this->addSql('ALTER TABLE kanji_key_kanji DROP FOREIGN KEY FK_49655DE73A334A37');
        $this->addSql('DROP TABLE kanji');
        $this->addSql('DROP TABLE kanji_key_kanji');
        $this->addSql('DROP TABLE key_kanji');
        $this->addSql('DROP TABLE meanings_fr');
        $this->addSql('DROP TABLE readings_kun');
        $this->addSql('DROP TABLE readings_on');
    }
}
