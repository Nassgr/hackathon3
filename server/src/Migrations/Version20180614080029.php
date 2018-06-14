<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180614080029 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE works (id INT AUTO_INCREMENT NOT NULL, collection VARCHAR(60) DEFAULT NULL, period_start DATETIME DEFAULT NULL, period_end DATETIME DEFAULT NULL, technique VARCHAR(255) DEFAULT NULL, location_name VARCHAR(255) DEFAULT NULL, location_city VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, decription_url VARCHAR(255) DEFAULT NULL, creation_date DATETIME DEFAULT NULL, author_name VARCHAR(255) DEFAULT NULL, author_api_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE works');
    }
}