# Dashboard

## Création du dashboard Accueil

Le dashboard centralise les informations des tables Compte, Contact, Affaire et Action sous forme de widgets.

Cela permet une visualisation simplifiée et un accès rapide aux données essentielles de l'application. Lors de l'ouverture d'un widget, la vue par défaut de la table correspondante est affichée.

1. Cliquer dans le menu **Références** > **Paramètre** > **Dashboard** pour ouvrir la vue des dashboards.
2. Cliquer sur le bouton `Ajouter`.

![screenshot](images/image1.png)

Vous accéderez à l'interface de configuration du Dashboard.

![1724227885621](images/image0.png)

| Champs                               | Valeur                                                                                                   |
| ------------------------------------ | -------------------------------------------------------------------------------------------------------- |
| **Intitulé**                  | Nom du dashboard                                                                                         |
| **Permission**                 | Liste des groupes ayant accès au dashboard                                                              |
| **Regroupement**               | Regroupe le dashboard dans un dossier du menu `Dashboard`                                              |
| **Afficher au démarrage**     | Affiche le dashboard lors de la connexion de l'utilisateur (fonctionne avec le `Pour le(s) groupe(s)`) |
| **Pour le(s) groupe(s)**       | Liste des groupes pour lesquelles le dashboard s'affichera au démarrage                                 |
| **Afficher bouton Fullscreen** | Permet d'afficher un bouton pour passer le dashboard en plein écran                                     |

Pour sélectionner un groupe dans les permissions, cliquer sur l'icone ![screenshot](images/image3.png).
Cocher le groupe qui aura acès au dashboard puis cliquer sur la flèche ![screenshot](images/image4.png).

![screenshot](images/image5.png)

3. Cliquer sur le bouton **Enregistrer** pour appliquer les modifications.
4. Cliquer sur le bouton **Appliquer** pour enregistrer le Dashboard et pouvoir créer une ligne de dashboard.

![screenshot](images/image30.png)

5. Cliquer sur le bouton **Ajouter** de la section `Détails` pour ajouter une ligne de dashboard.

![screenshot](images/image2.png)

6. L'interface Dashboard Line, vous permet d'ajouter de nouvelles lignes sur le Dashboard et d'y insérer des widgets, graphiques, et autres éléments visuels.

![screenshot](images/image18.png)

| Champs                      | Valeur                                                                                       |
| --------------------------- | -------------------------------------------------------------------------------------------- |
| **Dashboard**         | Dashboard auquel est relié la ligne de dashboard                                            |
| **Intitulé**         | Nom de la ligne de dashboard                                                                 |
| **Ordre**             | Ordre d'affichage de la ligne                                                                |
| **Options avancées** | Affiche l'onglet `HTML` qui permet de personnaliser plus en détail la ligne de dashboard  |
| **Description**       | Description de la ligne de dashboard                                                         |
| **View**              | Permet de sélectionner une vue de type**Graphique** qui apparaitra dans le dashboard  |
| **Largeur**           | Permet de sélectionner la largeur que prendra le**Widget** dans la ligne de dashboard |

7. Cliquer sur l'icone ![screenshot](images/image3.png) du champ **view1**.
8. Chercher la table **compte** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton ![screenshot](images/image6.png).

![screenshot](images/image7.png)

9. Cliquer sur l'icone ![screenshot](images/image3.png) du champ **view2**.
10. Chercher la table **contact** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton ![screenshot](images/image6.png).

![screenshot](images/image8.png)

11. Cliquer sur l'icone ![screenshot](images/image3.png) du champ **view3**.
12. Chercher la table **affaire** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton ![screenshot](images/image6.png).

![screenshot](images/image9.png)

13. Cliquer sur l'icone ![screenshot](images/image3.png) du champ **view4**.
14. Chercher la table **action** puis sélectionner la vue **Icone** de type **Graphique** en cliquant sur le bouton ![screenshot](images/image6.png).

![screenshot](images/image17.png)

15. Sélectionner une largeur 3 pour chaque Icone.

![screenshot](images/image10.png)

