# Vue


## Créer une vue

Vous pouvez adapter une vue en fonction de vos besoins, par exemple changer les couleurs, l'ordre d'affichage,  les conditions et les champs qui la composent. Chaque type de vue (Tableau, Agenda, Graphique et Pivot) dispose de ses propres options permettant une meilleure souplesse. 

Ajouter une nouvelle vue depuis le menu "Vue" puis cliquer sur le bouton "Ajouter" pour accéder au paramétrage.


![alt_text](images/image1.png "image_tooltip")



## Description

Vous voilà sur la fiche de personnalisation des vues, elle se compose de plusieurs onglets, pour le moment cliquer sur l'onglet **Description **pour débuter le paramétrage.


![alt_text](images/image2.png "image_tooltip")


Il est conseillé de renseigner un certain nombre de champs pour paramétrer correctement la vue :



* Renseigner les champs suivants : 

<table>
  <tr>
   <td>
<strong>Champ</strong>
   </td>
   <td><strong>Description</strong>
   </td>
  </tr>
  <tr>
   <td>Intitulé
   </td>
   <td>Nom de la vue.
   </td>
  </tr>
  <tr>
   <td>Table
   </td>
   <td>Table SQL sur laquelle la vue est connectée
   </td>
  </tr>
  <tr>
   <td>Type
   </td>
   <td>Choisir le type de vue : Tableau, Agenda, Graphique, Pivot, Agile
   </td>
  </tr>
  <tr>
   <td>Rapport
   </td>
   <td>Afficher la vue dans un rapport.
   </td>
  </tr>
  <tr>
   <td>Afficher dans les accès rapide
   </td>
   <td>Permet d'afficher la vue dans l'Accès rapide
<img src="images/image3.png" width="" alt="alt_text" title="image_tooltip">
de la barre de navigation.
   </td>
  </tr>
  <tr>
   <td>Afficher dans le menu des vues 
   </td>
   <td>Permet d'afficher la vue dans le menu des vues.
   </td>
  </tr>
  <tr>
   <td>Afficher au démarrage
   </td>
   <td>Option permettant l'ouverture de la vue au chargement de l'application.
   </td>
  </tr>
  <tr>
   <td>Pour le(s) groupes(s)
   </td>
   <td>Fonctionne avec la case à cocher "Afficher au démarrage".
   </td>
  </tr>
  <tr>
   <td>Multi-sélection
   </td>
   <td>Active la multi-sélection sur la table.
   </td>
  </tr>
  <tr>
   <td>Afficher total
   </td>
   <td>Affiche sur la dernière ligne du tableau le total.
   </td>
  </tr>
  <tr>
   <td>Afficher moyenne
   </td>
   <td>Affiche sur la dernière ligne du tableau la moyenne.
   </td>
  </tr>
  <tr>
   <td>Alterner couleur
   </td>
   <td>Permet d'alterner la couleur des lignes (blanc/gris).
   </td>
  </tr>
  <tr>
   <td>Retour à la ligne automatique
   </td>
   <td>Permet de prendre en compte les retours à la ligne dans un texte, dans le cas d'un champ CKEditor. 
   </td>
  </tr>
  <tr>
   <td>Afficher numéro ligne
   </td>
   <td>Afficher un numéro de ligne.
   </td>
  </tr>
  <tr>
   <td>Afficher le mode modification
   </td>
   <td>Offre la possibilité d'utiliser le mode “Edit View”
   </td>
  </tr>
  <tr>
   <td>Hauteur Max
   </td>
   <td>Permet de définir la hauteur d'une vue.
   </td>
  </tr>
  <tr>
   <td>Afficher barre défilement horizontale
   </td>
   <td>Permet d'obtenir une barre de défilement à l'horizontale.
   </td>
  </tr>
  <tr>
   <td>Figer colonne
   </td>
   <td>Permet de figer la largeur des colonnes, en partant de la gauche.
   </td>
  </tr>
  <tr>
   <td>Nombre de fiches par page par défaut 
   </td>
   <td>Paramétrage du nombre de fiches à afficher sur une page.
   </td>
  </tr>
  <tr>
   <td>Permissions
   </td>
   <td>Permet de gérer les permissions de la vue.
   </td>
  </tr>
  <tr>
   <td>Description
   </td>
   <td>Champ note pour la saisie d'une description de la vue.
   </td>
  </tr>
