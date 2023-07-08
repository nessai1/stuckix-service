<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230708122135 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX uniq_e788586c5f37a13b');
        $this->addSql('ALTER TABLE app_trace ADD platform VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE app_trace ADD client_date TIMESTAMP(0) WITH TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE app_trace RENAME COLUMN trace TO exception');
        $this->addSql('ALTER TABLE app_trace RENAME COLUMN token TO event_id');
        $this->addSql('COMMENT ON COLUMN app_trace.client_date IS \'(DC2Type:datetimetz_immutable)\'');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E788586C71F7E88B ON app_trace (event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_E788586C71F7E88B');
        $this->addSql('ALTER TABLE "app_trace" DROP platform');
        $this->addSql('ALTER TABLE "app_trace" DROP client_date');
        $this->addSql('ALTER TABLE "app_trace" RENAME COLUMN exception TO trace');
        $this->addSql('ALTER TABLE "app_trace" RENAME COLUMN event_id TO token');
        $this->addSql('CREATE UNIQUE INDEX uniq_e788586c5f37a13b ON "app_trace" (token)');
    }
}
