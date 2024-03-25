# Workflow

Le Workflow permet de gérer des processus métiers dans GoPaaS avec des validations par étape.


### Prérequis

Pour pouvoir ajouter un workflow sur une table, il faut créer les champs suivants : 



* Un champ "Etape" de type texte ou liste en lecture seule pour afficher l'étape du workflow.
* Un champ "Commentaires workflow" de type « mémo » en lecture seule pour enregistrer les commentaires dans le cas d'un refus**.**


## Ajouter un workflow

<span style="text-decoration:underline;">Description du workflow</span>



* Dans la barre de navigation, aller dans le menu Admin > Workflow
* Cliquer sur le bouton "Ajouter"
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
   <td>Nom du workflow
   </td>
  </tr>
  <tr>
   <td>Table
   </td>
   <td>Table concernée
   </td>
  </tr>
  <tr>
   <td>Champ pour les étapes
   </td>
   <td>Intitulé du champ "Étape" dans la table
   </td>
  </tr>
  <tr>
   <td>Champ pour les commentaires
   </td>
   <td>Intitulé du champ "Commentaire" dans la table
   </td>
  </tr>
  <tr>
   <td>Actif
   </td>
   <td>Pour activer le workflow
   </td>
  </tr>
  <tr>
   <td>Description
   </td>
   <td>Description du Workflow.
   </td>
  </tr>
</table>




* Cliquer sur le bouton "Appliquer" pour enregistrer le Workflow

<span style="text-decoration:underline;">Définir les étapes du workflow</span>



* Cliquer sur le bouton "Ajouter" de la vue liée Étapes
* Renseigner les champs suivants pour le bouton de "Validation" : 

<table>
  <tr>
   <td>
<strong>Champ</strong>
   </td>
   <td><strong>Description</strong>
   </td>
  </tr>
  <tr>
   <td>Workflow
   </td>
   <td>Nom du workflow associé
   </td>
  </tr>
  <tr>
   <td>Ordre
   </td>
   <td>Ordre des étapes du workflow
   </td>
  </tr>
  <tr>
   <td>Etape
   </td>
   <td>Valeur du champ "Etape" à laquelle le bouton doit apparaître.
<p>
Ex: "Nouveau"
   </td>
  </tr>
  <tr>
   <td>Champs obligatoires (optionnel)
   </td>
   <td>Liste des champs obligatoires pour passer à l'étape suivante.
<p>
Ex :  
<p>
<code>[{"name":"contact_rdv"},</code>
<p>
<code>{"name":"date_rdv"},</code>
<p>
<code>{"name":"heure_rdv"}]</code>
   </td>
  </tr>
  <tr>
   <td>Nom du bouton
   </td>
   <td>Intitulé du bouton.
   </td>
  </tr>
  <tr>
   <td>Etape déclencheur
   </td>
   <td>Valeur du champ "Étape", sur laquelle notre automatisme se déclenche.
   </td>
  </tr>
  <tr>
   <td>Etape suivante à renseigner
   </td>
   <td>Valeur du champ "Étape" après exécution de notre automatisme.
   </td>
  </tr>
</table>




* Renseigner les champs suivants pour le bouton de "Refus" (optionnel) :

<table>
  <tr>
   <td>
<strong>Champ</strong>
   </td>
   <td><strong>Description</strong>
   </td>
  </tr>
  <tr>
   <td>Workflow
   </td>
   <td>Nom du workflow associé
   </td>
  </tr>
  <tr>
   <td>Ordre
   </td>
   <td>Ordre des étapes du workflow
   </td>
  </tr>
  <tr>
   <td>Etape
   </td>
   <td>Valeur du champ "Etape" à laquelle le bouton doit apparaître.
<p>
Ex: "Nouveau"
   </td>
  </tr>
  <tr>
   <td>Champs obligatoires
   </td>
   <td>Liste des champs obligatoires pour passer à l'étape suivante.
