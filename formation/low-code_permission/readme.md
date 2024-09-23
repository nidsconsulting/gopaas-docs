
# Comment gérer des permissions dans GoPaaS ?

## 1. Utilisation des permissions sans la notion de groupe.

### Description

La gestion des permissions permet de définir et de contrôler les droits d'accès en fonction des attributs des utilisateurs. Cette approche assure que les utilisateurs ont accès uniquement aux informations spécifiques à leur rôle, ce qui améliore la sécurité et la pertinence des données traitées.

### Configuration de permissions "Standard" sur la table compte

Nous allons mettre en place des permissions sur la table compte permettant la création, la lecture et la modification d'une fiche, tout en interdisant la supression d'une fiche.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Groupes`.

2. **Créer le groupe :**
   - Cliquez sur `Ajouter`.
   - Remplissez le champ **Intitulé** avec le nom du groupe : **COMMERCIAL**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionnez le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cochez la case si le groupe peut y accéder.
        - **Dashboard** : Cochez la case si le groupe peut y accéder.
        - **Référence** : Cochez la case si le groupe peut y accéder.
        - **Ajout rapide** : Cochez la case si le groupe peut y accéder.

   - Cliquez sur `Enregistrer`.

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquez sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associez le groupe **COMMERCIAL**.
   - Enregistrez la fiche utilisateur.
   - Assurez-vous d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Création des permissions pour la fiche compte

1. **Accéder au menu Permissions :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquez sur `Ajouter`.
   - Remplissez les champs comme suit :

| **Champ**                 | **Valeur**                        |
|---------------------------|-----------------------------------|
| **Table**                 | compte                            |
| **Type**                  |                                   |
| **Champ à utiliser**      | creation_par                      |
| **Partage**               |                                   |
| **Création**              | ADMIN,COMMERCIAL                  |
| **Lecture**               | ADMIN,COMMERCIAL                  |
| **Modification**          | ADMIN,COMMERCIAL                  |
| **Suppression**           | ADMIN                             |
| **Import**                | ADMIN                             |
| **Export**                | ADMIN                             |
| **Modification en masse** | ADMIN                             |

3. **Enregistrer les permissions :**
   - Cliquez sur `Enregistrer`.

### Étape 4 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Déconnectez-vous de votre session.
   - Demandez aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

<img src="./images/EXEMPLE_VUE_RESULTAT_ADMIN.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!-- ![screenshot](images/EXEMPLE_VUE_RESULTAT_ADMIN.png)-->

 ---

## 2. Utilisation des permissions "Sélective" sur une table

Nous allons mettre en place des permissions sur la table contact permettant la création, la lecture et la modification d'une fiche uniquement par le commercial l'ayant créé, tout en interdisant la supression d'une fiche pour tout commercial.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Groupes`.

2. **Créer le groupe :**
   - Cliquez sur `Ajouter`.
   - Remplissez le champ **Intitulé** avec le nom du groupe : **COMMERCIAL**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionnez le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cochez la case si le groupe peut y accéder.
        - **Dashboard** : Cochez la case si le groupe peut y accéder.
        - **Référence** : Cochez la case si le groupe peut y accéder.
        - **Ajout rapide** : Cochez la case si le groupe peut y accéder.

   - Cliquez sur `Enregistrer`.

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquez sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associez le groupe **COMMERCIAL**.
   - Enregistrez la fiche utilisateur.
   - Assurez-vous d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Création des permissions pour la fiche contact

1. **Accéder au menu Permissions :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquez sur `Ajouter`.
   - Remplissez les champs comme suit :

| **Champ**                 | **Valeur**                        |
|---------------------------|-----------------------------------|
| **Table**                 | contact                           |
| **Type**                  | User                              |
| **Champ à utiliser**      | creation_par                      |
| **Partage**               | Privé                             |
| **Création**              | ADMIN,COMMERCIAL                  |
| **Lecture sélective**     | ADMIN,COMMERCIAL                  |
| **Modification sélective**| ADMIN,COMMERCIAL                  |
| **Suppression**           |                                   |
| **Import**                | ADMIN                             |
| **Export**                | ADMIN                             |
| **Modification en masse** | ADMIN                             |

3. **Enregistrer les permissions :**
   - Cliquez sur `Enregistrer`.

### Étape 4 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Déconnectez-vous de votre session.
   - Demandez aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

- Depuis une session **COMMERCIAL** :

<img src="./images/EXEMPLE_VUE_CONTACT_RESULTAT_COMMERCIAL.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!-- ![screenshot](images/EXEMPLE_VUE_CONTACT_RESULTAT_COMMERCIAL.png)-->

### Configuration de permissions dans une vue

<img src="./images/EXEMPLE_PERMISSION_VUE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!-- ![screenshot](images/EXEMPLE_PERMISSION_VUE.png)-->

### Configuration de permissions dans un dashboard

