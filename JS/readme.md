# JS

## gopaas.util

### printItem  
Ouvrir la page d'impression de la fiche dans une nouvelle fenêtre du navigateur. Cette page au format HTML n'a pas de style css.

**Paramètres :**

| Param      | Type   | Description                                                  |
|------------|--------|--------------------------------------------------------------|
| tableName  | string | Nom de la table                                               |
| itemId     | string | ID de la fiche<br>Mettre null si on utilise itemKey           |
| itemKey    | string | Clé de la fiche<br>Ne pas renseigner si on utiliser itemId    |

### generateRandomString

**Paramètres :**

| Param      | Type   | Description                                                  |
|------------|--------|--------------------------------------------------------------|
| size       | string | Longueur de 4 à 8<br>longueur de 4 = 1,6 millions de possibilités<br>longueur de 5 = 60 millions de possibilités<br>longueur de 6 = 2 milliards de possibilités<br>longueur de 7 = 78 milliards de possibilités<br>longueur de 8 = 2800 milliards de possibilités |
| type       | string | "number" ou "alpha"                                          |

**Retour :**

- String

### deleteItems

Supprimer une liste de fiches à partir de leurs IDs

**Paramètres :**

| Param              | Type    | Description                                                  |
|--------------------|---------|--------------------------------------------------------------|
| tableName          | string  | Nom de la table                                               |
| itemId             | string  | Liste de ID délimité par une ","                              |
| showMessageOnSuccess | boolean | Afficher un message quand la suppression est terminée : (true) ou (false).<br>Valeur par défaut : true. |
| onSuccess          | function | Fonction à appeler en cas de succès                          |

### deleteItem

Supprimer une fiche à partir de son ID ou KEY.

**Paramètres :**

| Param              | Type    | Description                                                  |
|--------------------|---------|--------------------------------------------------------------|
| tableName          | string  | Nom de la table                                               |
| itemId             | string  | ID ou KEY                                                     |
| showMessageOnSuccess | boolean | Afficher un message quand la suppression est terminée : (true) ou (false).<br>Valeur par défaut : true. |
| onSuccess          | function | Fonction à appeler en cas de succès                          |

### autocomplete

Proposer une liste de valeur d'une table dynamiquement sans passer par une connexion en renseignant les premiers caractères.

**Paramètres :**

| Param                  | Type  | Description                                                  |
|------------------------|-------|--------------------------------------------------------------|
| autocompletedElement   | id    | id du champ pour l'autocompletion                            |
| sourceTable            | string| Nom de la table de recherche                                 |
| sourceField            | string| Nom du champ à rechercher                                    |
| optionalFilterElement  | string| Valeur de filtre                                             |
| optionalFilterField    | string| Nom du champ pour le filtre                                  |
| maxValuesDisplayed     | int   | Nombre de valeurs à afficher.<br>Valeur par défaut : 10      |
| minLength              | int   | Nombre de caractères à renseigner avant de lancer la recherche.<br>Valeur par défaut : 0 |

> Remarque : Cette fonction doit être appelée dans l'évènement "onLoad" de la fiche.

_Exemple_

```plaintext
// Autocomplétion sur la liste des intitulés des fonctions enregistrées dans la table "fonction"
gopaas.util.autocomplete(thisComponent.ui.find('#fonction'),'fonction','intitule');

// Autocomplétion du champ code postal en filtrant sur la ville
gopaas.util.autocomplete(thisComponent.ui.find('#codepostal'),'postcode','postcode', thisComponent.ui.find('#ville'), 'city');
```
### logout  
Quitter une session utilisateur en cours.  
Cette fonction redirige l'utilisateur vers la page de "Connexion".

### loadWorkflow  
Charger un Workflow pour une fiche

**Paramètres :**

| Param        | Type   | Description                                                    |
|--------------|--------|----------------------------------------------------------------|
| thisComponent| object | L'objet représentant la fiche dans laquelle le code courant est exécuté. |
| tableName    | string | Nom de la table du Workflow                                    |

