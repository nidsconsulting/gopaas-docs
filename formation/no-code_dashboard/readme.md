# Dashboard

## Création du dashboard Accueil

Le dashboard centralise les informations des tables Compte, Contact, Affaire et Action sous forme de widgets.

Cela permet une visualisation simplifiée et un accès rapide aux données essentielles de l'application. Lors de l'ouverture d'un widget, la vue par défaut de la table correspondante est affichée.

1. Cliquer dans le menu **Références** > **Paramètre** > **Dashboard** pour ouvrir la vue des dashboards.
2. Cliquer sur le bouton `Ajouter`.

<img src="images/image1.png" width="1100">

<img src="images/image0.png" width="1100">

| Champs                               | Valeur                                                                                                   |
| ------------------------------------ | -------------------------------------------------------------------------------------------------------- |
| **Intitulé**                         | Nom du dashboard                                                                                         |
| **Permission**                       | Liste des groupes ayant accès au dashboard                                                               |
| **Regroupement**                     | Regroupe le dashboard dans un dossier du menu `Dashboard`                                                |
| **Afficher au démarrage**            | Affiche le dashboard lors de la connexion de l'utilisateur (fonctionne avec le `Pour le(s) groupe(s)`)   |
| **Pour le(s) groupe(s)**             | Liste des groupes pour lesquels le dashboard s'affichera au démarrage                                    |
| **Afficher bouton Fullscreen**       | Permet d'afficher un bouton pour passer le dashboard en plein écran                                      |

Pour sélectionner un groupe dans les permissions, cliquer sur l'icone ![screenshot](images/image3.png).

![1724227885621](images/image01.png)

Sélectionner le groupe qui aura accès au dashboard puis cliquer sur la flèche ![screenshot](images/image4.png).

![screenshot](images/image5.png)

3. Cliquer sur le bouton `Enregistrer` pour appliquer les modifications et fermer la fiche.
4. Cliquer sur le bouton `Appliquer` pour enregistrer le Dashboard et pouvoir créer une ligne de dashboard.

![screenshot](images/image30.png)

> ***Remarque :** "Afficher au démarrage", "Pour le(s) groupe(s)" et "Afficher bouton Fullscreen" sont des paramètres optionnels.*

5. Cliquer sur le bouton `Ajouter` de la section `Détails` pour ajouter une ligne de dashboard.

![screenshot](images/image2.png)

6. L'interface Dashboard Line, permet d'ajouter de nouvelles lignes sur le Dashboard et d'y insérer des widgets.

     - Cette fiche permet d'ajouter des lignes sur le dashboard et d'y insérer des vues

        ![screenshot](images/image18.png)

        | Champs                      | Valeur                                                                                       |
        | --------------------------- | -------------------------------------------------------------------------------------------- |
        | **Dashboard**               | Dashboard auquel est relié la ligne de dashboard                                             |
        | **Intitulé**                | Nom de la ligne de dashboard                                                                 |
        | **Ordre**                   | Ordre d'affichage de la ligne                                                                |
        | **Options avancées**        | Affiche l'onglet `HTML` qui permet de personnaliser plus en détail la ligne de dashboard     |
        | **Description**             | Description de la ligne de dashboard                                                         |
        | **View**                    | Permet de sélectionner une vue de type**Graphique** qui apparaitra dans le dashboard         |
        | **Largeur**                 | Permet de sélectionner la largeur que prendra le**Widget** dans la ligne de dashboard        |

7. Cliquer sur l'icone ![screenshot](images/image3.png) du champ **view1** pour sélectionner une vue.
8. Sélectionner la vue "Icone compte" en cliquant sur le bouton ![screenshot](images/image6.png).

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

15. Sélectionner une largeur 3 pour chaque Icone du dashboard.

 **Attention : La somme des largeurs ne peut excéder 12 par ligne de dashboard.** 

![screenshot](images/image10.png)

16. Cliquer sur le bouton `Enregistrer` pour appliquer les modifications de la ligne.

![screenshot](images/image11.png)

17. Cliquer sur le bouton `Enregistrer` pour appliquer les modifications du dashboard.
18. Actualiser l'application.

Pour modifier les icones des widgets, cliquer sur  ![screenshot](images/image12.png).

![screenshot](images/image13.png)

19. Cliquer sur l'onglet **Graphique** puis modifier le champ **Icône du widget** par une icone [Font Awesome](https://fontawesome.com/).

![screenshot](images/image14.png)

Icone **Compte** : `fas fa-building fa-5x`

Icone **Contact** : `fas fa-address-card fa-5x`

Icone **Affaire** : `fas fa-suitcase fa-5x`

Icone **Action** : `fas fa-file-signature fa-5x`

**Attention : Il est nécessaire d'ajouter après chaque icône "fa-5x" pour que la taille de cette dernière s'adapte.** 

20. Cliquer sur le bouton `Enregistrer` pour appliquer les modifications de la vue.
21. Actualiser le dahsboard en cliquant sur le bouton ![screenshot](images/image15.png) pour voir le résultat.

![screenshot](images/image16.png)

# Webreport

## Description

WebReport est un outil graphique qui permet d'obtenir une vue d'ensemble claire et détaillée des données sélectionnées, avec des options de calcul avancées pour une analyse approfondie et précise.

#### Création d'un Webreport

1. **Dupliquer une vue :**
   - Prendre la vue par défaut d'une table, par exemple la vue par défaut des factures.
   - Dupliquer cette vue et la nommer : **WR - Analyse Facture**.

2. **Changer le type de la vue :**
   - Pour cela, sélectionner **WebReport** dans le champ **Type** de la vue.

#### Configurer la vue WebReport

1. **Accéder à la vue WebReport :**
   - Depuis le menu de gauche, aller dans **Référence > Paramètre > Vue**.
   - Rechercher le nom de votre vue WebReport (ex. **WR - Analyse Facture**).

2. **Configurer l'affichage :**
   - Ouvrir la vue WebReport, cliquer sur **Champs** pour modifier l'affichage des données.

   - Exemple de configuration dans le cas d'une analyse de la facturation :
    ![screenshot](images/config.png)

   - S'assurer que les champs nécessaires sont déjà présents dans la vue. Si besoin pour ajouter ou modifier des champs, cliquer sur **Edit**.
   - Après avoir configuré l'affichage selon les besoins, cliquer sur **Save** pour sauvegarder la configuration.
### Résultat

Une fois le WebReport configuré, une analyse visuelle des factures est disponiblle. Voici un exemple de résultat :

![screenshot](images/resultat.png)