# Dashboard

## Création du dashboard Accueil

> TODO: revoir introduction

Le dashboard centralise les informations des tables Compte, Contact, Affaire et Action sous forme de widgets. Cela permet une visualisation simplifiée et un accès rapide aux données essentielles de l'application. Lors de l'ouverture d'un widget, la vue par défaut de la table correspondante est affichée.

- Cliquer dans le menu **Références** > **Paramètre** > **Dashboard** pour ouvrir la vue des dashboards.

![screenshot](images/image1.png)

- Cliquer sur le bouton `Ajouter`.

| Champs | Valeur |
|-----------|-----------|
| Intitulé   | Nom du dashboard  |
| Permission   | Liste des groupes ayant accès au dashboard  |
| Regroupement  | Regroupe le dashboard dans un dossier du menu `Dashboard`  |
| Afficher au démarrage   | Affiche le dashboard lors de la connexion de l'utilisateur (fonctionne avec le `Pour le(s) groupe(s)`)  |
| Pour le(s) groupe(s)   | Liste des groupes pour lesquelles le dashboard s'affichera au démarrage  |
| Afficher bouton Fullscreen  | Permet d'afficher un bouton pour passer le dashboard en plein écran  |


Pour sélectionner un groupe dans les permissions, cliquer sur l'icone <img src="images/image3.png" width="28px" alt="capture">.
Cocher le groupe qui aura acès au dashboard puis cliquer sur la flèche <img src="images/image4.png" width="28px" alt="capture">.

![screenshot](images/image5.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.

![screenshot](images/image2.png)

- Cliquer sur le bouton **Appliquer** pour enregistrer le Dashboard et pouvoir créer une ligne de dashboard.
- Cliquer sur le bouton **Ajouter** de la section `Détails` pour ajouter une ligne de dashboard.

| Champs | Valeur |
|-----------|-----------|
| Dashboard   | Dashboard auquel est relié la ligne de dashboard  |
| Intitulé   | Nom de la ligne de dashboard  |
| Ordre  | Ordre d'affichage de la ligne  |
| Options avancées   | Affiche l'onglet `HTML` qui permet de personnaliser plus en détail la ligne de dashboard  |
| Description  | Description de la ligne de dashboard  |
| View  | Permet de sélectionner une vue de type **Graphique** qui apparaitra dans le dashboard  |
| Largeur | Permet de sélectionner la largeur que prendra le **Widget** dans la ligne de dashboard |

- Cliquer sur l'icone <img src="images/image3.png" width="28px" alt="capture"> du champ **view1**.
- Chercher la table **compte** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton <img src="images/image6.png" width="28px" alt="capture">.
  
![screenshot](images/image7.png)

- Cliquer sur l'icone <img src="images/image3.png" width="28px" alt="capture"> du champ **view2**.
- Chercher la table **contact** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton <img src="images/image6.png" width="28px" alt="capture">.
  
![screenshot](images/image8.png)

- Cliquer sur l'icone <img src="images/image3.png" width="28px" alt="capture"> du champ **view3**.
- Chercher la table **affaire** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton <img src="images/image6.png" width="28px" alt="capture">.
  
![screenshot](images/image9.png)

- Cliquer sur l'icone <img src="images/image3.png" width="28px" alt="capture"> du champ **view4**.
- Chercher la table **action** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton <img src="images/image6.png" width="28px" alt="capture">.

![screenshot](images/image17.png)


- Sélectionner une largeur 3 pour chaque Icone.

![screenshot](images/image10.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications de la ligne.

![screenshot](images/image11.png)

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications du dashboard.
- Actualiser l'application.

Pour modifier les icones des widgets, cliquer sur <img src="images/image12.png" width="28px" alt="capture">.

![screenshot](images/image13.png)

- Cliquer sur l'onglet **Graphique** puis modifier le champ **Icône du widget** par une icone [Font Awesome](https://fontawesome.com/).

![screenshot](images/image14.png)

Icone **Compte** : `fas fa-building fa-5x`

Icone **Contact** : `fas fa-address-card fa-5x`

Icone **Affaire** : `fas fa-suitcase fa-5x`

Icone **Action** : `fas fa-file-signature fa-5x`

- Cliquer sur le bouton **Enregistrer** pour appliquer les modifications de la vue.

- Actualiser le dahsboard en cliquant sur le bouton <img src="images/image15.png" width="28px" alt="capture"> pour voir le résultat.

![screenshot](images/image16.png)