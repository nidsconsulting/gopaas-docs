# Contact

## Création de la table contact

Dans le menu personnalisation ![capture](images/image5.png):
- Cliquer sur le menu `Tables` pour afficher la vue avec la liste de toutes les tables.
- Cliquer ensuite sur le bouton `Ajouter`.

    ![screenshot](images/image1.png)

Renseigner les champs suivant:

| Champ                            | Valeur                                                                                                       |
| -------------------------------- | ------------------------------------------------------------------------------------------------------------ |
| Intitulé                         | Le nom de la table en base de données                                                                        |
| Alias                            | Le nom de la table dans l'application                                                                        |
| Champs à afficher dans connexion | Le nom du champ de la table contact qui sera affiché dans les champs de connexion présents sur d'autre tables |
| Icone                            | Icone [Font Awesome](https://fontawesome.com/) qui permet de personnaliser la table                               |
| Type                             | Ex: **Application**                                                                                          |
| Module                           | Ex: **CRM**                                                                                                  |

* Assurez-vous que votre **groupe** a bien accès à ce **module** en vérifiant dans la **barre de navigation** > <img src="images/image2.png" height="30px" alt="Admin"/> > **Groupes**.

* Si vous faites partie du groupe **ADMIN**, ouvrez la fiche du groupe **ADMIN** pour ajouter par exemple le module **CRM**.

    ![screenshot](images/image3.png)

* Enregistrer la table **Contact**.

* Pour ouvrir la nouvelle table, il est nécessaire de vous déconnecter de GoPaaS et de vous reconnecter.

    ![screenshot](images/image4.png)

## FormDesigner

Le FormDesigner permet de créer facilement des champs personnalisés dans vos formulaires en quelques clics.

Dans le menu personnalisation ![capture](images/image5.png):
- Cliquer sur le menu `Tables` pour afficher la vue avec la liste de toutes les tables.
- Rechercher la table **Contact** et double cliquer sur la fiche pour l'ouvrir.

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

    ![screenshot](images/image8.png)


#### Champ de type `Texte`

| Nom des champs            | Valeur |
| ------------------------- | ------ |
| Type                      | Texte  |
| Nom champ                 | Nom    |
| Alias/Nom table connectée | Nom    |
| Intitulé                  | Nom    |
| Largeur intitulé          | 3      |
| Obligatoire               | [x]    |

![screenshot](images/image9.png)

#### Champ de type `Connexion`

| Nom des champs            | Valeur                      |
| ------------------------- | --------------------------- |
| Type                      | Connexion                   |
| Nom champ                 | compte                      |
| Alias/Nom table connectée | compte (table de connexion) |
| Intitulé                  | Compte                      |
| index                     | [x]                         |

![screenshot](images/image10.png)

#### Champ de type `Liste`

| Nom des champs            | Valeur             |
| ------------------------- | ------------------ |
| Type                      | Liste              |
| Nom champ                 | civilite           |
| Alias/Nom table connectée | civilite           |
| Intitulé                  | Civilité           |
| Largeur intitulé          | 3                  |
| Valeur                    | Monsieur<br>Madame |

![screenshot](images/image11.png)

#### Champ de type `Téléphone`

| Nom des champs            | Valeur    |
| ------------------------- | --------- |
| Type                      | Téléphone |
| Nom champ                 | telephone |
| Alias/Nom table connectée | telephone |
| Intitulé                  | Téléphone |
| Largeur intitulé          | 3         |

![screenshot](images/image13.png)

#### Champ de type `URL`

| Nom des champs            | Valeur   |
| ------------------------- | -------- |
| Type                      | URL      |
| Nom champ                 | linkedin |
| Alias/Nom table connectée | linkedin |
| Intitulé                  | Linkedin |
| Largeur intitulé          | 3        |

![screenshot](images/image14.png)

#### Champ de type `Email`

| Nom des champs            | Valeur |
| ------------------------- | ------ |
| Type                      | Email  |
| Nom champ                 | email  |
| Alias/Nom table connectée | email  |
| Intitulé                  | Email  |
| Largeur intitulé          | 3      |

![screenshot](images/image15.png)

####  Liste des autres champs à créer

Voici un tableau avec les champs de la table `Contact` à créer et leur types :

| Nom des champs  | Type                                                                                                                                                                                                                          |
| --------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Compte          | Connexion                                                                                                                                                                                                                     |
| Civilité        | Liste `Obligatoire`<br>Valeur de la liste :<br>- Monsieur<br>- Madame                                                                                                                                                         |
| Nom             | Texte `Obligatoire`                                                                                                                                                                                                           |
| Prénom          | Texte `Obligatoire`                                                                                                                                                                                                           |
| Fonction        | Liste  <br>Valeur de la liste :<br>- Président<br>- Directeur général<br>- Gérant<br>- Directeur adjoint<br>- Directeur financier<br>- Directeur commercial<br>- Directeur système d'information<br>- Directeur juridique<br> |
| Profession      | Texte                                                                                                                                                                                                                         |
| Type            | Liste<br>Valeur de la liste :<br>- Ambassadeur<br>- Ami                                                                                                                                                                       |
| Origine         | Liste<br>Valeur de la liste :<br>- Réseau<br>- Web<br>- Fichier<br>- Partenariat<br>- Salon                                                                                                                                   |
| Téléphone       | Téléphone                                                                                                                                                                                                                     |
| Mobile          | Téléphone                                                                                                                                                                                                                     |
| Email           | Email                                                                                                                                                                                                                         |
| Email personnel | Email                                                                                                                                                                                                                         |
| Linkedin        | URL                                                                                                                                                                                                                           |

### Option d'un champ

| Option           | Description                                                                                                                                                      |
| ------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Aide                      | Ajouter une aide contextuelle pour l'utilisateur au survol du champ.                                                                                             |
| Type                      | Choisir le type de champ parmi les options disponibles.                                                                                                          |
| Nom champ                 | Nom du champ dans la base de données.                                                                                                                            |
| Alias/Nom table connectée | L'alias du champ doit être unique dans toute la table. Dans le cas où le champ créé serait de type connexion, il faut renseigner le nom de la table à connecter. |
| Intitulé                  | Nom du champ tel qu'il apparaît dans l'application.                                                                                                              |
| Largeur intitulé          | Espacement entre le titre du champ et le champ lui-même, valeurs prédéfinies de 1 à 12.                                                                          |
| Alignement intitulé       | Positionnement de l'intitulé par rapport au champ.                                                                                                               |
| Masquer                   | Option permettant de masquer le champ.                                                                                                                           |
| Obligatoire               | Option permettant de rendre obligatoire le champ.                                                                                                                |
| Lecture seule             | Option permettant de rendre le champ non modifiable par l'utilisateur.                                                                                           |
| Audit Trail               | Suivre un historique sur les modifications apportées à ce champ.                                                                                                 |
| Index                     | Indexer le champ dans la base de données.                                                                                                                        |
| Données personnelles      | Catégoriser le champ comme contenant des données personnelles (RGPD).                                                                                            |
| Données sensibles         | Catégoriser le champ comme contenant des données sensibles (RGPD).                                                                                               |


### Actualisation du FormDesigner
- Cliquer sur le bouton ![capture](images/image16.png) pour mettre à jour le `FormDesigner` et visualiser les modifications apportées.

    > *Astuce : Vous pouvez également **glisser-déposer** les champs pour réorganiser leur ordre sur le formulaire.*
    
    ![screenshot](images/image17.png)


### Agencer la vue `Par défaut`

* Dans le menu **Application** > cliquer sur le sous-menu **CRM** > et cliquer sur **Contact**

    ![screenshot](images/image41.png)

* Cliquer sur l'icône de modification <img src="images/image40.png" width="28px" alt="capture"> pour accéder aux paramètres de la vue pour pouvoir la personnaliser.
* Cliquer sur l'onglet `Champs` pour voir la liste des champs de la table **Contact** dans la colonne de gauche.

    ![screenshot](images/image18.png)

* Sélectionner les champs à afficher dans la vue.
  > *Astuce : Sélectionner plusieurs champs simultanément en maintenant la touche CTRL enfoncée.*
* Après avoir sélectionné les champs, cliquer sur la flèche <img src="images/image19.png" width="28px" alt="capture"> pour les ajouter.
* Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.
* Pour voir les changements effectués, fermer la vue actuelle et la ré-ouvrir.

    ![screenshot](images/image20.png)

## Vue liée

### Création de la vue liée

Pour afficher les **Contacts** sur le **Compte**, créer une vue liée.

- Pour cela, ouvrir la vue "Par défaut" des **Contacts** et cliquer sur <img src="images/image26.png" width="28px" alt="capture">

![screenshot](images/image38.jpeg)

- Dans le menu outil, cliquer sur **Dupliquer**.

![screenshot](images/image21.png)

- Renommer la nouvelle vue **LinkCompteActions**

![screenshot](images/image22.png)

- Cliquer sur l'onglet `Conditions` pour établir la connexion avec la table `Compte`.
- Sélectionner le champ **compte** puis cliquer sur la flèche <img src="images/image19.png" width="28px" alt="capture"> pour ajouter le champ dans les conditions de la vue.
  
![screenshot](images/image23.png)

- Ouvrir la condition, puis ajouter la valeur **(-TrigItemName-)** et enregistrer la fiche.
  
![screenshot](images/image24.png)

![screenshot](images/image25.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.
  
### Ajouter l'onglet dans la table **Compte**

Dans le menu personnalisation ![capture](images/image5.png):
- Cliquer sur le menu `Tables` pour afficher la vue avec la liste de toutes les tables.
- Rechercher la table **Compte** et double cliquer sur la fiche pour l'ouvrir.

    ![screenshot](images/image27.png)

#### Ouvrir le FormDesigner
- Cliquer sur le menu `Outil` de la fiche puis `FormDesigner`.
- Dans le menu qui apparaît cliquer sur **FormDesigner**.

    ![screenshot](images/image28.png)

- Cliquer sur le bouton <img src="images/image30.PNG"  width="60px" alt="capture"> pour ajouter un nouvel onglet.

![screenshot](images/image29.png)

- Renseigner l'intitulé, le label et l'ordre du nouvel onglet.

| Nom des champs        | Description                        |
|------------------------|-----------------------------------------------|
| Intitulé | Le nom doit être unique sur la table.        |
| Label    | Le texte qui apparaîtra sur le formulaire.   |
| Ordre    | La position de l'onglet dans l'affichage.       |

![screenshot](images/image39.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.
- Une fois la création de l'onglets terminée, cliquer sur le bouton ![capture](images/image16.png) pour actualiser le FormDesigner et visualiser les modifications.



### Ajouter le champ de type **Vue**

- Cliquer sur le nouvel onglet  `Contact`

![screenshot](images/image33.png)

* Modifiez la `Section : Default` avec le bouton <img src="images/image26.png" width="28px" alt="capture">

![screenshot](images/image31.png)

* Mettre NB colonne a `1`, Ordre à `1` et enregistrer la section.

- Une fois la modification de la section terminée, cliquer sur le bouton ![capture](images/image16.png) pour actualiser le FormDesigner et visualiser les modifications.

* Cliquez sur le bouton `+` pour ajouter un nouveau champ.

![screenshot](images/image34.png)

#### Configurer le Champ

| Nom des champs | Valeur                          |
|----------------|-------------------------------|
| Type            | Vue           |
| Nom de la table | contact (table à partir de laquelle vous souhaitez insérer la vue) |
| Nom champ   | nom de la vue que vous avez créée `LinkCompteContacts` |

![screenshot](images/image35.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.

#### Actualiser le `FormDesigner`

* Une fois que vous avez terminé, cliquez sur le bouton ![capture](images/image16.png) pour mettre à jour le `FormDesigner` et visualiser les modifications.

![screenshot](images/image36.png)

![screenshot](images/image37.png)