</table>




* Il est également possible de dupliquer la vue par défaut et de modifier les paramètres pour créer une nouvelle vue :
    * Depuis la vue par défaut cliquer sur
![alt_text](images/image4.png "image_tooltip")
>  
![alt_text](images/image5.png "image_tooltip")
  >  Dupliquer, il suffit alors de modifier le nom de la vue puis de cliquer sur  
![alt_text](images/image6.png "image_tooltip")
  pour commencer le paramétrage.


## Agencer les champs

Nous allons maintenant passer à l'onglet **Champs**, c'est ici que vous allez sélectionner les champs que vous souhaitez voir apparaître dans votre nouvelle vue.


![alt_text](images/image7.png "image_tooltip")


1. La liste de table affiche toutes les tables disponibles dans l'application.

2. Affiche les champs de la table sélectionnée sur le point n°1.

3. Permet d'ajouter un champ (flèche de droite) dans la vue ou de le supprimer (flèche de gauche).

4. Les champs choisis pour apparaître dans la vue, l'ordre d'affichage peut-être modifié avec un glissé-déposé.

NB : Pour ajouter ou supprimer un champ, il suffit de le sectionner et de le déplacer à droite ou à gauche à l'aide des flèches.


## Propriétés de la colonne

A l'aide d'un double clic sur un des champs de la colonne de droite, vous accédez aux propriétés du champ dans la colonne. C'est ici que vous allez effectuer des actions ciblées sur le champ de votre vue comme par exemple, augmenter ou diminuer la largeur de la colonne ou encore l'alignement du champ.


![alt_text](images/image8.png "image_tooltip")


A l'ouverture de la fiche, un certain nombre de champs sont repris : 

**Table, Champ, Alias, Intitulé.**

D'autres champs sont renseignés par défaut mais peuvent être modifiés :


<table>
  <tr>
   <td><strong>Champ</strong>
   </td>
   <td><strong>Signification</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Largeur</strong>
   </td>
   <td>Définir la largeur souhaitée.
   </td>
  </tr>
  <tr>
   <td><strong>Format</strong>
   </td>
   <td>Par défaut, GoPaaS détecte le type de champ et renseigne la donnée automatiquement. Mais pour plus de personnalisation il est possible de choisir un format SQL ou SQLNumber.
   </td>
  </tr>
  <tr>
   <td><strong>SQL</strong> ​​​​​​​
   </td>
   <td>Renseigner la commande SQL à condition d'avoir sélectionné le bon format préalablement.
   </td>
  </tr>
  <tr>
   <td><strong>Visible</strong>
   </td>
   <td>Décocher l'option pour masquer le champ dans la vue.
   </td>
  </tr>
  <tr>
   <td><strong>Alignement</strong>
   </td>
   <td>Définir l'alignement du champ dans la colonne (left, center ou right). Si aucune valeur n'est renseignée, la valeur par défaut est left.
   </td>
  </tr>
  <tr>
   <td><strong>Masquer sur mobile</strong>
   </td>
   <td>Cocher l'option pour masquer le champ sur le mobile.
   </td>
  </tr>
</table>



## Ajouter des conditions


![alt_text](images/image9.png "image_tooltip")


1. La liste de table nous affiche toutes les tables disponibles dans l'application.

2. Affiche les champs de la table sélectionnée sur le point n°1.

3. Permet d'ajouter le champ (flèche vers la droite) sur lequel nous allons faire la condition ou de le supprimer (flèche vers la gauche).

4. Les champs choisis pour les conditions.


## Trier une vue

Via l'onglet mise en forme, il est possible d'effectuer des tris sur votre vue, par exemple pour afficher des actions par statut ou encore trier des comptes par ordre alphabétique.


![alt_text](images/image10.png "image_tooltip")


