
# Comment gérer des permissions dans GoPaaS ?

## 1. Utilisation des permissions sans la notion de groupe.

### Description

La gestion des permissions permet de définir et de contrôler les droits d'accès en fonction des attributs des utilisateurs. Cette approche assure que les utilisateurs ont accès uniquement aux informations spécifiques à leur rôle, ce qui améliore la sécurité et la pertinence des données traitées.

### Configuration de permissions "Standard" sur la table compte

Nous allons mettre en place des permissions sur la table compte permettant la création, la lecture et la modification d'une fiche, tout en interdisant la supression d'une fiche.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Groupes`.

2. **Créer le groupe :**
   - Cliquer sur `Ajouter`.
   - Remplisser le champ **Intitulé** avec le nom du groupe : **COMMERCIAL**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionner le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cocher la case si le groupe peut y accéder.
        - **Dashboard** : Cocher la case si le groupe peut y accéder.
        - **Référence** : Cocher la case si le groupe peut y accéder.
        - **Ajout rapide** : Cocher la case si le groupe peut y accéder.

   - Cliquer sur `Enregistrer`.

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquer sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associer le groupe **COMMERCIAL**.
   - Enregistrer la fiche utilisateur.
   - s'assurer d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Création des permissions pour la fiche compte

1. **Accéder au menu Permissions :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquer sur `Ajouter`.
   - Remplisser les champs comme suit :

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
   - Cliquer sur `Enregistrer`.

### Étape 4 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Se déconnecter de la session.
   - Demander aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

<img src="./images/EXEMPLE_VUE_RESULTAT_ADMIN.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

 ---

## 2. Utilisation des permissions "Sélective" sur une table

Nous allons mettre en place des permissions sur la table contact permettant la création, la lecture et la modification d'une fiche uniquement par le commercial l'ayant créé, tout en interdisant la supression d'une fiche pour tout commercial.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Groupes`.

2. **Créer le groupe :**
   - Cliquer sur `Ajouter`.
   - Remplisser le champ **Intitulé** avec le nom du groupe : **COMMERCIAL**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionner le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cocher la case si le groupe peut y accéder.
        - **Dashboard** : Cocher la case si le groupe peut y accéder.
        - **Référence** : Cocher la case si le groupe peut y accéder.
        - **Ajout rapide** : Cocher la case si le groupe peut y accéder.

   - Cliquer sur `Enregistrer`.

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquer sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associer le groupe **COMMERCIAL**.
   - Enregistrer la fiche utilisateur.
   - S'assurer d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Création des permissions pour la fiche contact

1. **Accéder au menu Permissions :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquer sur `Ajouter`.
   - Remplisser les champs comme suit :

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
   - Cliquer sur `Enregistrer`.

### Étape 4 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Se déconnecter de la session.
   - Demander aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

- Depuis une session **COMMERCIAL** :

<img src="./images/EXEMPLE_VUE_CONTACT_RESULTAT_COMMERCIAL.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

### Configuration de permissions dans une vue

<img src="./images/EXEMPLE_PERMISSION_VUE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

### Configuration de permissions dans un dashboard

<img src="./images/EXEMPLE_PERMISSION_DASH.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

### Configuration de permissions sur un champ

<img src="./images/EXEMPLE_PERMISSION_CHAMP.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

___

## 3. Utilisation des permissions avec la notion de groupe.

### Description

La gestion des permissions permet de définir et de contrôler les droits d'accès en fonction des attributs des utilisateurs. Cette approche assure que les utilisateurs ont accès uniquement aux informations spécifiques à leur rôle, ce qui améliore la sécurité et la pertinence des données traitées.

### Exemple de Configuration des Permissions sur la table compte

Vous disposez de commerciaux dont les clients sont répartis par région, et vous souhaitez que chaque commercial puisse uniquement consulter et modifier les fiches comptes situés dans sa propre région.

### Étape 1 : Création des groupes

