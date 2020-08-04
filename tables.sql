CREATE TABLE `annonceo`.`membre` (
    `id_membre` INT(3) NOT NULL AUTO_INCREMENT,
    `pseudo` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `mdp` VARCHAR(60) NOT NULL,
    `status` INT(1) NOT NULL,
    `date_enregistrement` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_membre`));

  CREATE TABLE `annonceo`.`profil` (
  `id_profil` INT(3) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(20) NOT NULL,
  `prenom` VARCHAR(20) NOT NULL,
  `telephone` VARCHAR(10) NOT NULL,
  `civilite` VARCHAR(3) NOT NULL,
  `id_membre` INT(3) NOT NULL,
  PRIMARY KEY (`id_profil`),
  INDEX `fk_profil_membre_idx` (`id_membre` ASC),
  CONSTRAINT `fk_profil_membre`
    FOREIGN KEY (`id_membre`)
    REFERENCES `annonceo`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


  CREATE TABLE `annonceo`.`categorie` (
    `id_categorie` INT(3) NOT NULL AUTO_INCREMENT,
    `titre` VARCHAR(255) NOT NULL,
    `motcles` VARCHAR(255) NULL,
  PRIMARY KEY (`id_categorie`));

  CREATE TABLE `annonceo`.`photo` (
    `id_photo` INT(3) NOT NULL AUTO_INCREMENT,
    `photo1` VARCHAR(255) NOT NULL,
    `photo2` VARCHAR(255) NOT NULL,
    `photo3` VARCHAR(255) NOT NULL,
    `photo4` VARCHAR(255) NOT NULL,
    `photo5` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_photo`));

  CREATE TABLE `annonceo`.`annonce` (
  `id_annonce` INT(3) NOT NULL,
  `titre` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  `adresse` VARCHAR(50) NOT NULL,
  `cp` INT(5) NOT NULL,
  `ville` VARCHAR(20) NOT NULL,
  `pays` VARCHAR(20) NOT NULL,
  `prix` DECIMAL(5,2) UNSIGNED NOT NULL,
  `membre_id` INT(3) NOT NULL,
  `photo_id` INT(3) NOT NULL,
  `categorie_id` INT(3) NOT NULL,
  `date_enregistrement` VARCHAR(10) NOT NULL,
  INDEX `fk_annonce_membre_idx` (`membre_id` ASC),
  INDEX `fk_annonce_photo_idx` (`photo_id` ASC),
  INDEX `fk_annonce_categorie_idx` (`categorie_id` ASC),
  CONSTRAINT `fk_annonce_membre`
    FOREIGN KEY (`membre_id`)
    REFERENCES `annonceo`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_annonce_photo`
    FOREIGN KEY (`photo_id`)
    REFERENCES `annonceo`.`photo` (`id_photo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_annonce_categorie`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `annonceo`.`categorie` (`id_categorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `annonceo`.`note` (
  `id_note` INT NOT NULL AUTO_INCREMENT,
  `id_membre1` INT(3) NOT NULL,
  `note` INT(3) NOT NULL,
  `avis` TEXT NOT NULL,
  `date_enregistrement` DATETIME NOT NULL,
  PRIMARY KEY (`id_note`),
  INDEX `fk_note_membre_idx` (`id_membre1` ASC),
  CONSTRAINT `fk_note_membre`
    FOREIGN KEY (`id_membre1`)
    REFERENCES `annonceo`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE `annonceo`.`commentaire` (
  `id_commentaire` INT(3) NOT NULL AUTO_INCREMENT,
  `id_membre` INT(3) NOT NULL,
  `id_annonce` INT(3) NOT NULL,
  `commentaire` TEXT NOT NULL,
  `date_enregistrement` DATETIME NOT NULL,
  PRIMARY KEY (`id_commentaire`));
  ALTER TABLE `annonceo`.`commentaire` 
    ADD INDEX `fk_commentaire_membre_idx` (`id_membre` ASC),
    ADD INDEX `fk_commentaire_commentaire_idx` (`id_annonce` ASC);
    ALTER TABLE `annonceo`.`commentaire` 
    ADD CONSTRAINT `fk_commentaire_membre`
    FOREIGN KEY (`id_membre`)
    REFERENCES `annonceo`.`membre` (`id_membre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    ADD CONSTRAINT `fk_commentaire_commentaire`
    FOREIGN KEY (`id_annonce`)
    REFERENCES `annonceo`.`commentaire` (`id_commentaire`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

INSERT INTO annonceo.categorie (titre) VALUE ("Informatique/Telephonie");
INSERT INTO annonceo.categorie (titre) VALUE ("Emplois");
INSERT INTO annonceo.categorie (titre) VALUE ("Vehicules");
INSERT INTO annonceo.categorie (titre) VALUE ("Immobiliers");
INSERT INTO annonceo.categorie (titre) VALUE ("Rencontres");
INSERT INTO annonceo.categorie (titre) VALUE ("Autre");