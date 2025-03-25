<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250325055042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consolidated_orders (id BIGINT AUTO_INCREMENT NOT NULL, order_id BIGINT DEFAULT NULL, customer_id BIGINT DEFAULT NULL, customer_name VARCHAR(255) DEFAULT NULL, customer_email VARCHAR(255) DEFAULT NULL, product_id BIGINT DEFAULT NULL, product_name VARCHAR(255) DEFAULT NULL, sku VARCHAR(100) NOT NULL, quantity INT DEFAULT 0 NOT NULL, item_price NUMERIC(10, 2) NOT NULL, line_total NUMERIC(10, 2) NOT NULL, order_date DATETIME DEFAULT NULL, order_status VARCHAR(255) DEFAULT \'Initiated\' NOT NULL, order_total NUMERIC(10, 2) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX identifiers (customer_id, order_id, sku, product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE consolidated_orders');
    }
}
