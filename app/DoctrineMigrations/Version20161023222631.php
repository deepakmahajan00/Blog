<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161023222631 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE blog SET user_id = 1 WHERE id = 1');
        $this->addSql('UPDATE blog SET user_id = 1 WHERE id = 2');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE blog SET user_id = null WHERE id = 1');
        $this->addSql('UPDATE blog SET user_id = null WHERE id = 2');
    }
}
