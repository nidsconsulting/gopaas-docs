# 📆 Synchronisation de Google Agenda avec GoPaaS

Cette documentation explique comment connecter et synchroniser Google Agenda avec la plateforme GoPaaS afin d'automatiser la gestion des événements, des rendez-vous ou toute autre donnée liée au calendrier.

## Récupération de l'ID client et du Code secret du client

Accéder à l'URL suivante : [Google Cloud Console](https://console.cloud.google.com/)

Cliquer sur **identifiants**.

![Menu de droite (Google)](images/1.png)

Cliquer sur le bouton **Configurer l'écran de consentement**.

![Configurer l'écran de consentement (Google)](images/consentement.png)

Renseigner le nom de votre application ainsi qu'une adresse e-mail d'assistance utilisateur.

![Informations sur l'application (Google)](images/2.png)

Sélectionner **Externe** pour la partie concernant la cible.

![Cible (Google)](images/3.png)

Renseigner votre adresse e-mail.

![Coordonnées (Google)](images/4.png)

Accepter les conditions et cliquer sur le bouton **CRÉER**.

![Conditions (Google)](images/5.png)

Maintenant que la configuration de l'écran de consentement est terminée nous allons créer un **ID clients OAuth 2.0**.

Accéder à l'onglet **Clients** dans le menu de gauche et cliquer sur **CRÉER UN CLIENT**.

![Onglet Clients (Google)](images/6.png)

Renseigner les informations correspondantes :

- **Type d'application** : Application Web.
- **Nom** : Nom du client OAuth 2.0.
- **URI de redirection autorisés** : [adresse de votre application]/webservice/google-sync/getAccessToken.php.

Une fois les informations renseignées, cliquer sur le bouton **CRÉER**.

![Créer un ID client OAuth (Google)](images/7.png)

Récupérer l'**ID client** et le **Code secret du client** nécessaire à la configuration du Google Sync dans GoPaaS.

![Client OAuth créé (Google)](images/8.png)

## Récupération de l'ID de l'agenda Google

Accéder à Google Agenda puis cliquer sur le bouton **+** à côté de la section **Autres agendas** et sélectionner **Créer un agenda**.

![Bouton + Autres agendas (Google)](images/9.png)

Renseigner le nom de votre agenda et cliquer sur le bouton **Créer l'agenda**.

![Créer un agenda (Google)](images/10.png)

Cliquer sur le bouton **Configurer** de la pop-up apparue en bas de page à la fin de la création de l'agenda.

![Pop-up Configurer (Google)](images/11.png)

Récupérer l'**ID de l'agenda** en accédant à la section **Intégrer l'agenda**.

![Intégrer l'agenda (Google)](images/12.png)

## Configuration Google Sync dans l'application GoPaaS

Maintenant que nous avons toutes les informations nécessaires nous pouvons procéder à la configuration dans GoPaaS.

Créer le champ **Event ID** dans la table **Action**.

![Champ Event ID (GoPaaS)](images/13.png)

Créer une vue **Tableau** de la table **Action** nommée **Google Agenda Synchronisation** avec les colonnes suivantes :

- Objet
- Heure début
- Heure fin
- Date début
- Date fin
- Event ID
- Détails
- Nom
- Type
- Statut
- Utilisateur

Dans la section **Conditions** des propriétés de la vue Ajouter la condition utilisateur égal à (-me-).

![Condition de la vue (GoPaaS)](images/15.png)

Enregistrer la vue.

Accéder aux paramètres de votre profil en haut à droite en cliquant sur **Mon profil**.

![Mon profil (GoPaaS)](images/16.png)

Accéder à l'onglet **Autres applications** et cliquer sur le bouton **Ajouter** dans la section **Google Sync**.

![Vue Action (GoPaaS)](images/17.png)

Renseigner les valeurs suivantes dans les différents champs :

- **ID client** : L'ID client récupéré auparavant
- **Code secret du client** : Le code secret duc lient récupéré auparavant
- **Type** : Calendar
- **Calendar Name** : L'ID de l'agenda récupéré auparavant
- **User calendar field** : Le champ utilisateur de la vue Google Agenda Synchronisation
- **Tablename** : action
- **Vue** : Vue Google Agenda Synchronisation

Pour renseigner le champ **Map** cliquer sur le bouton **Paramétrage Synchronisation** et renseigner les champs correspondants dans le formulaire et cliquer sur **Sync**.

![Formulaire paramétrage configuration (GoPaaS)](images/18.png)

Enregistrer votre configuration Google Sync ainsi que votre profil.

## Conclusion

La configuration du Google Sync est terminée, afin de pouvoir l'utiliser, l'utilisateur doit se déconnecter de l'application et se reconnecter puis cliquer sur le bouton google en haut à droite afin de synchroniser son agenda. 

![Bouton Google (GoPaaS)](images/19.png)

Une fois la synchronisation réalisée, ouvrer la vue créée auparavant (Google Agenda Synchronisation) pour accéder aux informations de l'agenda Google synchronisé.