1  Les tris de 1 à 5 permettent de classer les fiches en fonction des champs qui sont affichés dans la vue (onglet Champs).

2  Afficher par ordre croissant ou décroissant.

3 Sélectionner le champ pour effectuer le regroupement.


## Code source

Dans l'onglet "Code source" apparaît la requête SQL de la vue.


![alt_text](images/image11.png "image_tooltip")


**Détails :**


<table>
  <tr>
   <td><strong>Champs</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>SELECT</strong>
   </td>
   <td>Génère automatiquement en fonction des champs sélectionnés dans l'onglet Champs.
   </td>
  </tr>
  <tr>
   <td><strong>FROM</strong>
   </td>
   <td>Indique le nom de la table.
   </td>
  </tr>
  <tr>
   <td><strong>JOIN</strong>
   </td>
   <td>Permet de créer une jointure avec une autre table.
   </td>
  </tr>
  <tr>
   <td><strong>WHERE</strong>
   </td>
   <td>Génère automatiquement en fonction des champs sélectionnés dans les conditions.
   </td>
  </tr>
  <tr>
   <td><strong>COLONNE</strong>
   </td>
   <td>Génère automatiquement le paramétrage de chacun des champs.
   </td>
  </tr>
  <tr>
   <td><strong>STYLE</strong>
   </td>
   <td><code>Permet d'appliquer un style en fonction de la valeur d'un champ du tableau, voir exemple ci-dessous :</code>
<p>
<code>- Si la ville de la fiche contact = "PARIS" il applique une couleur et met en gras le texte :</code>
<p>
<code>&lt;format></code>
<p>
<code>&lt;item datafield="ville" value="PARIS" code="0xAE642D" fontweight="bold" fontstyle="normal"/></code>
<p>
<code>&lt;/format></code>
   </td>
  </tr>
</table>



## Script JS

Le champ Script JS est utilisé pour surcharger le code dans le cas d'une vue liée.


![alt_text](images/image12.png "image_tooltip")



## Le script JS va afficher dans la vue liée un nouveau menu sur le bouton "Ajouter"


## 
![alt_text](images/image13.png "image_tooltip")



Détail pour la ligne "Appel sortant" : 
```javascript
vb.addAddButton("Appel sortant", null, {
      type: "Appel sortant",
      objet: "Commercial",
      statut: "En cours",
      compte: itemComponent.getValue('compte')
   }
);
```


<table>
  <tr>
   <td>
<h2>Type</h2>


   </td>
   <td>
<h2>Appel sortant</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2>Objet</h2>


   </td>
   <td>
<h2>Commercial</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2>Statut</h2>


   </td>
   <td>
<h2>En cours</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2>Compte</h2>


   </td>
   <td>
<h2>Récupére la connexion compte de la fiche en cours.</h2>


   </td>
  </tr>
</table>



## Tableau

La vue tableau sert à afficher tout ou partie des enregistrements d’une table donnée. Elle s’ouvre dans un onglet de l’application.


![alt_text](images/image14.png "image_tooltip")



## Mettre à jour en masse

Utilisez la fonction de mise à jour en masse pour modifier rapidement les valeurs d'une liste de fiches.

Recherche / Remplace, suppression ou concaténation de plusieurs champs, ces fonctions sont disponibles dans l'outil MassUpdate.


![alt_text](images/image15.png "image_tooltip")



## Agenda

La vue agenda vous permet d'afficher par exemple les historiques directement dans un agenda.


![alt_text](images/image16.png "image_tooltip")



## Le paramétrage de la vue Agenda s'effectue dans l'onglet "Agenda". Dans chacune des listes apparaît les champs que l'on a choisi dans l'onglet "Champs" de la vue.


![alt_text](images/image17.png "image_tooltip")


**Détails :**

​​​​​​​


