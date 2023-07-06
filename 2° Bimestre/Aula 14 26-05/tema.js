    // Função para trocar o modo entre light e dark
    function tema() {
      var html = document.querySelector('html');
      var tema = html.getAttribute('data-bs-theme');

      if (tema === 'light') {
        html.setAttribute('data-bs-theme', 'dark');
        document.getElementById('alterar_tema').classList.remove('btn-dark');
        document.getElementById('alterar_tema').classList.add('btn-light');
        document.getElementById('alterar_tema').textContent = 'Light mode';
      } else {
        html.setAttribute('data-bs-theme', 'light');
        document.getElementById('alterar_tema').classList.remove('btn-light');
        document.getElementById('alterar_tema').classList.add('btn-dark');
        document.getElementById('alterar_tema').textContent = 'Dark mode';
      }
    }
    document.getElementById('alterar_tema').addEventListener('click', tema);