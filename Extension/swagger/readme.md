# Documentation Swagger - Intégration et Utilisation

## Introduction
Cette documentation guide les utilisateurs sur la manière d'intégrer et d'utiliser Swagger pour concevoir, documenter, et tester leurs APIs de manière efficace. Swagger permet une interaction fluide avec les endpoints, facilitant la recherche d'informations telles que les méthodes HTTP, les paramètres requis, et les types de réponses attendues.

## Étapes d'Installation

1. **Téléchargement :**
   - Téléchargez l'extension depuis Google Drive, situé dans le dossier "Extensions".

2. **Importation :**
   - Importez l'extension Swagger dans votre application.

## Mise en Place
Pour utiliser l'extension dans votre application, ajoutez le script suivant dans la configuration :

```javascript
addSwagger();
```

Pour déclarer un champ à prendre en compte dans Swagger, cochez la case Swagger dans l’onglet système du champ, depuis le Form Designer.

## Utilisation
1. Sélectionnez une table, puis les ressources nécessaires (LIST, ITEM, et ITEMS).
2. Pour la ressource LIST, sélectionnez une ou plusieurs vues.
3. Une fois les paramètres de la ressource définis, cliquez sur la flèche pointant vers la droite pour ajouter votre configuration au tableau de droite.
4. Lorsque votre configuration est terminée, cliquez sur le bouton “Télécharger le fichier .yaml”.
5. Rendez-vous ensuite sur le site [Swagger Editor](https://editor.swagger.io/) et importez le fichier `GoPaaS_api.yaml`.

## Résultat

   <img src="./images/exemple.png" alt="Hearder Top" style="border-radius: 4px;"/>