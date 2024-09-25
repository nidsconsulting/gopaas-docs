# Compte

## Création de la table compte

Dans le menu personnalisation ![capture](images/image5.png):
- Cliquer sur le menu `Tables` pour afficher la vue avec la liste de toutes les tables.
- Cliquer ensuite sur le bouton `Ajouter`.

    ![screenshot](images/image1.jpeg)

Renseigner les champs suivant:

| Champ    | Valeur                               |
|----------|--------------------------------------|
| Intitulé | Le nom de la table en base de données |
| Alias    | Le nom de la table dans l'application |
| Champs à afficher dans connexion    | Le nom du champ de la table compte qui sera affiché dans les champs de connexion présents sur d'autre tables |
| Icone    | Icone [Font Awesome](https://fontawesome.com/) qui permet de personnaliser la table  |
| Type    | Ex: **Application** |
| Module    | Ex: **CRM** |

* S'assurer que votre **groupe** a bien accès à ce **module** en vérifiant dans la **barre de navigation** > <img src="images/image2.png" height="30px" alt="Admin"/> > **Groupes**.

* Pour le groupe **ADMIN**, ouvrir la fiche du groupe **ADMIN** pour ajouter par exemple le module **CRM**.

    ![screenshot](images/image3.png)

* Enregistrer la table **Compte**.

* Pour ouvrir la nouvelle table, il est nécessaire de se déconnecter de GoPaaS et de se reconnecter.

    ![screenshot](images/image4.png)

## FormDesigner

Le FormDesigner permet de créer facilement des champs personnalisés dans les formulaires en quelques clics.

Dans le menu personnalisation ![capture](images/image5.png):
- Cliquer sur le menu `Tables` pour afficher la vue avec la liste de toutes les tables.
- Rechercher la table **Compte** et double cliquer sur la fiche pour l'ouvrir.

    ![screenshot](images/image6.png)

### Ouvrir le FormDesigner
- Cliquer sur le menu `Outil` de la fiche puis `FormDesigner`.
- Dans le menu qui apparaît cliquer sur **FormDesigner**.

    ![screenshot](images/image7.png)

###  Création des champs

Nous avons dans une fiche GoPaaS, des onglets, des sections et des colonnes.

- Les Onglets contiennent des sections.
- Les Sections contiennent 1 à 4 colonnes.
- Cliquer sur l'un des boutons <img src="images/image12.png" height="30px" alt="Ajout Champ"/> pour ajouter un nouveau champ dans une colonne.

    ![screenshot](images/image9.png)

#### Création d'un champ `nom` (type *Texte*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Texte           |
| Nom champ       | nom |
| Alias/Nom table connectée   | Nom |
| Intitulé   | Raison sociale |
| Largeur intitulé   | 3 |
| Obligatoire        | [x] |

![screenshot](images/image8.png)

#### Création d'un champ `origine` (type *Liste*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Liste           |
| Nom champ       | origine    |
| Alias/Nom table connectée   | origine |
| Intitulé   | Origine  |
| Largeur intitulé   | 3 |
| Valeur  | Réseau<br>Web<br>Fichier<br>Partenariat<br>Salon |

![screenshot](images/image21.png)

#### Création d'un champ `telephone` (type *Téléphone*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Téléphone           |
| Nom champ       | telephone |
| Alias/Nom table connectée   | telephone |
| Intitulé   | Téléphone |
| Largeur intitulé   | 3 |

![screenshot](images/image22.png)

#### Création d'un champ `site_web` (type *URL*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | URL           |
| Nom champ       | site_web |
| Alias/Nom table connectée   | site_web |
| Intitulé   | Site web |
| Largeur intitulé   | 3 |

![screenshot](images/image23.png)

#### Création d'un champ `email` (type *Email*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Email           |
| Nom champ       | email  |
| Alias/Nom table connectée   | email |
| Intitulé   | Email |
| Largeur intitulé   | 3 |

![screenshot](images/image24.png)

#### Création d'un champ `gestion_par` (type *Connexion*)

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Connexion           |
| Nom champ       | gestion_par |
| Alias/Nom table connectée   | utilisateur (table de connexion) |
| Intitulé   | Gestion par  |
| index      | [x] |

![screenshot](images/image20.png)

####  Liste des autres champs à créer

Voici un tableau avec les champs de la table `Compte` à créer et leur types :

| Nom des champs | Type                          |
|----------------|-------------------------------|
| Nom            | Texte `Obligatoire`           |
| Adresse1       | Texte                         |
| Adresse2       | Texte                         |
| CP             | Texte `Obligatoire`           |
| Ville          | Texte `Obligatoire`           |
| Pays           | Texte `Obligatoire`           |
| Gestion par    | Connexion `Table utilisateur` |
| Type           | Liste<br>Valeur de la liste :<br>- Client<br>- Prospect |
| Origine        | Liste<br>Valeur de la liste :<br>- Réseau<br>- Web<br>- Fichier<br>- Partenariat<br>- Salon  |
| Téléphone      | Téléphone                     |
| Fax            | Téléphone                     |
| Site web       | URL                           |
| Email          | Email                         |

### Options d'un champ

| Option        | Description|
|-------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------|
| Aide                    | Ajouter une aide contextuelle pour l'utilisateur au survol du champ.                                                                                |
| Type                    | Choisir le type de champ parmi les options disponibles.                                                                                              |
| Nom champ               | Nom du champ dans la base de données.                                                                                                               |
| Alias/Nom table connectée | L'alias du champ doit être unique dans toute la table. Dans le cas où le champ créé serait de type connexion, il faut renseigner le nom de la table à connecter. |
| Intitulé                | Nom du champ tel qu'il apparaît dans l'application.                                                                                                      |
| Largeur intitulé        | Espacement entre le titre du champ et le champ lui-même, valeurs prédéfinies de 1 à 12.                                     |
| Alignement intitulé     | Positionnement de l'intitulé par rapport au champ.                                                                                             |
| Masquer                 | Option permettant de masquer le champ.                                                                                                         |
| Obligatoire             | Option permettant de rendre obligatoire le champ.                                                                                              |
| Lecture seule           | Option permettant de rendre le champ non modifiable par l'utilisateur.         |
| Audit Trail             | Suivre un historique sur les modifications apportées à ce champ.                                                                     |
| Index                   | Indexer le champ dans la base de données.                                                                                                  |
| Données personnelles    | Catégoriser le champ comme contenant des données personnelles (RGPD).                                                                                                |
| Données sensibles       | Catégoriser le champ comme contenant des données sensibles (RGPD).                                                                                                  |

### Actualisation du FormDesigner
- Cliquer sur le bouton ![capture](images/image10.png) pour mettre à jour le `FormDesigner` et visualiser les modifications apportées.

    > *Astuce : Il est possible de **glisser-déposer** les champs pour réorganiser leur ordre sur le formulaire.*
    
    ![screenshot](images/image11.png)


### Agencer la vue `Par défaut`

* Dans le menu **Application** > cliquer sur le sous-menu **CRM** > et cliquer sur **Compte**

    ![screenshot](images/image25.png)

* Cliquer sur l'icône de modification <img src="images/image26.png" width="28px" alt="capture"> pour accéder aux paramètres de la vue pour pouvoir la personnaliser.
* Cliquer sur l'onglet `Champs` pour voir la liste des champs de la table **Compte** dans la colonne de gauche.

    ![screenshot](images/image27.png)
* Sélectionner les champs à afficher dans la vue.
  > *Astuce : Sélectionner plusieurs champs simultanément en maintenant la touche CTRL enfoncée.*
* Après avoir sélectionné les champs, cliquer sur la flèche <img src="images/image28.png" width="28px" alt="capture"> pour les ajouter.
* Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.
* Pour voir les changements effectués, fermer la vue actuelle et la ré-ouvrir.

    ![screenshot](images/image29.png)
