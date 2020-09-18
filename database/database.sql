-- AUTHOR: YOUNES AIT M'HA

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


-- -----------------------------------------------------
-- Schema insea
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `insea` DEFAULT CHARACTER SET utf8 ;
USE `insea` ;

-- -----------------------------------------------------
-- Table `insea`.`Filiere`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `insea`.`Filiere` ;

CREATE TABLE IF NOT EXISTS `insea`.`Filiere` (
  `idFiliere` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `descpt` LONGTEXT CHARACTER SET 'utf8' NOT NULL,
  `cycle` ENUM('ingénieur', 'master', 'doctorat') NOT NULL,
  PRIMARY KEY (`idFiliere`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `insea`.`Etudiant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `insea`.`Etudiant` ;

CREATE TABLE IF NOT EXISTS `insea`.`Etudiant` (
  `idEtudiant` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `matricule` VARCHAR(20) NOT NULL,
  `dateNaissance` DATE NOT NULL,
  `sexe` ENUM('homme', 'femme') NOT NULL,
  `dateInscription` DATETIME NOT NULL,
  `photo` VARCHAR(250) NOT NULL,
  `copieCIN` VARCHAR(250) NOT NULL,
  `bac` VARCHAR(250) NOT NULL,
  `attestationReussite` VARCHAR(250) NOT NULL,
  `niveau` VARCHAR(40) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `lastLogin` DATETIME NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `active_code` VARCHAR(250) NOT NULL,
  `email_status` ENUM('verified', 'not verified') NOT NULL,
  `FK_idFiliere` INT NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  FOREIGN KEY (`FK_idFiliere`)
  REFERENCES `insea`.`Filiere` (`idFiliere`)
  ON DELETE RESTRICT
  ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `insea`.`Admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `insea`.`Admin` ;
CREATE TABLE IF NOT EXISTS `insea`.`Admin` (
  `idAdmin` INT(8) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Statistique - Economie appliquée', 'ingénieur', "L’objectif de cette filière est de former les
étudiants aux différentes techniques permettant d'acquérir un profil d'ingénieur statisticien-économiste
dont les compétences peuvent s'employer dans tous les secteurs de l'économie et de l’industrie. A l'issue
de cette filière, les étudiants sont capables de s'adapter à des problématiques provenant de différents
secteurs d'activités, d’innover et d’utiliser de nouvelles méthodes d’analyse statistique et économétrique
afin de conduire des projets répondant aux besoins de l’administration, l'industrie, le secteur bancaire,
les instituts de sondage, l'environnement, les services …
Le cursus de la filière Statistique-Économie assure une formation pluridisciplinaire se
caractérisant par la richesse des cours avancés en statistique, économétrie, modélisation
économique, méthodologie d’enquêtes et sondage, techniques de prévision, finance de marché,
marketing, ainsi qu’un niveau élevé en mathématiques appliquées. ");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Statistique - Démographie', 'ingénieur', "L’objectif de cette filière est de former les étudiants
aux différentes méthodes de l'analyse des populations (analyse démographique et statistique, techniques d'enquêtes, prévision …)
et à l'étude des contextes historiques, sociologiques, biologiques, sanitaires ..., des comportements
démographiques. A l'issue de cette filière, les étudiants sont capables de s'adapter à des
problématiques provenant de différents secteurs d'activités, d’innover et d’utiliser de nouvelles
méthodes d’analyse démographique, statistique et socio-économique afin de conduire des
projets répondants aux besoins des ministères, des collectivités locales, des bureaux de
consultants, des services de gestion des ressources humaines, voire de gestion des clientèles des
grandes entreprises… .
Le cursus de la filière Statistique-Démographie assure une formation pluridisciplinaire se
caractérisant par la richesse des cours avancés en statistique, démographie, sociologie et
développement durable, méthodologie d’enquêtes et sondage et techniques de prévision.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Recherche Opérationnelle et Aide à la Décision', 'ingénieur', "L’objectif de la filière Recherche
Opérationnelle et Aide à la Décision est de doter l’ingénieur de compétences en développement et implémentation
de modèles mathématiques ou de simulation et de former ainsi des ingénieurs polyvalents capables d’étudier et de
résoudre grâce aux méthodes de la Recherche Opérationnelle (approches exactes, algorithmiques et heuristiques)
des problèmes de décision concrets et complexes se posant à divers niveaux dans les
organisations, notamment :
- celles du monde industriel. On peut citer les problèmes de logistiques et de distribution, de
localisation, de transport, de gestion des stocks et de la production, de planification, d’emploi du
temps, de files d’attente, de qualité et fiabilité des systèmes, d’équipement, de choix de projet,
d’affectation du personnel ;
- celles du secteur bancaire. On peut citer les problèmes d’optimisation de portefeuille d’actions,
de la gestion des encaisses, de placements, d’allocation de fonds ;
- celles du secteur bancaire. On peut citer les problèmes de génie logiciel, de systèmes
d’information, de traitement des données.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Actuariat - Finance', 'ingénieur', "Une formation solide dans les deux domaines les plus demandés
actuellement dans le secteur assuranciel et financier : Actuariat et Finance du marché. Elle permettra de doter le secteur
bancaire et celui de l’assurance de cadres de haut niveau ayant une culture globale des disciplines
de la finance quantitative, la tarification et la gestion des risques au sein des compagnies
d'assurance. L’objectif est de former des ingénieurs capables d’innover et de proposer de
nouvelles méthodes d’analyse afin de conduire jusqu’au bout des études pour modéliser
mathématiquement les risques financiers et assuranciels (élaboration et valorisation des contrats
d'assurance, évaluation de produits dérivés, choix d'investissements, gestion des risques
financiers …). La formation accorde aussi une grande importance aux aspects juridiques,
comptables, fiscaux et commerciaux dans lesquels se situe l’intervention de l’ingénieur actuaire
financier. Le cursus de la filière Actuariat-Finance se caractérise par la richesse des cours avancés
en statistique, économétrie et économie financière, ainsi qu’un niveau élevé en mathématiques
appliquées.
Le cursus universitaire d’un actuaire, de niveau Bac+5, est de nature scientifique, avec un
caractère pluridisciplinaire marqué. Spécialiste de la gestion des risques, l'actuaire ou ingénieur
du risque est chargé de proposer des modèles stochastiques, basés sur la théorie des probabilités,
permettant de gérer l'évolution incertaine de l'environnement assurantiel et financier.
Mais l’actuaire n’utilise pas que des outils mathématiques. Son travail aboutit à des décisions
d’ordre économiques et financières. Pour cela, il doit également disposer d’une connaissance
approfondie en économie, en droit, en fiscalité, en informatique et en gestion et management.
L’objectif de ce cursus est de délivrer une formation actuarielle compatible avec les critères de
l’Association Marocaine des Actuaires et l’Association Actuarielle Internationale.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Data and Software Engineering', 'ingénieur', "L’objectif est de fournir à l’ingénieur des données et
des logiciels de l’INSEA une formation polyvalente :
1) L’ingénieur doit acquérir, lors de ses études, des bases solides qui s’alignent à la formation de base de
l’ingénieur informaticien par le biais des modules suivants : Algorithmique et programmation, Architectures
des ordinateurs, Systèmes d’exploitation, Techniques de compilation, Réseaux informatiques, Développement
Web, Intelligence Artificielle, etc.;
2) L’ingénieur bénéficie d’une formation en ingénierie de données qui couvre l’ensemble des domaines liés à
l’exploitation, la gestion et l’analyse de grands volumes de données par le biais des modules suivants :
Développement et Administration des Bases de Données, Analyse de la régression et Analyse de données,
Business Intelligence, Big Data, Machine Learning, IOT et Cloud computing, etc.;
3) L’ingénieur acquiert des compétences approfondies en génie logiciel et systèmes d’information pour être
capable d'intervenir dans toutes les phases du cycle de vie d'un logiciel à la fois au niveau de la conception
et la spécification et aussi au niveau de la réalisation par le biais des modules suivants : Génie logiciel,
Analyse et conception des systèmes d’information, Nouvelles technologies de développement, Architecture
des SI, BPM et Microservices, Usine et qualité logicielles, etc.;
4) L’ingénieur profite aussi de cours complémentaires à la formation en Mathématique, Recherche
Opérationnelle, Statistique, Economie, Entreprenariat, Sociologie, Communication et Langues.
Cette formation polyvalente permet à l’ingénieur des données et des logiciels de l’INSEA d’analyser tout
type de problèmes, de proposer des solutions informatiques de qualité, d’intégrer aisément le monde
professionnel et d’intervenir dans tous les domaines et spécialisations de l’ingénierie des données et des
logiciels.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Data Science', 'ingénieur', "La Data science, mélange de plusieurs disciplines, est un domaine qui est
apparu récemment dans le monde. Il associe l’informatique aux mathématiques et à la statistique, tout en rajoutant
un côté business. Les tâches principales d’un Data Scientist sont généralement le traitement des données de
l’entreprise, la découverte et l’analyse des relations entre ces données, pour atteindre des objectifs fixés à
l’avance tels l’optimisation des processus de l’entreprise, ou l’aide à la prise à la décision. Leurs travaux
consistent aussi à automatiser ce processus, d’où l’importance de l’informatique, pour créer des modèles prédictifs
ou d’analyse automatiques grâce à l’intelligence artificielle.
Actuellement, Les Data Scientists font partie des profils les plus recherchés dans le monde. Toutes les entreprises
se les arrachent pour la grande valeur qu’ils apportent.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('Systèmes d’Information et Systèmes Intelligents', 'master', "Le master recherche M2SI a pour objectif d’offrir
au candidat une formation adéquate en Systèmes d’Information et Systèmes Intelligents lui permettant de poursuivre par
la suite des études doctorales dans l’un des deux domaines. A l’issue de la formation, les lauréats auront un profil
qui connait les méthodologies les plus avancées utilisées en ingénierie des données et des processus et ayant les atouts
nécessaires, théoriques et technologiques, dans le domaine de la gestion des big data, l’apprentissage automatique,
l’informatique décisionnelle, l’intelligence artificielle et l’amélioration des processus.");

INSERT INTO Filiere (nom, cycle, descpt)
VALUES ('formation doctorale', 'doctorat', "Le CEDOC fait partie de la politique de développement de l'INSEA visant à :

-          Participer au développement de la recherche nationale dans le domaine d’Informatique, Statistique, Mathématique, Démographie, Sociologie, Economie et Finance.

-          Contribuer à former les futurs enseignants-chercheurs du système d'enseignement Supérieur.

-          Améliorer la qualité de la formation d'ingénieur de l'INSEA ;

-          Contribuer à la stratégie nationale en matière d'innovation.

Le Centre d’Etudes Doctorales « SCIENCES, INGENIERIE ET DEVELOPPEMENT DURABLE » (CEDOC-SIDD) est adossé à des structures de
recherche accréditées par Institut National de Statistique et d'Economie Appliquée (INSEA) dans les domaines des Sciences de
l’Ingénieur et de Développement Durable. Il fédère les formations doctorales organisées autour de thématiques communes et/ou
pluridisciplinaires. Il est dirigé par un directeur, assisté par un conseil.

Il est prévu d'introduire des formations complémentaires spécifiques à la formation doctorale de l’INSEA, et ce selon le profil
du doctorant et en accord avec son directeur de thèse. Ces formations complémentaires doivent atteindre un volume horaire équivalent
à 200 heures, comprenant des cours, des vacations, des séminaires et toute autre activité scientifique. Les cours doivent être
répartis de la manière suivante : 1/3 de formations liées au domaine de la thèse et 2/3 de formations non liées au domaine de la thèse.");
