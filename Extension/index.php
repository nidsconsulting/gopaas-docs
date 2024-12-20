<html>

<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
</head>
    <body>

    <?php

require 'Parsedown.php'; // Assure-toi que le chemin est correct

$parsedown = new Parsedown();
$rubrique = $_REQUEST["rub"];


// Chemin vers ton fichier Markdown
$markdownPath = $rubrique.'/readme.md';

// Lire le contenu du fichier Markdown
$markdown = file_get_contents($markdownPath);

$markdown = str_replace("images", $rubrique."/images", $markdown);

// Convertir le Markdown en HTML
$html = $parsedown->text($markdown);

// Créer une nouvelle instance de DOMDocument et charger le HTML
$doc = new DOMDocument();
@$doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

// Utiliser DOMXPath pour faciliter la recherche dans le document
$xpath = new DOMXPath($doc);

// Trouver tous les éléments <h2>
$elements = $xpath->query('//h2|//h3');


// Initialiser un compteur pour les IDs
$idCounter = 1;

$sommaire = "";
// Parcourir tous les éléments <h2> trouvés
foreach ($elements as $element) {

  if ($element->tagName === 'h2') {
    $id = "section-" . $idCounter;
    $currentH2Id = $id; // Conserver l'ID du h2 courant pour les h3 enfants
    $element->setAttribute('id', $id);
    $titre = $element->nodeValue;
    $sommaire .= "<div class=\"sub-chapter\"><a href=\"#$id\">$titre</a></div>";
  } elseif ($element->tagName === 'h3' && !empty($currentH2Id)) {
      // Pour les h3, créer un ID lié à celui du h2 parent
      $id = $currentH2Id . "-sub-" . $idCounter;
      $element->setAttribute('id', $id);
      $titre = $element->nodeValue;
      // Ajouter un style ou une classe différente si tu veux distinguer visuellement les h3
      $sommaire .= "<div class=\"sub-chapter-detail\"><a href=\"#$id\">$titre</a></div>";
  }

  $idCounter++;
}

// Sauvegarder les modifications dans une nouvelle variable HTML
$html = $doc->saveHTML();


?>

<div class="container">
    <div id="sidebar-left">
      <div id="sidebar-left-title">
        <img src="../asset/question.png" width="30px"/>&nbsp;&nbsp;GoPaaS Extension
      </div>
      <div class="chapter" onclick="window.location.href='index.php?rub=dropfile'">Dropfile</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=itemAddButton'">itemAddButton</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=viewExportCompta'">viewExportCompta</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=viewExtractPDF'">viewExtractPDF</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=viewImageGallery'">viewImageGallery</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=viewMapDirection'">viewMapDirection</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=swagger'">Swagger</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=societe.com'">Societe.com</div>
      <div class="chapter" onclick="window.location.href='index.php?rub=vscode'">GoPaaS Script Editor</div>
    </div>
    <div id="content">

<?php // Afficher le HTML
echo $html;
?>
    </div>
    <div id="sidebar-right">
  <?php echo $sommaire;?>

    </div>
</div>


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

