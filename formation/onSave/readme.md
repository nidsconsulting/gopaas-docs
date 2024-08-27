
# Script JS - onSave

## Description

Le thème abordé est l'utilisation de fonctions pour assigner, récupérer et gérer des valeurs dans un programme, ainsi que la connexion entre différents éléments.

### Champ Cle

La création de la clé d'une fiche se crée de la façon suivante :

```
var cle = Date.now() + "_" +gsUser;
```

Enfin il est nécessaire d'insérer la valeur générée dans le champ clef de notre fiche :

```
thisComponent.setValue("cle", cle);
```

De facon général, la mise en place de clef de fait automatiquement dans la fonction onSave :

```
function onSave_compte(){
    var thisComponent = this;
    if(thisComponent.isNew()){
        var cle = Date.now() + "_" +gsUser;
        thisComponent.setValue("cle", cle);
    }
    return true;
}
```

### Fonctionnalité getValue

```
thisComponent.getValue("NOM_CHAMP");
```

Exemple :

```
function onSave_compte(){
    var thisComponent = this;

    var compte = thisComponent.getValue("compte");
    console.log(compte);
}
```

### Fonctionnalité setValue

```
thisComponent.setValue("NOM_CHAMP","VALEUR");
```

Exemple :

```
function onSave_compte(){
    var thisComponent = this;

    thisComponent.setValue("statut","Nouveau");
}
```

### Fonctionnalité addItem

```
gopaas.webservice.updateItem("NOM_TABLE", "new", {
    CLEF: VALEUR,
    CLEF: VALEUR,
    CLEF: VALEUR,
    ...
    date_creation: gopaas.date.dateSql(),
    heure_creation: gopaas.date.time(),
    creation_par: UTILISATEUR['cle'],
    gestion_par: UTILISATEUR['cle'],
}).done(function(done){

});
```

Exemple :

```
function onSave_compte(){
    var thisComponent = this;

    var cle_compte = Date.now() + "_" +gsUser;

    gopaas.webservice.updateItem("compte", "new", {
        cle: cle_compte,
        type: "Client",
        ...
        date_creation: gopaas.date.dateSql(),
        heure_creation: gopaas.date.time(),
        creation_par: UTILISATEUR['cle'],
        gestion_par: UTILISATEUR['cle'],
    }).done(function(done){
        gopaas.dialog.success("Nouveau compte cré !");
    });
}
```

### Fonctionnalité setConnectionValue

```
thisComponent.setConnectionValue("NOM_CHAMP","NOM_TABLE","VALEUR");
```

Exemple :
```
function onSave_compte(){
    var thisComponent = this;

    thisComponent.setConnectionValue("compte","compte","CLEF_1");
}
```