<table>
  <tr>
   <td><strong>Champs</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Titre</strong>
   </td>
   <td>C'est le premier texte qui sera affiché sur l'agenda.
   </td>
  </tr>
  <tr>
   <td><strong>Description / Description 2 / Description 3</strong>
   </td>
   <td>Idem que sur le point précédent, ce sont les champs que l'on veut voir sur l'agenda.
   </td>
  </tr>
  <tr>
   <td><strong>Date début</strong>
   </td>
   <td>C'est le champ date de début de votre fiche.
   </td>
  </tr>
  <tr>
   <td><strong>Heure début</strong>
   </td>
   <td>C'est le champ heure de début de votre fiche.
   </td>
  </tr>
  <tr>
   <td><strong>Date fin</strong>
   </td>
   <td>C'est le champ date de fin de votre fiche.
   </td>
  </tr>
  <tr>
   <td><strong>Heure fin</strong>
   </td>
   <td>C'est le champ heure de fin de votre fiche.
   </td>
  </tr>
  <tr>
   <td><strong>Table de collaboration</strong>
   </td>
   <td>C'est la vue des collaborateurs que l'on veut afficher dans l'agenda.
   </td>
  </tr>
  <tr>
   <td><strong>Champ du code couleur</strong>
   </td>
   <td>C'est le champ que l'on choisit pour appliquer les codes couleurs.
   </td>
  </tr>
  <tr>
   <td><strong>Code couleur</strong>
   </td>
   <td>il faut ici saisir le code couleur en <a href="https://fr.wikipedia.org/wiki/Liste_de_noms_de_couleur#Liste">hexadécimal</a>, exemple ci-dessous :
<p>
<code>{</code>
<p>
<code>"Nicolas.":"#8B16E5",</code>
<p>
<code>"Nambourt.":"#FF0000" // Attention pas de virgule sur la dernière ligne</code>
<p>
<code>}</code>
   </td>
  </tr>
  <tr>
   <td><strong>Champ du code icône</strong>
   </td>
   <td>C'est le champ que l'on choisit pour l'affichage de l'icône.
   </td>
  </tr>
  <tr>
   <td><strong>Code icône</strong>
   </td>
   <td>Ce sont les icônes que l'on va afficher en fonction du champ code icône, les codes à utiliser viennent du site <a href="http://fontawesome.io/icons/">Fontawesome</a>.
   </td>
  </tr>
</table>



## Graphique

Vous pouvez ajouter une vue de type Graphique pour analyser par exemple vos affaires en cours.


![alt_text](images/image18.png "image_tooltip")

![alt_text](images/image19.jpg "image_tooltip")


**Type graphique** : Choix du type de graphique.


![alt_text](images/image20.png "image_tooltip")


**Détails : **


<table>
  <tr>
   <td><strong>Titre</strong>
   </td>
   <td>Titre du graphique.
   </td>
  </tr>
  <tr>
   <td><strong>Champ Valeur</strong>
   </td>
   <td>C'est le champ qu'il faut sélectionner pour le calcul du pourcentage dans le tableau.
   </td>
  </tr>
  <tr>
   <td><strong>Type calcul</strong>
   </td>
   <td>Choix du type de calcul : Somme, Nombre, Moyenne, Max ou Min.
   </td>
  </tr>
  <tr>
   <td><strong>Sous-titre</strong>
   </td>
   <td>Sous-titres du graphique.
   </td>
  </tr>
  <tr>
   <td><strong>Champs Dimension</strong>
   </td>
   <td>
   </td>
  </tr>
  <tr>
   <td><strong>Regroupement</strong>
   </td>
   <td>Permet de grouper le résultat sur un champ.
   </td>
  </tr>
  <tr>
   <td><strong>Couleur de fond du widget</strong>
   </td>
   <td>Non utilisé sur ce type de graphique.
   </td>
  </tr>
  <tr>
   <td><strong>En savoir plus</strong>
   </td>
   <td>Non utilisé sur ce type de graphique.
   </td>
  </tr>
</table>



## Pivot


## La vue type Pivot vous permet d'avoir un tableau croisé dynamique directement sur votre application.
![alt_text](images/image21.jpg "image_tooltip")



## ​​​​​​​


<table>
  <tr>
   <td>
<h2><strong>1.</strong></h2>


   </td>
   <td>
<h2>Liste des champs que l'on a ajouté dans la vue.</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2><strong>2.</strong></h2>


   </td>
   <td>