<img src="./images/EXEMPLE_PERMISSION_DASH.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!-- ![screenshot](images/EXEMPLE_PERMISSION_DASH.png)-->

### Configuration de permissions sur un champ

<img src="./images/EXEMPLE_PERMISSION_CHAMP.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images/EXEMPLE_PERMISSION_CHAMP.png)-->
___

## 3. Utilisation des permissions avec la notion de groupe.

### Description

La gestion des permissions permet de définir et de contrôler les droits d'accès en fonction des attributs des utilisateurs. Cette approche assure que les utilisateurs ont accès uniquement aux informations spécifiques à leur rôle, ce qui améliore la sécurité et la pertinence des données traitées.

### Exemple de Configuration des Permissions sur la table compte

Vous disposez de commerciaux dont les clients sont répartis par région, et vous souhaitez que chaque commercial puisse uniquement consulter et modifier les fiches comptes situés dans sa propre région.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Groupes`.

2. **Créer les groupes :**
   - Cliquez sur `Ajouter`.
   - Remplissez le champ **Intitulé** avec les noms des groupes : **EST**, **OUEST**, **NORD**, **SUD**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionnez le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cochez la case si le groupe peut y accéder.
        - **Dashboard** : Cochez la case si le groupe peut y accéder.
        - **Référence** : Cochez la case si le groupe peut y accéder.
        - **Ajout rapide** : Cochez la case si le groupe peut y accéder.

   - Cliquez sur `Enregistrer`.

   - Répétez cette opération pour les quatre groupes.

   ![screenshot](images3/VUE_GROUPE_DISPONIBLE.png)

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquez sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associez le groupe approprié (NORD, SUD, EST, OUEST).

   <img src="./images3/VUE_UTILISATEUR_GROUPE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images3/VUE_UTILISATEUR_GROUPE.png)-->

   - Enregistrez la fiche utilisateur.
   - Assurez-vous d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Modification des fiches comptes

1. **Accéder aux comptes :**
   - Allez dans **Applications** (menu de gauche), puis dans le sous-menu **CRM** puis cliquer sur `Comptes`.
   - Double-cliquez sur chaque fiche compte à modifier (au minimum quatre fiches comptes).

2. **Associer les permissions :**
   - Sur les fiches **Comptes**, vous devez posséder un champ, permettant de gérer les permissions, dans notre cas nous le nomerons **Permission** et pointera vers la table **Groupe** et de type multi-connexion.
   - Renseignez le champ **Permission** (multi-connexion), en sélectionnant le groupe approprié (NORD, EST, OUEST, SUD).

   <img src="./images3/EXEMPLE_COMPTE_SELECTION_PERMISSION.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images3/EXEMPLE_COMPTE_SELECTION_PERMISSION.png)-->

   - Enregistrez chaque fiche compte.

### Étape 4 : Création des permissions pour la fiche compte

1. **Accéder au menu Permissions :**
   - Allez dans **Admin** (menu de gauche).
   - Cliquez sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquez sur `Ajouter`.
   - Remplissez les champs comme suit :

| **Champ**             | **Valeur**                        |
|-----------------------|-----------------------------------|
| **Table**             | compte                            |
| **Type**              | Group                             |
| **Champ à utiliser**  | permission                        |
| **Partage**           | Public                            |
| **Création**          | SUD, ADMIN, NORD, EST, OUEST      |
| **Lecture**           | ADMIN                             |
| **Lecture sélective** | SUD, ADMIN, NORD, EST, OUEST      |
| **Modification sélective** | SUD, ADMIN, NORD, EST, OUEST |
| **Suppression** | ADMIN                         |
| **Import**            | SUD, ADMIN, NORD, EST, OUEST      |
| **Export**            | ADMIN                             |
| **Modification en masse** | SUD, ADMIN, NORD, EST, OUEST  |

   <img src="./images3/VUE_PERMISSION_COMPTE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images3/VUE_PERMISSION_COMPTE.png)-->

3. **Enregistrer les permissions :**
   - Cliquez sur `Enregistrer`.

### Étape 5 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Déconnectez-vous de votre session.
   - Demandez aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

- Depuis une session région **SUD** :

   <img src="./images3/EXEMPLE_VUE_RESULTAT_USER.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images3/EXEMPLE_VUE_RESULTAT_USER.png)-->

- Depuis une session **GESTIONNAIRE** :

   <img src="./images3/EXEMPLE_VUE_RESULTAT_ADMIN.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>
      
<!--![screenshot](images3/EXEMPLE_VUE_RESULTAT_ADMIN.png)-->

### Conclusion

La gestion des permissions basée sur la région permet une distribution précise et sécurisée des droits d'accès. En adaptant les permissions en fonction des régions, vous assurez que les informations sont accessibles et modifiables uniquement par les groupes concernés, ce qui optimise la sécurité et la pertinence des données traitées.