<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230708133951 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_user DROP CONSTRAINT fk_b4021e512fb3d0ee');
        $this->addSql('DROP INDEX idx_b4021e512fb3d0ee');
        $this->addSql('ALTER TABLE project_user DROP CONSTRAINT project_user_pkey');
        $this->addSql('ALTER TABLE project_user RENAME COLUMN project TO project_id');
        $this->addSql('ALTER TABLE project_user ADD CONSTRAINT FK_B4021E51166D1F9C FOREIGN KEY (project_id) REFERENCES "app_project" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_B4021E51166D1F9C ON project_user (project_id)');
        $this->addSql('ALTER TABLE project_user ADD PRIMARY KEY (project_id, user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE project_user DROP CONSTRAINT FK_B4021E51166D1F9C');
        $this->addSql('DROP INDEX IDX_B4021E51166D1F9C');
        $this->addSql('DROP INDEX project_user_pkey');
        $this->addSql('ALTER TABLE project_user RENAME COLUMN project_id TO project');
        $this->addSql('ALTER TABLE project_user ADD CONSTRAINT fk_b4021e512fb3d0ee FOREIGN KEY (project) REFERENCES app_project (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_b4021e512fb3d0ee ON project_user (project)');
        $this->addSql('ALTER TABLE project_user ADD PRIMARY KEY (project, user_id)');
    }
}
