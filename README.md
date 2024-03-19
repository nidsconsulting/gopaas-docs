# Personnalisation

Un des atouts majeurs de GoPaaS réside dans ses nombreuses fonctions de personnalisation. Cela confère une souplesse inégalée au produit, qui peut ainsi se prêter aux utilisations et applications les plus variées. Selon vos besoins, vous pouvez ajouter et modifier des tables, des connexions, des vues, formulaires, des automatisations, et tous les éléments (ou définitions) qui constituent la structure de votre application.

Nous passons dans cette rubrique en revue l’ensemble des possibilités de personnalisation de GoPaaS.


## Ajouter une table

La plateforme GoPaaS vous offre la possibilité d'ajouter de nouvelle table afin de créer de nouvelles fonctionnalités liées à l'évolution de votre utilisation. Pour cela, rendez vous dans le menu personnalisation

<p id="gdcalert1" ><span style="color: red; font-weight: bold">>>>>>  gd2md-html alert: inline image link here (to images/image1.png). Store image on your image server and adjust path/filename/extension if necessary. </span><br>(<a href="#">Back to top</a>)(<a href="#gdcalert2">Next alert</a>)<br><span style="color: red; font-weight: bold">>>>>> </span></p>


![alt_text](images/image1.png "image_tooltip")
 > Tables > cliquer sur Ajouter.

<p id="gdcalert2" ><span style="color: red; font-weight: bold">>>>>>  gd2md-html alert: inline image link here (to images/image2.png). Store image on your image server and adjust path/filename/extension if necessary. </span><br>(<a href="#">Back to top</a>)(<a href="#gdcalert3">Next alert</a>)<br><span style="color: red; font-weight: bold">>>>>> </span></p>


![alt_text](images/image2.png "image_tooltip")


Afin d'enregistrer la table en base de donnée, il faut obligatoirement renseigner deux champs :


<table>
  <tr>
   <td><strong>Champ</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Intitulé</strong>
   </td>
   <td>Le nom de la table en base de donnée
   </td>
  </tr>
  <tr>
   <td><strong>Alias</strong>
   </td>
   <td>Le nom de la table dans l'application
   </td>
  </tr>
</table>


Pour une meilleure utilisation d'autres champs sont à renseigner également :