<p>
Ex : 
<p>
<code>[{"name":"contact_rdv"},</code>
<p>
<code>{"name":"date_rdv"},</code>
<p>
<code>{"name":"heure_rdv"}]</code>
   </td>
  </tr>
  <tr>
   <td>Nom du bouton
   </td>
   <td>Intitulé du bouton.
   </td>
  </tr>
  <tr>
   <td>Etape déclencheur
   </td>
   <td>Valeur du champ "Étape", sur laquelle notre automatisme se déclenchera.
   </td>
  </tr>
  <tr>
   <td>Étape refus à renseigner
   </td>
   <td>Valeur du champ "Étape" après exécution de notre automatisme.
   </td>
  </tr>
</table>




* Cliquer sur le bouton "Enregistrer" pour enregistrer l'étape de Workflow


## Modifier le script JS de la table

Pour modifier le script, ouvrez le script JavaScript de la table Outil > Personnaliser > Script JS

Puis il est nécessaire de réaliser les actions suivantes :



* Initialiser le champ "Étape" avec la valeur pour lancer le Workflow. \
Ex : Mettre l'étape à "Nouveau" lors de la création d'une nouvelle fiche.
* Le Workflow doit être appelé dans la fonction onLoad du script JavaScript de notre table.
* Cliquez sur le bouton "Enregistrer" pour sauvegarder le script.


## Ajouter Automatismes

<span style="text-decoration:underline;">Description de l'automatisme</span>

Pour ajouter un automatisme :



* Dans la barre de personnalisation, cliquez sur le menu "Automatisation"
* Cliquer sur le bouton "Ajouter"
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
   <td>Nom
   </td>
   <td>Nom de l'automatisme.
<p>
Ex : WF - NOM_DE_LA_TABLE - Étape déclencheur
   </td>
  </tr>
  <tr>
   <td>Actif
   </td>
   <td>Pour activer l'automatisme
   </td>
  </tr>
  <tr>
   <td>Description
   </td>
   <td>Description de l'automatisme.
   </td>
  </tr>
  <tr>
   <td>Ordre
   </td>
   <td>Ordre d'exécution de l'automatisme
   </td>
  </tr>
</table>




* Cliquer sur le bouton "Enregistrer" pour sauvegarder l'automatisme

<span style="text-decoration:underline;">Déclencheur et filtre</span>



* Ouvrez de nouveau l'automatisme et renseigner les champs suivants :

<table>
  <tr>
   <td>
<strong>Champ</strong>
   </td>
   <td><strong>Description</strong>
   </td>
  </tr>
  <tr>
   <td>Type
   </td>
   <td>"Enregistrement de fiche"
   </td>
  </tr>
  <tr>
   <td>Mode
   </td>
   <td>"Modification"
   </td>
  </tr>
  <tr>
   <td>Table
   </td>
   <td>Table concernée par l’automatisme.
   </td>
  </tr>
  <tr>
   <td>Filtre
   </td>
   <td>Valeur du champ "Étape"
<p>
(Etape déclencheur, définit lors de la création de l'étape de Workflow)
   </td>
  </tr>
</table>




* Cliquer sur le bouton "Appliquer" pour enregistrer l'automatisme

<span style="text-decoration:underline;">Définir les actions liées à l'automatisme</span>



* Dans la section Action, cliquer sur "Ajouter" 
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
   <td>Ordre
   </td>
   <td>Ordre d'exécution des actions
   </td>
  </tr>
  <tr>
   <td>Type
   </td>
   <td>"Modifier fiche"
   </td>
  </tr>
  <tr>
   <td>Statut
   </td>
   <td>Valeur du champ "Étape" après exécution de l'automatisme.
<p>
(Définit lors de la création de l'étape de Workflow)
   </td>
  </tr>
</table>




* Cliquez sur le bouton "Enregistrer" pour enregistrer la fiche action de l'automatisme.

Il est également possible de créer d'autre action sur le même automatisme, comme :



* L'ajout d'une fiche
* La modification d'une fiche
* Créer un Email

**Exemple de workflow**

Dans cet exemple, nous avons un bouton de validation (en vert) et un bouton de refus (en rouge).


![alt_text](images/image1.png "image_tooltip")

