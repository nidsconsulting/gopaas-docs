- **Supprimer les informations qui se trouvent dans le footer de la vue**
Mettre des `hide()`.

```javaScript
      if(IS_MOBILE){
        $(".pagination-info").hide();
        $(".pagination-last").hide();
        $(".pagination-first").hide();
        $('.datagrid').css({
            "display": "flex",
            "justify-content": "center"
        });
    }
```