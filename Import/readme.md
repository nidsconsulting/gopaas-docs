# Import


## Importer un fichier

Le fichier à importer doit obligatoirement être au format .CSV

Dans le menu personnalisation de l'application ![alt_text](images/Image1.png) cliquer sur importer un fichier.


![alt_text](images/Image2.png)


Cliquez sur 
![alt_text](images/Image3.png)
pour ajouter le fichier à importer.

Plusieurs champs sont déjà renseignés sur cette fiche, ils sont modifiables selon l'utilisation : 


<table>
  <tr>
   <td><strong>Charger un modèle d'import</strong>
   </td>
   <td>Les utilisateurs peuvent créer des modèles d'import réutilisables afin d'éviter la correspondance des champs à chaque import.
   </td>
  </tr>
  <tr>
   <td><strong>Séparateur de colonne CSV</strong>
   </td>
   <td>A définir, le séparateur peut être différent selon les fichiers, par défaut c'est le point virgule.
   </td>
  </tr>
  <tr>
   <td><strong>Encodage du fichier CSV</strong>
   </td>
   <td>Il existe trois formes d'encodage pour l'import GoPaaS : iso-8859-1, iso-8859-15, utf-8.
   </td>
  </tr>
  <tr>
   <td><strong>Format de date</strong>
   </td>
   <td>La plateforme propose également trois formats de date possible pour l'import : JJ/MM/AAAA, MM/JJ/AAAA, AAAA-MM-JJ.
   </td>
  </tr>
</table>


Cocher l'option si le fichier contient une ligne d'en-tête (Ex: Nom, prénom, ville), si il n'en contient pas la correspondance se fera sur la première ligne de donnée.

Cliquez sur le bouton [image] pour passer à l'étape suivante.


![alt_text](images/Image4.png)



## Faire la correspondance des champs

Vous devez préalablement sélectionner la table sur laquelle vous souhaitez importer le fichier.

Une fois la table sélectionnée, la page s'actualise et affiche l'ensemble des champs de cette table.


![alt_text](images/Image5.png)



![alt_text](images/Image6.png)
	

Il ne reste plus qu'à faire correspondre les champs de la table avec les colonnes du fichier importé. 

Pour cela, en face de chaque nom de champ, cliquez dans la zone **(ne pas importer)** afin de sélectionner le nom de colonne à faire correspondre.

Il est possible de renseigner une valeur par défaut dans la colonne "Valeur par défaut".


## Lancer l'import

Cliquer sur Importer pour lancer l'import.

Quand l'import est terminé un message apparaît avec le nombre d'enregistrements importés.


![alt_text](images/Image7.png)



## 


## Créer un modèle d'import

Afin d'éviter l'étape de la correspondance des champs à chaque import, vous avez la possibilité de créer des modèles d'import.

Ces modèles sont réutilisables à chaque import du même type de fichier.


![alt_text](images/Image8.png)


Après avoir effectué une première fois la correspondance des champs, en cliquant sur le bouton 
![alt_text](images/Image9.png)
 Il est possible d'enregistrer cette correspondance en tant que modèle.

Il est conseillé de lui donner un nom afin de le retrouver plus facilement lors des prochains imports.

Pour charger un modèle d'import, sélectionner le dans la liste déroulante puis cliquer sur le bouton 
![alt_text](images/Image10.png)
. Si le fichier correspond bien au modèle, la correspondance se fera automatiquement.

Il est possible de modifier les correspondances puis d'enregistrer à nouveau le modèle sous un autre nom en cliquant sur 
![alt_text](images/Image11.png)
**.**

Cliquez sur 
![alt_text](images/Image12.png)
 pour supprimer le modèle, ou sur 
![alt_text](images/Image13.png)
 pour le renommer.


## Gérer les doublons

En dessous de la partie correspondance des champs, il existe un champ Traitement des fiches existantes. Ce champ de type liste vous permet de gérer les actions à mettre en place face aux potentiels doublons.


![alt_text](images/Image14.png)


Cliquez sur la liste déroulante pour définir l'action à mettre en place lors de l'import :



* Remplacer les doublons, champs importés seuls

* Remplacer les doublons, tous champs

* Ne pas importer les doublons

Sélectionnez l'option "**Ajouter nouvelles fiches**" si vous désirez incorporer de nouvelles fiches durant l'importation.

Ne pas oublier de sélectionner sur quels champs identifier les doublons dans la partie "correspondance des champs".


## Intégrité des données

Dans les valeurs par défaut des champs, vous ajouter des codes de champs pour contrôler l'intégrité des données qui vont être importées.

Le contrôle d'intégrité se fait à l'aide de REGEX.

Par exemple pour contrôler le format email lors d'un import il faudra insérer le code suivant :

```php
$$REGEX("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i")
```
    
le format téléphone lors d'un import il faudra insérer le code suivant : 

```php
$$REGEX("/^(?:\+33\s|0)[1-9](?:\s\d{2}){4}$/")
```

La pattern REGEX est à insérer entre guillemet sous la forme "/PATTERN/"

Vous pouvez également contrôler les valeurs qui seront insérées :
Dans une liste déroulante avec le code suivant : 

```php
$$STRICT_VALUES_LIST
```

Dans une connexion avec le code suivant :

```php
​$$STRICT_VALUES_CONNECTION("utilisateur") où utilisateur est la table connectée
```
 
