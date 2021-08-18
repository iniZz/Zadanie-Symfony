<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210818193355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT DEFAULT \'["ROLE_USER"]\' NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, disabled TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('INSERT INTO user (username,roles,password,disabled) VALUES ("administrator","[""ROLE_ADMIN""]","$2y$13$TBB2w0eZ52FK9sDQJnOvz.5fLVrcPbpxIwPelI5Mvew6YD3LFtcZm",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test1","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test2","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test3","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test4","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test5","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test6","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test7","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test8","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test9","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test10","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test11","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test12","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test13","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test14","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test15","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test16","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test17","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test18","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test19","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test20","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test21","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test22","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test23","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test24","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test25","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test26","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test27","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test28","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test29","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test30","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test31","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test32","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test33","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test34","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test35","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test36","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",0)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test37","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test38","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
        $this->addSql('INSERT INTO user (username,password,disabled) VALUES ("test39","$2y$13$db81vjbhUH.7tqaHG/WpeOWnEJr.EtLojco7T.tXNKT2aLm/NEra6",1)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `user`');
    }
}
