- **Supprimer le bouton `Annuler` et `Appliquer`**
```javaScript
    // Dans le script récupéreration dans la Qualif de Nids CRM; on cherche le h3 et c'est lui que l'on ajuste

```

- **Fixer les éléments titre de la fiche et les boutons**
```javaScript
    if(IS_MOBILE){
        // Titre de la fiche
        $('form > h3').css({
            "margin-top": "0px",
            "margin-bottom": "5px",
            "font-size": "1.2rem",
            "position": "fixed",
            "width": "100%",
            "top": "50px",
            "padding-top": "10px",
            "padding-bottom": "10px",
            "z-index": "800",
            "background-color": "rgb(255, 255, 255)"
        });

        // Fixer la section des Boutons de la fiche
        $('form > div').css({
            "position": "fixed",
            "width": "100%",
            "top": "80px",
            "padding-bottom": "10px",
            "z-index": "800",
            "background-color": "rgba(255, 255, 255, 0.8)",
            "border-bottom": "1px solid rgb(242, 242, 242)",
            "backdrop-filter": "blur(10px)" 
        });

        // Masquer Bouton Annuler et Appliquer de la fiche
        $('form > div > div > .gopaas-button-close').hide();
        $('form > div > div > .gopaas-button-save').hide();

        // Ajout du bouton retour 
        $("form > div > div").css({"display" : "flex"});
        // Script disponible sur la qualif de Nids CRM
    }
```

- **Ajuser les onglets**

```javaScript
    if(IS_MOBILE){
        // Fixer les onglets en bas 
        $('form').find('.nav-tabs').css({
            "position": "fixed",
            "width": "100%",
            "bottom": "0px",
            "left": "0px",
            "display": "flex",
            "z-index": "1000",
            "overflow": "scroll hidden",
            "background-color": "rgb(44, 59, 65)",
            "justify-content": "space-around"
        });

        // Ajuster les onglets 
        $('form > .nav-tabs').find('a').css({
            "border": "none",
            "padding": "10px 0px 15px",
            "margin": "0px",
            "width": "80px",
            "background-color": "rgb(44, 59, 65)",
            "text-align": "center"
        });

        // Faudrais aussi ajouter les icones.
    }
```

- **Ajuster le bouton menu outil**
```javaScript
    if(IS_MOBILE){
       $('form > div > div > div').find('#btn_action_menu').css({
        "position": "fixed",
        "bottom": "0",
        "margin-top": "100%",
        "z-index": "1000",
        "width": "100%",
        "padding": "10px",
        "border-bottom": "none",
        "border-left": "none",
        "border-right": "none",
        "border-radius": "0",
        "transition": "bottom 0.5s ease-in-out"
    });

    // Pour déclencher la transition, vous pouvez changer la valeur de `bottom`
     $('form > div > div > div').find('#btn_action_menu').on('click', function() {
        $(this).css('bottom', '100%');
    });
     $('form > div > div > div').find('#btn_action').on('click', function() {
            var isExpanded = $(this).attr('aria-expanded') === 'true';
        
            if (isExpanded) {
                $('.tab-content').css('opacity', '0.5');
            } else {
                $('.tab-content').css('opacity', '1');
            }
    });


        $('form > div > div > div > .#btn_action_menu > li').find('a').css({
            "padding": "7px 20px"
        });
    }
```