> Remarque : Cette fonction doit être appelée dans l'évènement "onLoad" de la fiche.

## gopaas.ui

### openTab  
Ouvrir un onglet existant

**Paramètres :**

| Param | Type   | Description        |
|-------|--------|--------------------|
| title | string | Nom de la table    |

**Retour :**

- True, si l'onglet existe
- False, si l'onglet n'existe pas

### closeActiveTab
Fermer l'onglet actif.

### forceCloseTab
Fermer un onglet depuis un composant ou un index

**Paramètres :**

| Param             | Type         | Description                                          |
|-------------------|--------------|------------------------------------------------------|
| componentOrTabIndex | object or int | Composant de type fiche, vue ou dashboard ou le numéro d'un onglet |

### forceCloseAllTab
Fermer tous les onglets sans demander d'enregistrement.

### closeAllTab
Fermer tous les onglets sauf ceux qui ont besoin d'être enregistrés.

### getTabIndex

**Paramètres :**

| Param     | Type         | Description                                |
|-----------|--------------|--------------------------------------------|
| component | object or int | Composant de type fiche, vue ou dashboard |

**Retour :**

- Index de l'onglet

### addTab
Ajouter un nouvel onglet.

**Paramètres :**

| Param  | Type   | Description                      |
|--------|--------|----------------------------------|
| title  | string | Titre de l'onglet                |
| content| string | Contenu de l'onglet (texte, html...) |

### renameTab
```javascript
renameTab(component, title, subtitle, color, borderColorOnly, tooltip, icon)
```

**Paramètres :**

| Param           | Type         | Description                                                |
|-----------------|--------------|------------------------------------------------------------|
| component       | object or int | Composant de type fiche, vue ou dashboard ou le numéro d'un onglet |
| title           | string       | Titre de l'onglet                                          |
| subtitle        | string       | Texte entre crochet, en plus petit, après le titre principal |
| color           | string       | Couleur en hexa du carré                                   |
| borderColorOnly | boolean      | Afficher une couleur que sur les bords. Valeur par défaut : False. |
| tooltip         | string       | Texte au survol l'onglet avec le curseur de la souris      |
| icon            | string       | Icône du type Fontawesome                                  |

## gopaas.date

### dateFr
Retourne la date du jour au format `dd/mm/yyyy`.

### dateSql
Retourne la date du jour au format `yyyy-mm-dd`.

### addDateMySQL
Ajoute un nombre de jours à la date du jour.

**Paramètres :**

| Param | Type | Description    |
|-------|------|----------------|
| days  | int  | Nombre de jours |

**Retour :**
- Date au format `yyyy-mm-dd`.

### time
Retourne l'heure actuelle au format `hh:mm:ss`.

### dateTime
Retourne la date et l'heure actuelles au format `yyyymmddhhmmss`.

### toFr
Convertit une date au format `yyyy-mm-dd` en `dd/mm/yyyy`.

**Paramètres :**

| Param   | Type   | Description            |
|---------|--------|------------------------|
| sqlDate | string | Date au format `yyyy-mm-dd` |

**Retour :**
- Date au format `dd/mm/yyyy`.

### toSql
Convertit une date au format `dd/mm/yyyy` en `yyyy-mm-dd`.

**Paramètres :**

| Param      | Type   | Description              |
|------------|--------|--------------------------|
| frenchDate | string | Date au format `dd/mm/yyyy` |

**Retour :**
- Date au format `yyyy-mm-dd`.


## gopaas.dialog

### fatal
Affiche une popup modale d'erreur fatale.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message fatal à afficher                     |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### error
Affiche une popup modale d'erreur utilisateur.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message d'erreur à afficher                  |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### warning
Affiche une popup modale d'avertissement.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message d'avertissement à afficher           |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### success
Affiche une popup modale de succès.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message de succès à afficher                 |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### info
Affiche une popup modale d'information.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message d'information à afficher             |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### okcancel
Affiche une modale de confirmation avec les boutons Ok/Annuler.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message de confirmation à afficher           |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### yesno / confirm
Affiche une modale de confirmation avec les boutons Oui/Non.

