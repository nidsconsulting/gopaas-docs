- **Rendre la barre d'outils fix** `📁index.php`  
    Fixation du header de l'application afin qu'il reste toujours visible en haut de la page, peu importe le défilement de la page.
    ```html
        <!-- AVANT -->
        <header class="main-header">...</header>
        <div class="content-wrapper" style="min-height: 706px;">...</div>

        <!-- APRES -->
        <header class="main-header" style="position: fixed; width: 100%; top:-1px">...</header>
        <!-- Juste après le Header on crèe une div Personnalisée -->
        <div style="width:100%;height:50px;"></div>
        <div class="content-wrapper" style="margin-left: 0px;">...</div>

    ```
    <img src="../images/Image1.gif" width="40%" alt="Hearder Top" style="border-radius: 2rem;"/> 

- **Afficher groupe et profil de l'utilisateur** `📁index.php`
  
     ```html
        <!-- Avant -->
		<p class="hidden-md hidden-xs">
		      <?php echo Script::$user["prenom"]; ?> <?php echo Script::$user["nom"]; ?><br /><?php echo Script::$user["profil"]; ?>/<?php echo Script::$user["groupe"]; ?>
		    <small><?php echo Script::$user["email"]; ?></small>
		</p>

        <!-- Après -->
        <p>
            <?php echo Script::$user["prenom"]; ?> <?php echo Script::$user["nom"]; ?><br /><?php echo Script::$user["profil"]; ?>/<?php echo Script::$user["groupe"]; ?>
            <small><?php echo Script::$user["email"]; ?></small>
		</p>
    ```   