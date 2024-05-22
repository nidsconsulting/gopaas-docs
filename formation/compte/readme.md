# Compte

## Création de la table compte

Pour cela, rendez-vous dans le menu personnalisation ![capture](images/image5.png) -> Tables -> cliquez sur Ajouter.

![screenshot](images/image1.jpeg)

Afin d'enregistrer la table en base de données, il est nécessaire de renseigner deux champs obligatoires :

| Champ    | Valeur                               |
|----------|--------------------------------------|
| Intitulé | Le nom de la table en base de données |
| Alias    | Le nom de la table dans l'application |

> Nous allons aussi renseigner le champ **Module** pour l'afficher dans le menu **Application**. Assurez-vous que votre groupe a bien accès à ce module en vérifiant dans la **barre de navigation** > <img src="images/image2.png" height="30px" alt="Admin"/> > **Groupes**.

Dans mon cas, je fais partie du groupe **ADMIN**, j'ouvre donc la fiche du groupe **ADMIN** pour ajouter le module CRM.

![screenshot](images/image3.png)

Vous pouvez maintenant enregistrer votre table **Compte**.

> Pour avoir accès à la nouvelle table, il est nécessaire de vous déconnecter de GoPaaS et de vous reconnecter.

![screenshot](images/image4.png)

## FormDesigner

Nous allons maintenant créer les champs de la table **Compte** et procéder à l'agencement.

Pour cela, accédez au FormDesigner. Rendez-vous dans le menu personnalisation ![capture](images/image5.png) -> Tables -> et recherchez la table **Compte**, puis ouvrez-la.

![screenshot](images/image6.png)

Ensuite, cliquez sur le menu Outil > FormDesigner.

![screenshot](images/image7.png)

Cliquez sur le bouton + sur la section **Default** pour ajouter un champ.

![screenshot](images/image9.png)


###  Création des champs
Pour créer un nouveau champ, remplissez les informations nécessaires et cliquez sur l'icône d'ajout ![screenshot](images/image12.png) pour ouvrir une nouvelle fiche de création de champ (Exemple `Création du champ Nom` ).

![screenshot](images/image8.png)

####  Exemple de liste des champs à créer

Voici un tableau avec une en-tête et 13 lignes :

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

#### Actualisation du FormDesigner
Lorsque vous avez terminé la création des champs, cliquez sur le bouton ![capture](images/image10.png) pour actualiser le `FormDesigner` et voir les modifications appliquées.

![screenshot](images/image11.png)


### Création des Onglets

#### Exemple de liste des onglets à créer

| Nom des onglets        | Ordre `Correspond à l'emplacement de l'onglet`|
|------------------------|-----------------------------------------------|
| Principal `Par défault`| 1                                             |
| Actions                | 2                                             |
| Affaires               | 3                                             |
| Système `Par défault`  | 10                                            |

#### Ajouter un Onglet
Cliquez sur le bouton `+ Onglet` situé dans la barre supérieure du FormDesigner ![screenshot](images/image13.png).

Une fenêtre de configuration apparaîtra. Entrez le nom de votre nouvel onglet. Par exemple, vous pouvez nommer cet onglet `Actions`.

![screenshot](images/image14.png)

#### Actualisez le FormDesigner
Lorsque vous avez terminé la création des onglets, cliquez sur le bouton ![capture](images/image10.png) pour actualiser le `FormDesigner` et voir les modifications appliquées.

![screenshot](images/image15.png)

### Création des champs de type Vue

Pour créer une vue liée dans une fiche, rendez vous sur dans votre onglet `Actions` et  suivez les étapes ci-dessous. Ces instructions vous guideront pour insérer une vue de la table souhaitée dans le FormDesigner de votre fiche compte et créer une nouvelle vue (Vous devez créer une nouvelle table nommé **actions**).

![screenshot](images/image16.png)

#### Étape 1 : Créer une Nouvelle Vue

1. Accédez à la section des vues de votre application.
   > Sur votre vue par défaut de la table **action** cliquez sur le menu des vues  ![screenshot](images/image17.jpg).
2. Créez une nouvelle vue pour la table **Actions**. Nommons cette vue `LinkCompteActions`.
   > ![screenshot](images/image18.jpg)
3. Configurez la vue selon vos besoins (colonnes, filtres, etc.).
   > Voici les colonnes (Les colonnes sont des champs disponibles sur la table) que de notre vue `LinkCompteActions` aura besoin. 

   > ![screenshot](images/image19.jpg)
   
   > Pour le filtre de votre vue, 

4. Sauvegardez la vue.

#### Étape 2 : Choisir une Vue

1. Accédez à votre FormDesigner pour la fiche `Compte`.
2. Cliquez sur le bouton **+** pour ajouter un nouveau champ.

#### Étape 3 : Configurer le Champ

1. Dans le formulaire d'ajout de champ, choisissez le type **Vue**.

2. Sélectionnez la table à partir de laquelle vous souhaitez insérer la vue. Utilisez le champ de recherche pour trouver et sélectionner la table appropriée.

3. Entrez le nom de la vue que vous avez créée. Suivez la convention de nommage `LinkCompteActions`.


#### Étape 4 : Insérer la Vue dans le FormDesigner

1. Revenez au FormDesigner de la fiche "Compte".
2. Dans le champ de configuration du type **Vue**, entrez le nom de la vue `LinkCompteActions`.

   ![Création d'une Vue](file-eXM9qTAEN9dtB4UDTSorxaXY)

3. Remplissez les autres champs nécessaires, tels que la section, la colonne, et l'ordre du champ.
4. Configurez les options avancées comme **Masquer**, **Obligatoire**, **Lecture seule**, **Audit Trail**, etc., selon vos besoins.

#### Étape 5 : Sauvegarder et Actualiser

1. Une fois que vous avez configuré le champ, cliquez sur **Enregistrer** pour sauvegarder les modifications.
2. Cliquez sur **Actualiser** pour appliquer les modifications et voir la vue liée dans votre fiche "Compte".
