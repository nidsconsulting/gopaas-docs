# RoadMap GoPaaS

Liste des améliorations de GoPaaS qui arriveront dans les prochaines version.

## Vue - Multiview

Une **Multiview** permet de diviser l'écran en deux parties avec une vue principale et des vues secondaires dans des onglets.
* Dans la première partie on a la possibilité de sélectionner une autre vue principale de la même table depuis le menu des vues

* Les vues secondaires sont filtrées sur la fiche active sélectionnée avec le mot-clé (-TrigItemName-) ce qui permet d'afficher les fiches liées à la fiche sélectionnée de la vue principale.

Pour paramétrer une **Multiview** :
* Ajouter une nouvelle ou dupliquer une vue existante pour une table.
* Sélectionner le type de vue **"Multiview"**
* Dans l'onglet "Vue secondaire(s)" sélectionner les vues secondaire à afficher puis cliquer sur le bouton ** > ** pour les ajouter à la liste des vues secondaires. 
> La liste des vues qui s'affiche est filtrée sur les vue dont il existe une condition qui connecte la vue à la table principale.
* Ouvrir les vues secondaires pour les paramétrer en changeant
   * le nom de l'onglet
   * La couleur de l'onglet
   * L'ordre d'affichage de l'onglet
   * En ajoutant une icône font-awesome sur les onglets

## Vue - Volet de modification

Une nouvelle option permet d'afficher un fiche dans une vue en mode modification. Au clic sur une fiche de la vue, une fiche s'ouvre à droite de la vue pour pouvoir la modifier.

### Modification

La fiche peut être modifiée et tous les scripts JS initiales sont exécutée au chargement de la fiche. Les boutons "Enregister" et "Appliquer" permettent d'enregistrer les modifications de la fiche.
Le bouton "Enregistrer" ferme quant à lui la fiche en mode modification.

### Paramétrage
Pour afficher le volet de modification dans une vue: 
* cocher la case à cocher **"Afficher volet de modification"**.
* Le champ **"Taille de la fenêtre"** apparaît pour définir la largeur de la vue en pourcentage allant de 10% à 80%.

## Application mobile GoPaaS

GoPaaS mobile est une application mobile embarquée disponible sur les stores. 
Cette appication est développé en **ReactJS native**.
Elle permet d'ouvrir les applications GoPaaS en mode connecté en renseignant l'URL de l'application, le login et le mot de passe de l'utilisateur.

### Page de connexion
Sur la page de connexion, renseigner :
* L'URL de l'application GoPaaS
* Login
* Password

A la connexion toutes la configuration de l'application est télécharger en local sur le mobile.

> Si une modification de structure a lieu dans l'application principale, il faudra se déconnecter pour télécharger la nouvelle version de l'application

### Environnement
* Dashboard
  * Tous les Dashboards "Affichage au démarrage"

* Les vues
   * Moteur de recherche "Plain text"
   * Colonnes standard sous forme d'étiquette

* Les fiches
   * Tous les types de champs sont disponibles
> Renseigner les types et mettre leur caratéristique spécifique au Mobile
> Ordre des onglets à vérifier

* Barre de menu
   * Bouton **Enregistrer** et bouton **Retour**

### ScriptJS
* Comment faire avec les scriptJS existant ?
* Peut on es interprété en ReactJS native ?

## Mobile v2
Une Nouvelle interface mobile responsive pour une meilleure expérience utlisateur.
Dans cette version quelques modifications d'ergonomie: 
* Les onglets de navigation disparaissent pour plus de fluidité.
* Les onglets dans les fiches sont maintenant sous forme d'icône en base de la fiche et reste fixe tout au long de la navigation sur la fiche
* La barre de navigation et la barre d'outils reste fixe durant la navigation
*  Dans les vues les informations dans le pied page sont simplifiées pour plus de lisibilité

### Paramétrage
Pour passer à la version Mobile v2, il faut cocher la case à cocher **"Mobile v2"** dans la fiche de configuration GoPaaS

## Google SYNC
### Calendar
Permet de synchroniser les fiches agenda Google Calendar avec GoPaaS.

#### Paramétrage
Dans la fiche **Configuration**  GoPaaS, définisser la table pour synchronisation de l'agenda et les champs nécessaires.
La synchronisation est bi-directionnelle, une fiche créée dans Google Calendar sera ajoutée à GoPaaS et une fiche Agenda créée dans GoPaaS sera ajoutée dans Google Calendar. De la même manière une fiche modifiée sur un système sera également modifiée dans l'autre système.

#### Fonctionnement
* Un identifiant unique "UUID" est généré à chaque création de fiche dans GoPaaS
* Une table de paramétrage enregistre toutes les modifications apportées dans une fiche Agenda GoPaaS que ce soit en création ou en modification 
> Peut on utiliser la fiche "History" ? ou Peut on utiliser la fiche "SyncLog" ?

* Une fiche de paramétrage par Utilisateur avec les accès à Google Calendar 
> Peut on mettre toutes les informations de synchronisation dans cette fiche ?
* Une **RULES** parcours toutes les fiches de paramétrage Google Calendar pour synchoniser les données.
   * Depuis Google Calendar, on prend toutes les fiches créées ou modifiées sur Google Calendar et on les envoi à GoPaaS
   * Depuis GoPaaS, on prend toutes les fiches Agenda créées ou modifiées sur GoPaaS et on les envoi à Google Calendar
   
### Contact
Permet de synchroniser les fiches contact Google Contact avec GoPaaS.
> Voir si vraiment nécessaire ?














