<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230708140847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_trace ADD modules JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE app_trace ADD query JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE app_trace ADD server_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE app_trace ADD php_version VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "app_trace" DROP modules');
        $this->addSql('ALTER TABLE "app_trace" DROP query');
        $this->addSql('ALTER TABLE "app_trace" DROP server_name');
        $this->addSql('ALTER TABLE "app_trace" DROP php_version');
    }
}
