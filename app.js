document.addEventListener('DOMContentLoaded', function() {
  loadSummary();
});

function loadSummary() {
  fetch('summary.json')
    .then(response => response.json())
    .then(summary => {
      const sidebar = document.getElementById('sidebar-left');
      summary.forEach(item => {
        const chapterElement = document.createElement('div');
        chapterElement.className = 'chapter';
        chapterElement.textContent = item.title;
        sidebar.appendChild(chapterElement);

        chapterElement.addEventListener('click', function() {
          // Nettoyer les sous-chapitres existants avant de charger un nouveau chapitre
          clearSubChapters();
          loadMarkdown(item.file);
        });
      });
    });
}

function clearSubChapters() {
  document.querySelectorAll('.sub-chapter').forEach(subChapter => subChapter.remove());
}

function loadMarkdown(filePath) {
  fetch(filePath)
    .then(response => response.text())
    .then(text => {
      const content = document.getElementById('content');
      let htmlContent = marked.parse(text);
      content.innerHTML = htmlContent;

      const tokens = marked.lexer(text);
      const sidebarRight = document.getElementById('sidebar-right');
      sidebarRight.innerHTML = ''; // Nettoyer pour les sous-chapitres

      tokens.forEach((token, index) => {
        if (token.type === 'heading' && token.depth === 2) {
          // Créer un identifiant unique pour chaque sous-chapitre
          const id = `sub-chapter-${index}`;

          // Ajouter l'identifiant à l'élément HTML correspondant au sous-chapitre
          htmlContent = htmlContent.replace(new RegExp(token.text), `<span id="${id}">${token.text}</span>`);

          // Créer et ajouter le lien du sous-chapitre à la sidebar de droite
          const subChapterElement = document.createElement('div');
          subChapterElement.textContent = token.text;
          subChapterElement.className = 'sub-chapter';
          subChapterElement.onclick = () =>
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
            // Adjust for fixed header or any offset
            const scrolledY = window.scrollY;
            if(scrolledY){
              window.scroll(0, scrolledY - 200); // Adjust 100px offset, change as needed
            }
          sidebarRight.appendChild(subChapterElement);
        }
      });

      // Mettre à jour le contenu HTML avec les identifiants ajoutés
      content.innerHTML = htmlContent;
    });
}