1. **Accéder au menu Admin :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Groupes`.

2. **Créer les groupes :**
   - Cliquer sur `Ajouter`.
   - Remplisser le champ **Intitulé** avec les noms des groupes : **EST**, **OUEST**, **NORD**, **SUD**.
   - Dans la section **Permissions** :

        - **Module(s)** : Sélectionner le(s) module(s) disponible(s) pour le groupe, par exemple : CRM.
        - **Accès rapide** : Cocher la case si le groupe peut y accéder.
        - **Dashboard** : Cocher la case si le groupe peut y accéder.
        - **Référence** : Cocher la case si le groupe peut y accéder.
        - **Ajout rapide** : Cocher la case si le groupe peut y accéder.

   - Cliquer sur `Enregistrer`.

   - Répéter cette opération pour les quatre groupes.

   ![screenshot](images3/VUE_GROUPE_DISPONIBLE.png)

### Étape 2 : Attribution des groupes aux utilisateurs

1. **Accéder au menu Utilisateur :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Utilisateur`.

2. **Associer les utilisateurs aux groupes :**
   - Pour chaque utilisateur concerné, double-cliquer sur l'utilisateur.
   - Dans la section **Groupe** (multi-connexion), associer le groupe approprié (NORD, SUD, EST, OUEST).

   <img src="./images3/VUE_UTILISATEUR_GROUPE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

   - Enregistrer la fiche utilisateur.
   - S'assurer d'avoir au moins quatre utilisateurs, chacun associé à un groupe différent.

### Étape 3 : Modification des fiches comptes

1. **Accéder aux comptes :**
   - Aller dans **Applications** (menu de gauche), puis dans le sous-menu **CRM** puis cliquer sur `Comptes`.
   - Double-cliquer sur chaque fiche compte à modifier (au minimum quatre fiches comptes).

2. **Associer les permissions :**
   - Sur les fiches **Comptes**, un champ doit être présent, permettant de gérer les permissions, dans notre cas nous le nomerons **Permission** et pointera vers la table **Groupe** et de type multi-connexion.
   - Renseigner le champ **Permission** (multi-connexion), et sélectionner le groupe approprié (NORD, EST, OUEST, SUD).

   <img src="./images3/EXEMPLE_COMPTE_SELECTION_PERMISSION.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

   - Enregistrer chaque fiche compte.

### Étape 4 : Création des permissions pour la fiche compte

1. **Accéder au menu Permissions :**
   - Aller dans **Admin** (menu de gauche).
   - Cliquer sur `Permissions`.

2. **Ajouter les permissions :**
   - Cliquer sur `Ajouter`.
   - Remplisser les champs comme suit :

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
| **Suppression**       | ADMIN                             |
| **Import**            | SUD, ADMIN, NORD, EST, OUEST      |
| **Export**            | ADMIN                             |
| **Modification en masse** | SUD, ADMIN, NORD, EST, OUEST  |

   <img src="./images3/VUE_PERMISSION_COMPTE.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

3. **Enregistrer les permissions :**
   - Cliquer sur `Enregistrer`.

### Étape 5 : Se déconnecter et se reconnecter

1. **Actualisation des permissions :**
   - Se déconnecter de la session.
   - Demander aux utilisateurs concernés de se déconnecter et de se reconnecter pour que les nouvelles permissions soient prises en compte.

### Résultat

- Depuis une session région **SUD** :

   <img src="./images3/EXEMPLE_VUE_RESULTAT_USER.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

- Depuis une session **GESTIONNAIRE** :

   <img src="./images3/EXEMPLE_VUE_RESULTAT_ADMIN.png" width="90%" alt="Hearder Top" style="border-radius: 5px;"/>

### Conclusion

La gestion des permissions basée sur la région permet une distribution précise et sécurisée des droits d'accès. En adaptant les permissions selon les régions, il est possible d'assurer que les informations sont accessibles et modifiables uniquement par les groupes concernés, optimisant ainsi la sécurité et la pertinence des données traitées.