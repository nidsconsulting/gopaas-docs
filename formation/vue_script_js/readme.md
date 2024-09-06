
# Script JS - Vue

## Description

Le thème abordé est la personnalisation des vues, avec la gestion des menus, la sélection multiple, et la surcharge de boutons pour ajouter des fonctionnalités.

### Menu outil

```
function onLoad_viewID_VIEW(datagrid){
  var thisComponent = this;

  var viewbar = Component.find("Viewbar", this);
  viewbar.addTool('<a style="text-decoration : none; color : #COULEUR_HEXADECIMAL" onclick="NOM_FONCTION()"><i class="ICONE" style ="margin-right: 1rem"></i><span class="trn">NOM_BOUTTON</span></a>');
}

function NOM_FONCTION(){
    // Ajouter une action.
}

```

Exemple :

```
function onLoad_view841(datagrid){
  var thisComponent = this;

  var viewbar = Component.find("Viewbar", this);
  viewbar.addTool('<a style="text-decoration : none; color : #333" onclick="NOM_FONCTION()"><i class="fas fa-exclamation-triangle" style ="margin-right: 1rem"></i><span class="trn">Appeler</span></a>');
}

function NOM_FONCTION(){
    // Ajouter une action.
}
```

### Sélection multiple

Dans les propriétés de la vue, cocher la case "multi-sélection".

```
function onLoad_viewID_VIEW(datagrid){
  var thisComponent=this;

  var viewbar = Component.find("Viewbar", this);

  viewbar.addTool("<i class='ICONE'></i><span class='trn'> NOM_BOUTTON</span>", NOM_FONCTION);

  function NOM_FONCTION() {
    var selectedItems = thisComponent.getAllSelectedRow();
    var nbFiches = selectedItems.length;
    var array = [];

    if (nbFiches > 0) {
      var i = 1;
      var j;

      var data;
   
      for (j = 0; j < nbFiches; j++) {
        data = selectedItems[j]['cle']; // Ce champ doit être présent dans la vue.
        console.log(data);
      } 
    } else {
      gopaas.dialog.warning("Merci de selectionner au moins une fiche !");
    }
  } 
}
```

Exemple :

```
function onLoad_view1068(datagrid){
  var thisComponent=this;

  var viewbar = Component.find("Viewbar", this);

  viewbar.addTool("<i class='fas fa-sms'></i><span class='trn'> Envoyer un SMS</span>", sendSMS);

  function sendSMS() {
    var selectedItems = thisComponent.getAllSelectedRow();
    var nbFiches = selectedItems.length;
    var array = [];

    if (nbFiches > 0) {
      var i = 1;
      var j;

      var compte;
      var contact;
      var mobile_client;

      for (j = 0; j < nbFiches; j++) {
        compte = selectedItems[j]['compte']; // Ce champ doit être présent dans la vue.
        contact = selectedItems[j]['contact']; // Ce champ doit être présent dans la vue.
        mobile_client = selectedItems[j]['mobile']; // Ce champ doit être présent dans la vue.

        var numMobile = "+33" + mobile_client.substr(1);
        var newKey = Date.now() + " " + UTILISATEUR["cle"]+"_"+i;
        array.push({"cle": newKey,
                    "type_action": "SMS",
                    "objet": "Envoie SMS",
                    "statut": "Planifiée",
                    "compte": compte,
                    "mobile_client": mobile_client,
                    "contact": contact,
                    "utilisateur": gsUser,
                    "date_debut": gopaas.date.addDateMySQL(0),
                    "heure_debut": gopaas.date.time(),
                    "date_fin": gopaas.date.addDateMySQL(0),
                    "heure_fin": gopaas.date.time(),
                    "notes": "Bonjour, Nous vous rappellons suite à votre demande. Contactez-nous du lundi au Vendredi de 9h/12h et 14h/16h Cdt.",
                  });
        if(i === nbFiches){
          $.when(
            gopaas.webservice.updateItems("action", JSON.stringify(array))
          ).done(function(data1){
            var jeasyuiDatagrid = thisComponent.ui.find(".datagrid-f:first");
            jeasyuiDatagrid.datagrid('reload');
            gopaas.dialog.success("SMS envoyé !");
          });
        }
        i++;
      }
    } else {
      gopaas.dialog.warning("Merci de selectionner au moins une fiche !");
    }
  } 
}
```

### Surcharger le bouton "Ajouter"

Dans les propriétés de la vue, onglet "Script JS", insérer le code suivant :

```
function onLoad_viewID_VIEW(datagrid) {

    var vb = this.ui.find(".Viewbar").data("component");
    var thisComponent = this;
    var itemComponent = Component.find("Item", this);

    // Ajout d'un sous menu sur Ajouter
    vb.addAddButton("NOM_BOUTTON", "TITRE_BOUTTON", {
        "CLEF": "VALEUR",
        "CLEF": "VALEUR",
        "CLEF": "VALEUR",
        ...
    });

    return true;

}
```

Exemple :

```
function onLoad_view942(datagrid) {

    var vb = this.ui.find(".Viewbar").data("component");
    var thisComponent = this;
    var itemComponent = Component.find("Item", this);

    vb.addAddButton("Règlement par virement", "Ajouter un règlement par virement", {
        "statut": "Validé",
        "mode": "Virement",
        "type": "Facture vente",
    });

    return true;

}
```

### Ajouter des options à côté du bouton "Ajouter" (Vue liée uniquement)

Dans les propriétés de la vue, onglet "Script JS", insérer le code suivant :

```
function onLoad_viewID_VIEW(datagrid) {
  var itemComponent = Component.find("Item", this);
  var thisComponent = this;

  var vb = this.ui.find(".Viewbar").data("component");

  vb.addAddButton("Nom du bouton", null, {
    fiedName: "value", 
    fiedName: "value", 
    ...
  });

  return true;
}

```

Exemple :

```
function onLoad_view847(datagrid) {
  var itemComponent = Component.find("Item", this);
  var thisComponent = this;

  var vb = this.ui.find(".Viewbar").data("component");

  vb.addAddButton("Appel sortant", null, {
    type: "Appel sortant", 
    objet: "Commercial", 
    statut: "En cours", 
    compte: itemComponent.getValue('compte'), 
    contact: itemComponent.getValue('contact'), 
    date_debut: gopaas.date.addDateMySQL(0), 
    heure_debut: gopaas.date.time()
  });

  return true;
}

```

## A noter : 

Pour trouver une icône : [fontawesome](https://fontawesome.com/v5/search)
Pour trouver une couleur en hexadécimal : [htmlcolorcodes](https://htmlcolorcodes.com/fr/)