<html>

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
<style>
    .copy-btn {
  position: absolute;
  right: 0;
  top: 0;
  padding: 5px 10px;
  margin: 5px;
  cursor: pointer;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 3px;
}

/* Style de base pour le tableau */
table {
  border-collapse: collapse; /* Fusionne les bordures des cellules */
  width: 100%; /* Utilise toute la largeur disponible */
  box-shadow: 0 2px 15px rgba(0,0,0,0.1); /* Ajoute une légère ombre pour un effet en profondeur */
  background-color: #ffffff; /* Arrière-plan blanc pour les cellules */
  overflow: hidden; /* Garde l'ombre à l'intérieur des limites du tableau */
  border-radius: 8px; /* Bordures arrondies pour le tableau */
  margin-top: 20px; /* Espacement au-dessus du tableau */
}

/* Style pour les en-têtes du tableau */
table th {
  background-color: #f4f4f4; /* Couleur d'arrière-plan pour les en-têtes */
  color: #333; /* Couleur du texte pour les en-têtes */
  font-weight: bold; /* Texte en gras pour les en-têtes */
  text-align: left; /* Alignement du texte à gauche */
  padding: 12px 15px; /* Espacement interne pour les cellules */
}

/* Style pour les cellules du tableau */
table td {
  padding: 10px 15px; /* Espacement interne pour les cellules */
  border-bottom: 1px solid #eaeaea; /* Ligne de séparation entre les lignes */
  color: #333; /* Couleur du texte pour les cellules */
}

/* Style pour les lignes au survol */
table tr:hover {
  background-color: #f5f5f5; /* Changement de couleur d'arrière-plan au survol */
}

/* Style pour assurer la visibilité du texte sélectionné (en cas de survol) */
table tr:hover td {
  color: #333;
}


pre {
  position: relative;
}
body{
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI","Noto Sans",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
    padding: 20px;
    }
</style>
</head>
    <body>

    <?php

require 'Parsedown.php'; // Assure-toi que le chemin est correct

$parsedown = new Parsedown();

// Chemin vers ton fichier Markdown
$markdownPath = 'help.md';

// Lire le contenu du fichier Markdown
$markdown = file_get_contents($markdownPath);

// Convertir le Markdown en HTML
$html = $parsedown->text($markdown);

// Afficher le HTML
echo $html;
?>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
  hljs.highlightAll();

  document.querySelectorAll('pre code').forEach((block) => {
    var btn = document.createElement('button');
    btn.className = 'copy-btn';
    btn.textContent = 'Copier';
    btn.addEventListener('click', () => {
      navigator.clipboard.writeText(block.textContent).then(() => {
        btn.textContent = 'Copié!';
        setTimeout(() => btn.textContent = 'Copier', 2000); // Réinitialiser le texte après 2s
      });
    });

    block.parentNode.insertBefore(btn, block);
  });
});
</script>

    </body>
</html>