<table>
  <tr>
   <td><strong>Champ</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Champs à afficher dans connexion</strong>
   </td>
   <td>Définir les champs à afficher dans un champ de type connexion sur une autre table. Séparer les champs par une virgule pour en afficher plusieurs lors de la connexion.
   </td>
  </tr>
  <tr>
   <td><strong>Ordre</strong>
   </td>
   <td>Ordre de la table dans la barre de navigation.
   </td>
  </tr>
  <tr>
   <td><strong>Icône</strong>
   </td>
   <td>Icône de la table dans la barre de navigation, aller à l'URL suivante pour avoir accès à la bibliothèque d'icônes. (https://fontawesome.com/v5/search).
   </td>
  </tr>
  <tr>
   <td><strong>Type</strong>
   </td>
   <td>Choisir l'onglet de la barre de navigation dans lequel afficher la table.
   </td>
  </tr>
  <tr>
   <td><strong>Module</strong>
   </td>
   <td>Choisir le module de la barre de navigation dans lequel afficher la table.
   </td>
  </tr>
  <tr>
   <td><strong>Afficher les vues dans la barre de navigation</strong>
   </td>
   <td>Cocher cette option permet d'afficher le menu des vues en sous-menu dans la barre de navigation.
   </td>
  </tr>
  <tr>
   <td><strong>Afficher dans Ajout rapide</strong>
   </td>
   <td>Cocher cette option permet d'afficher une option de création rapide.
   </td>
  </tr>
</table>



## Les onglets

Chaque table est associée à un seul formulaire de saisie et de visualisation de données. Ces masques sont organisés sous forme d'onglets, chaque onglet contenant lui-même des sections et dans chaque section est repartie des champs.

A la création d'une nouvelle table, GoPaaS ajoute automatiquement 2 onglets, l'onglet **Principal** et l'onglet **Système**. Pour ajouter un nouvel onglet cliquer sur le bouton “Ajouter”.

<p id="gdcalert3" ><span style="color: red; font-weight: bold">>>>>>  gd2md-html alert: inline image link here (to images/image3.jpg). Store image on your image server and adjust path/filename/extension if necessary. </span><br>(<a href="#">Back to top</a>)(<a href="#gdcalert4">Next alert</a>)<br><span style="color: red; font-weight: bold">>>>>> </span></p>


![alt_text](images/image3.jpg "image_tooltip")


Afin d'enregistrer un onglet en base de données, il faut renseigner obligatoirement certains champs :

​​​​​​​


<table>
  <tr>
   <td><strong>Champ</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Intitulé</strong>
   </td>
   <td>Nom du champ en base.
   </td>
  </tr>
  <tr>
   <td><strong>Table</strong>
   </td>
   <td>Nom de la table dans laquelle l'onglet se trouve.
   </td>
  </tr>
  <tr>
   <td><strong>Ordre</strong>
   </td>
   <td>Ordre de l'onglet sur la table.
   </td>
  </tr>
</table>


Le champ **Label **correspond au nom du champ dans l'application.

**_NB_ **: _Le moyen le plus simple et le plus rapide pour créer des onglets est de passer par le [Form Designer](http://www.gopaas.fr/aide.php?rubrique=Personnaliser%20les%20applications#41)_.


## Les champs

Cliquer sur l'onglet **Champs **pour pouvoir ajouter des champs à cette nouvelle table.

Par défaut, à la création d'une nouvelle table, l'application crée un certain nombre de champs système ainsi qu'un champ **Intitulé.**

C'est le premier champ de la table, vous pouvez le modifier ou le supprimer.

Pour ajouter un nouveau champ cliquer sur Ajouter.

<p id="gdcalert4" ><span style="color: red; font-weight: bold">>>>>>  gd2md-html alert: inline image link here (to images/image4.png). Store image on your image server and adjust path/filename/extension if necessary. </span><br>(<a href="#">Back to top</a>)(<a href="#gdcalert5">Next alert</a>)<br><span style="color: red; font-weight: bold">>>>>> </span></p>


![alt_text](images/image4.png "image_tooltip")
Afin d'enregistrer le champ en base de donnée, il faut renseigner obligatoirement les champs suivants :

**Détails :**


<table>
  <tr>
   <td><strong>Champs</strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Table</strong>
   </td>
   <td>C'est la table sur laquelle le champ va être créer.
   </td>
  </tr>
  <tr>
   <td><strong>Onglet</strong>
   </td>
   <td>L'onglet de la table sur lequel le champ va être créer.
   </td>
  </tr>
  <tr>
   <td><strong>Section</strong>
   </td>
   <td>La section de l'onglet sur laquelle le champ va être créer.
   </td>
  </tr>
  <tr>
   <td><strong>Colonne</strong>
   </td>
   <td>Définir le numéro de colonne, une section peut contenir au maximum 3 colonnes.
   </td>
  </tr>
  <tr>
   <td><strong>Odre du champ</strong>
   </td>
   <td>Ordre du champ dans la colonne.
   </td>
  </tr>
  <tr>
   <td><strong>Aide</strong>
   </td>
   <td>Permet d'ajouter une aide pour l'utilisateur au sur-vole du champ.
   </td>
  </tr>
  <tr>
   <td><strong>Type</strong>
   </td>
   <td>Plusieurs types de champs sont mis à disposition.
   </td>
  </tr>
  <tr>
   <td><strong>Nom du champ</strong>
   </td>
   <td>C'est le nom du champ en base de données.
   </td>
  </tr>
  <tr>
   <td><strong>Alias/Nom table connectée</strong>
   </td>
   <td>L'alias du champ doit être unique dans toute l'application. Dans le cas où le champ crée est de type <em>connexion, </em>il faut renseigner le nom de la table à connecter.
   </td>
  </tr>
  <tr>
   <td><strong>Intitulé</strong>
   </td>
   <td>C'est le nom du champ dans l'application.
   </td>
  </tr>
  <tr>
   <td><strong>Largeur intitulé</strong>
   </td>
   <td>C'est l'espacement entre le titre du champ et le champ, il existe des valeurs prédéfinies allant de 1 à 12.
   </td>
  </tr>
  <tr>
   <td><strong>Alignement intitulé</strong>
   </td>
   <td>Permet de régler le positionnement de l'intitulé.
   </td>
  </tr>
  <tr>
   <td><strong>Audit Trail</strong>
   </td>
   <td>Permet d'obtenir un historique sur les modifications apportées à ce champ.
   </td>
  </tr>
  <tr>
   <td><strong>index</strong>
   </td>
   <td>Permet d'indexer le champ en base de données.
   </td>
  </tr>
  <tr>
   <td><strong>Données personnelles</strong>
   </td>
   <td>Permet de catégoriser ce champ au niveau RGPD.
   </td>
  </tr>
  <tr>
   <td><strong>Données sensibles</strong>
   </td>
   <td>Permet de catégoriser ce champ au niveau RGPD.
   </td>
  </tr>
</table>


**NB : _Les valeurs de nom du champ ne doivent pas contenir de majuscule, d'espace ou de caractères spéciaux_**

Pour optimiser le paramétrage de l'application, renseigner également les champs suivants :.

**Détails :**

**​​​​​​​**


<table>
  <tr>
   <td><strong>Champs </strong>
   </td>
   <td><strong>Valeur</strong>
   </td>
  </tr>
  <tr>
   <td><strong>Filtre de connexion</strong>
   </td>
   <td>A utiliser dans les champs de type Connexion pour filtrer la liste des valeurs disponibles.
<p>
Par exemple, dans une connexion entre Client et Devis, pour afficher les Devis créent par la personne qui gère le Client :
<p>
<code>[ {"field":"creation_par", "source_field":"gestion_par"} ]</code>
<p>
Vous pouvez cumuler plusieurs filtres en les séparant par une virgule :
<p>
<code>[ {"field":"groupe", "value":"Admin"}, {"field":"annee", "value":"2016"} ]</code>
   </td>
  </tr>
  <tr>
   <td><strong>Valeur</strong>
   </td>
   <td>A utiliser dans les champs de type liste, les valeurs correspondent aux choix de la liste. Toutes les valeurs doivent être séparées par un retour à la ligne.
   </td>
  </tr>
  <tr>
   <td><strong>Hauteur (memo)</strong>
   </td>
   <td>Définir la hauteur par défaut d'un champ de type mémo.
   </td>
  </tr>
  <tr>
   <td><strong>Masquer</strong>
   </td>
   <td>Option permettant de masquer le champ.
   </td>
  </tr>
  <tr>
   <td><strong>Obligatoire</strong>
   </td>
   <td>Option permettant de rendre obligatoire le champ.
   </td>
  </tr>
  <tr>
   <td><strong>Lecture seule</strong>
   </td>
   <td>Option permettant de rendre le champ insaisissable.
   </td>
  </tr>
</table>


**_NB : Le moyen le plus rapide et le plus simple pour créer des champs est de passer par le [Form Designer]