<h2>Afficher des champs dans l'axe des ordonnées.</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2><strong>3.</strong></h2>


   </td>
   <td>
<h2>Afficher des champs dans l'axe des abscisses.</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2><strong>4.</strong></h2>


   </td>
   <td>
<h2>Choix du type de pivot : Table, Bar Chart, ...</h2>


   </td>
  </tr>
  <tr>
   <td>
<h2><strong>5.</strong></h2>


   </td>
   <td>
<h2>Visuel dynamique du pivot.</h2>


   </td>
  </tr>
</table>



## Agile


## La vue agile permet de changer le statut des actions rapidement à l'aide de glisser-déposer.


## 
![alt_text](images/image22.jpg "image_tooltip")

![alt_text](images/image23.png "image_tooltip")



## 1. Choix du champ pour regrouper les fiches.


## 2. Chaîne JSON listant les valeurs de regroupement dans l'ordre souhaité.


## 3. Chaîne JSON décrivant les couleurs à appliquer.


## Utilisation d’une vue

Les vues servent à afficher tout ou une partie des enregistrements d’une table donnée.

Ou bien dans une fiche, généralement pour lister les enregistrements d’une table connectée, comme par exemple la liste des contacts d’un compte donné.


![alt_text](images/image24.jpg "image_tooltip")


- Le bouton 
![alt_text](images/image25.png "image_tooltip")
permet d’ajouter une fiche dans la table sur laquelle porte la vue.

- Le bouton
![alt_text](images/image26.png "image_tooltip")
sert à supprimer une ou plusieurs fiches dans la vue. Si la vue est du type Multi-sélection (voir plus loin), on peut sélectionner plusieurs fiches et les supprimer en une seule passe. Si la vue n’est pas du type Multi-sélection, le bouton - Supprimer sert uniquement à supprimer la fiche en surbrillance.

- Le menu
![alt_text](images/image27.png "image_tooltip")
de la vue permet d'exporter vers csv, mettre à jour en masse et de fusionner des modèles de document. On peut y ajouter d'autres options en javascript.


![alt_text](images/image28.png "image_tooltip")



![alt_text](images/image29.png "image_tooltip")


- On saisit dans la zone Rechercher la ou les chaînes de caractères que l’on recherche. La zone « dans » permet de préciser sur quel champ la recherche doit s’effectuer. Par défaut, c’est l’option Tous qui est sélectionnée, c’est-à-dire que la recherche doit s’effectuer dans l’ensemble des champs présents dans la vue.

- Le bouton
![alt_text](images/image30.png "image_tooltip")
permet de lancer la recherche

- Le bouton
![alt_text](images/image31.png "image_tooltip")
permet d'accéder à l'outil de recherche avancée, une nouvelle ligne apparaît en dessous


![alt_text](images/image32.png "image_tooltip")


On choisit le champ sur lequel on veut filtrer puis la condition

Là encore, n’apparaît dans la liste de champs que ceux présents dans la vue (y compris les champs invisibles). Pour ajouter une condition, cliquer sur le bouton plus. Quand on est satisfait de son filtre, on peut l’enregistrer. Cliquer sur la flèche du bouton "Filtrer".


![alt_text](images/image33.png "image_tooltip")


Sur la flèche bas du bouton filtre on retrouve les recherches sauvegardées


![alt_text](images/image34.png "image_tooltip")



## Fonctionnalités de ViewDesigner

**ViewDesigner **est une fonctionnalité conçue pour offrir aux utilisateurs une flexibilité et une personnalisation de leurs vues de données. 

Grâce au bouton "**Designer**", les utilisateurs peuvent passer une vue en mode édition. 

Ce mode permet de modifier l'emplacement des colonnes, d'ajuster leur taille et de changer les titres des colonnes.

Avec **ViewDesigner**, vous avez le contrôle total sur la présentation de vos données. Voici les fonctionnalités clés :