16. Cliquer sur le bouton **Enregistrer** pour appliquer les modifications de la ligne.

![screenshot](images/image11.png)

17. Cliquer sur le bouton **Enregistrer** pour appliquer les modifications du dashboard.
18. Actualiser l'application.

Pour modifier les icones des widgets, cliquer sur  ![screenshot](images/image12.png).

![screenshot](images/image13.png)

19. Cliquer sur l'onglet **Graphique** puis modifier le champ **Icône du widget** par une icone [Font Awesome](https://fontawesome.com/).

![screenshot](images/image14.png)

Icone **Compte** : `fas fa-building fa-5x`

Icone **Contact** : `fas fa-address-card fa-5x`

Icone **Affaire** : `fas fa-suitcase fa-5x`

Icone **Action** : `fas fa-file-signature fa-5x`

20. Cliquer sur le bouton **Enregistrer** pour appliquer les modifications de la vue.
21. Actualiser le dahsboard en cliquant sur le bouton ![screenshot](images/image15.png) pour voir le résultat.

![screenshot](images/image16.png)

# Webreport

## Description

WebReport est un outil graphique qui vous permet d'obtenir une vue d'ensemble claire et détaillée des données sélectionnées, avec des options de calcul avancées pour une analyse approfondie et précise.

## Création d'un Webreport

Pour ajouter un WebReport dans GoPaaS vous devez créer un Dashboard ou utilisé un Dashboard existant.

1. Modifier le dasboard en cliquant sur ![screenshot](images/image12.png)
2. Une fois sur l'interface, ajouter une **nouvelle ligne de Dashboard**.

![screenshot](images/image31.png)

3. Donner un Nom à cette nouvelle ligne plus cliquer sur le bouton **« Appliquer »** pour sauvegarder la fiche sans la fermer.

![screenshot](images/image32.png)

4. Cocher la case **« Options avancées »** pour affiche l’onglet **« Html »** puis l’ouvrir.

![screenshot](images/image33.png)

5. Dans le menu outil, cliquer sur l’option  **« Ajouter un WebReport »**.

![screenshot](images/image34.png)

6. Cette option permet d’insérer dans le champ **« Html »** le script pour appeler le composant WebReport.

![screenshot](images/image35.png)

7. Les paramètres du script insérés devront être modifiés pour appeler une source de données existante ( **vue** ).
8. Rechercher la ligne suivante **« `var viewKey = "A_RENSEIGNER"` »** et remplacer la chaine **« A_RENSEIGNER »** par la **« cle »** de la vue avec la source de données souhaités. Par exemple  **« var viewKey = "Par défaut Affaire" »**.

![screenshot](images/image36.png)

9. **Enregistrer** la ligne de dashboard et ouvrir le Dashboard pour afficher le WebReport avec la configuration par défaut.

![screenshot](images/image37.png)

10. Cliquer sur la **flèche diagonale** en haut à droite du pivot pour modifier le WebReport en ajoutant des champs dans les lignes, colonnes, filtres, et valeurs.

![screenshot](images/image38.png)

![screenshot](images/image39.png)

11. Configurer le WebReport selon les besoins puis cliquer sur le bouton **« Enr. »** pour afficher la nouvelle configuration du WebReport au  **format JSON**.

![screenshot](images/image40.png)

12. Cette configuration devra être **copié** afin de l'insérer dans le champ Html de la ligne de dashboard.

![screenshot](images/image41.png)

13. Ouvrir la ligne de dashboard puis l’onglet Html.

![screenshot](images/image42.png)

![screenshot](images/image43.png)

14. **Coller** pour remplacer la nouvelle configuration au format JSON entre les balises de commentaires ==Début== et ==Fin==.

![screenshot](images/image44.png)

15. Cliquer sur le bouton **« Enregistrer »** pour sauvegarder dans la nouvelle configuration du WebReport.

![screenshot](images/image45.png)

> Dans le champ Html, il est possible de modifier la configuration du WebReport en ajoutant ou modifiant les propriétés des objets  **slice** ,  **options** , **conditions** et  **formats** .
