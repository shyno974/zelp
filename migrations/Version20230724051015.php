<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230724051015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F0C17188');
        $this->addSql('DROP INDEX IDX_8D93D649F0C17188 ON user');
        $this->addSql('ALTER TABLE user CHANGE ville_id_id ville_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A73F0036 ON user (ville_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649A73F0036');
        $this->addSql('DROP INDEX IDX_8D93D649A73F0036 ON `user`');
        $this->addSql('ALTER TABLE `user` CHANGE ville_id ville_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649F0C17188 FOREIGN KEY (ville_id_id) REFERENCES ville (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649F0C17188 ON `user` (ville_id_id)');
    }
}