**Paramètres :**

| Param   | Type     | Description                                  |
|---------|----------|----------------------------------------------|
| message | string   | Message de confirmation à afficher           |
| onClose | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

### prompt
Affiche une modale de saisie.

**Paramètres :**

| Param       | Type     | Description                                  |
|-------------|----------|----------------------------------------------|
| message     | string   | Message à afficher                           |
| defaultValue| string   | Valeur par défaut dans le champ de saisie    |
| onClose     | callback | Fonction à appeler à la fermeture de la popup modale. Valeur par défaut : null |

## gopaas.webservice

### getItem
Récupère les données d'une fiche.

**Paramètres :**

| Param       | Type     | Description                                  |
|-------------|----------|----------------------------------------------|
| tableName     | string   | Nom de la table |
| itemKey| string   | Clé de la fiche |

**Retour :*
- Objet JSON

### getItems
Récupère les données d'une vue.

**Paramètres :**

| Param           | Type   | Description                                        |
|-----------------|--------|----------------------------------------------------|
| viewKey         | string | Clé de la vue                                      |
| advancedSearch  | string | Filtre avancé <br>Ex: `NOM_CHAMPS|equal|VALEUR|AND`    |

**Retour :**

- Objet JSON

### updateItem
Met à jour les données d'une fiche.

**Paramètres :**

| Param     | Type   | Description                                    |
|-----------|--------|------------------------------------------------|
| tableName | string | Nom de la table                                |
| id        | string | ID de la fiche                                 |
| data      | objet  | Objet avec les données de la fiche Ex : `{nom: 'GOORIAH', prenom:'Marvin'}` |

**Retour :**

- Ok

### updateItems
Met à jour les données de plusieurs fiches avec la clé.

**Paramètres :**

| Param     | Type   | Description                                    |
|-----------|--------|------------------------------------------------|
| tableName | string | Nom de la table                                |
| data      | array  | Array avec des objets de données par fiche. Le champ "clé" est obligatoire dans les objets. <br>Ex: `[{cle:'1234', nom: 'GOORIAH', prenom:'Marvin'}, {cle:'5678', nom: 'RUNGEN', prenom:'Jonathan'}]` |

**Retour :**

- Ok

### duplicateItem
Duplique une fiche avec les éléments enfants du premier sous-niveau.

**Paramètres :**

| Param         | Type   | Description                                    |
|---------------|--------|------------------------------------------------|
| tableName     | string | Nom de la table                                |
| itemKey       | string | Clé de la fiche                                |
| level         | int    | Définir si il faut prendre les fiches enfants de niveau 1 ou non. Valeurs possibles : 0 ou 1 |
| defaultValues | array  | Tableau avec une liste de valeur par table. <br>Ex: `[{tableName:"compte", data:{type : "Prospect", origine : "Site Web"}}, {tableName:"contact", data:{type : "Prospect", origine : "Site Web"}}]` |
| except        | array  | Tableau avec une liste de table à exclure. <br>Ex: `["action","affaire"]` |

**Retour :**

- Ok

**Exemple :**

```javascript
var defaultValues = [
    {
      tableName:"compte",
      data:{type : "Prospect", origine : "Site Web"}
    }];
var except = ["action","affaire"];

$.when(gopaas.webservice.duplicateItem("compte", thisComponent.getValue('cle'), 0, defaultValues, except)).done(function (data) {
  // ouvrir la copie
  ItemGeneric.open("compte", data.result.cle);

  gopaas.dialog.notifySuccess("Copie effectuée, ID de votre nouvelle fiche = " + data.result.id);

  // fermer l'original
  thisComponent.removeComponent();
});
```