* <span style="text-decoration:underline;">Modification de l'emplacement des colonnes</span> : Réorganisez l'ordre des colonnes simplement par glisser-déposer pour refléter l'importance des informations selon vos besoins.
* <span style="text-decoration:underline;">Ajustement de la taille des colonnes</span> : Modifiez la largeur des colonnes pour adapter l'affichage des données, garantissant ainsi que les informations clés sont visibles sans avoir à naviguer horizontalement.
* <span style="text-decoration:underline;">Changement des titres des colonnes</span> : Personnalisez les titres des colonnes pour les rendre plus descriptifs, facilitant la compréhension et l'interprétation des données présentées.


### Accès au mode Designer



1. Ouvrir la vue de données : Accédez à la vue de données que vous souhaitez personnaliser dans l'application GoPaaS.
2. Activer ViewDesigner : Cliquez sur le bouton "**Designer**" situé généralement en haut à droite de la vue de données. La vue passera en mode édition, vous permettant de modifier la présentation des données.
![alt_text](images/image35.png "image_tooltip")



### Modification de l'emplacement des colonnes



* **Glisser-Déposer :** Cliquez et maintenez la colonne que vous souhaitez déplacer, puis glissez-la à l'emplacement désiré. Relâchez le bouton de la souris pour confirmer le nouvel emplacement.

    
![alt_text](images/image36.png "image_tooltip")




### Ajustement de la taille des colonnes



* **Redimensionner :** Placez votre curseur sur le bord de la colonne que vous souhaitez ajuster. Le curseur se transformera en icône de redimensionnement. Cliquez et glissez pour ajuster la largeur de la colonne.

    
![alt_text](images/image37.png "image_tooltip")

![alt_text](images/image38.png "image_tooltip")




### Changement des titres des colonnes



* **Éditer le titre :** Cliquez sur le bouton avec l’icône crayon de la colonne que vous souhaitez modifier. Saisissez le nouveau titre dans le champ éditable qui apparaît et validez votre saisie. Appuyez sur la touche Entrée pour valider.
![alt_text](images/image39.png "image_tooltip")



### Sauvegarde des modifications



* **Enregistrement : **n'oubliez pas de sauvegarder vos changements pour que la vue personnalisée soit conservée pour les prochaines sessions.


## Fonctionnalités d’EditView

**EditView** offre la possibilité d'ajouter ou de modifier des fiches directement depuis une vue. Cet outil flexible permet une gestion des données plus rapide et plus intuitive, en évitant de naviguer entre différentes fiches pour effectuer des modifications ou ajouts de données.


### Activer le Mode Modification



1. Accès aux **Propriétés **de la Vue : Ouvrez les paramètres ou les propriétés de la vue où vous souhaitez utiliser **EditView**.
![alt_text](images/image40.png "image_tooltip")

2. Activer **EditView **: Recherchez l'option "Afficher le mode modification" et cochez la case correspondante. Cette action active le mode d'édition pour la vue actuelle, permettant des modifications directes.
![alt_text](images/image41.png "image_tooltip")



### Configurer les champs modifiables

Une fois le mode modification activé, vous devez spécifier quels champs seront modifiables :



1. Accéder aux **Propriétés **de chaque **champ **: Ouvrez les propriétés ou les paramètres de chaque champ présent dans la vue.
2. Autoriser la modification : Pour chaque champ que vous souhaitez rendre modifiable, cochez la case "Autoriser modification". Si vous ne cochez pas cette option, le champ restera en lecture seule et ne pourra pas être édité directement depuis la vue.
![alt_text](images/image42.png "image_tooltip")



### Fonctionnalités Clés



* **Ajout **de fiches : Créez de nouvelles fiches directement depuis la vue, facilitant l'entrée de données sans quitter le contexte actuel.
![alt_text](images/image43.png "image_tooltip")

* **Modification **de plusieurs fiches : Editez plusieurs fiches en même temps. Cette fonction est particulièrement utile pour mettre à jour des données en masse ou corriger des informations sur plusieurs entrées rapidement.
![alt_text](images/image44.png "image_tooltip")

* **Enregistrement **: N’oubliez pas d’enregistrer les modifications apportées.
![alt_text](images/image45.png "image_tooltip")
