
# Script JS - onLoad

## Description

Le thème abordé est la manipulation d'éléments d'interface tels que des champs, des onglets et des sections, avec la création de boutons et la gestion d'événements dans un composant.

### thisComponent

```
var thisComponent = this;
```

Exemple :

```
async function onLoad_compte (){
    var thisComponent = this;

    return true;
}
```

### Masquer

- Champs :

    ```
    thisComponent.ui.find('#ID_CHAMP').closest('.form-group').hide();
    ```
    Exemple : 

    ```
    thisComponent.ui.find('#type').closest('.form-group').hide();
    ```

- Onglet :

    ```
    thisComponent.ui.find("li[role='NOM_ONGLET'] a:contains('Central Office')").hide();
    ```
    Exemple : 

    ```
    thisComponent.ui.find("li[role='action'] a:contains('Central Office')").hide();
    ```

- Section :

    ```
    thisComponent.ui.find('#SECTION_ID').hide();
    ```
    Exemple : 

    ```
    thisComponent.ui.find('#section_1425').hide();
    ```

### Créer un bouton

Pour trouver une icône : [fontawesome](https://fontawesome.com/v5/search)
Pour trouver une couleur en hexadécimal : [htmlcolorcodes](https://htmlcolorcodes.com/fr/)

Class disponible pour les boutons :
- btn btn-warning btn-md
- btn btn-danger btn-md
- btn btn-success btn-md
- btn btn-info btn-md

```
      thisComponent.ui.find("[name=ID_BOUTON_POSITIONEMENT]").closest(".form-group").append("<button id='ID_BOUTON' type='button' class='CLASS_BOUTON' style='float: right; margin-right: 15px; margin-top: 5px;' title='TITRE_BOUTON'><span class='ICONE_BOUTON'></span><span class='trn'> NOM_BOUTON</span></button>");
      thisComponent.ui.find("#ID_BOUTON").on('click', function () {
        // Ajouter une action.
      });
```

Exemple : 
```
      thisComponent.ui.find("[name=adresse]").closest(".form-group").append("<button id='btnMap' type='button' class='btn btn-warning btn-md' style='float: right; margin-right: 15px; margin-top: 5px;' title='Voir l'adresse sur Google Maps'><span class='fa fa-map-marker'></span><span class='trn'> Google Maps</span></button>");
      thisComponent.ui.find("#btnMap").on('click', function () {
        var adresse = thisComponent.getValue("adresse");
        window.open("http://maps.google.com/maps?q=" + adresse);
      });
```

### Evénement sur un champs

L'évènement "change" détecte un changement dans le champ.

```
thisComponent.ui.find("#[ID_CHAMP]").on("change",function(){
   // Ajouter une action.
});
```
Exemple :
```
thisComponent.ui.find("#montant_ht").on("change",function(){
  calculMontant(thisComponent);
});
```

### Menu addTool

Pour trouver une icône : [fontawesome](https://fontawesome.com/v5/search)
Pour trouver une couleur en hexadécimal : [htmlcolorcodes](https://htmlcolorcodes.com/fr/)

```
  thisComponent.addTool("<i class='ICONE' style='color:#COULEUR_HEXADECIMAL' aria-hidden='true'></i> <span class='trn'>NOM_BOUTTON</span>", "NOM_BOUTTON", function () {
    // Ajouter une action.
  });
```

Exemple : 

```
  thisComponent.addTool("<i class='fa fa-file-o' style='color:#ff0000' aria-hidden='true'></i> <span class='trn'>Imprimer</span>", "Imprimer", function () {
    fusionWord(thisComponent);
  });
```