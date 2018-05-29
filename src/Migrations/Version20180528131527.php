<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180528131527 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE aboutus (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE add_event_form (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE connexion (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, date_debut DATE NOT NULL, heure_debut TIME NOT NULL, date_fin DATE NOT NULL, heure_fin TIME NOT NULL, produits_proposes LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', zip_de_vente INT NOT NULL, photo_pdts_proposes VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE form_ajout_produit_pro (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison_collaborative (id INT AUTO_INCREMENT NOT NULL, pseudo_useresponsable VARCHAR(100) NOT NULL, zip INT NOT NULL, perimetre_activite INT NOT NULL, jour_livraison DATE DEFAULT NULL, heure_livraison TIME NOT NULL, pseudo_userlivre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison_coursier (id INT AUTO_INCREMENT NOT NULL, entreprise_nom VARCHAR(100) NOT NULL, adresse_entreprise VARCHAR(255) NOT NULL, commande_attente VARCHAR(255) NOT NULL, nom_user VARCHAR(255) NOT NULL, adress_user VARCHAR(255) NOT NULL, tarif INT NOT NULL, jour_livraison DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professionnels (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, entreprise VARCHAR(100) NOT NULL, siret VARCHAR(100) NOT NULL, adresse VARCHAR(150) NOT NULL, zip INT NOT NULL, produits_proposes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', photo_pdts VARCHAR(255) DEFAULT NULL, utilite LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, adresse VARCHAR(255) NOT NULL, zip INT NOT NULL, pseudo VARCHAR(25) NOT NULL, password VARCHAR(60) NOT NULL, interet LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', statut TINYINT(1) NOT NULL, newsletter TINYINT(1) NOT NULL, perimetre_activite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE aboutus');
        $this->addSql('DROP TABLE add_event_form');
        $this->addSql('DROP TABLE connexion');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE form_ajout_produit_pro');
        $this->addSql('DROP TABLE inscription');
        $this->addSql('DROP TABLE livraison_collaborative');
        $this->addSql('DROP TABLE livraison_coursier');
        $this->addSql('DROP TABLE professionnels');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
