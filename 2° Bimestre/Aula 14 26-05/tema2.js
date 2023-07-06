function alterarTema() {
    var html = document.querySelector('html');
    var tema = html.getAttribute('data-bs-theme');

    if (tema === 'light') {
      html.setAttribute('data-bs-theme', 'dark');
      document.getElementById('themes').classList.remove('dark');
      document.getElementById('themes').classList.add('light');
      document.getElementById('button-text').textContent = 'Light Mode';
    } else {
      html.setAttribute('data-bs-theme', 'light');
      document.getElementById('themes').classList.remove('light');
      document.getElementById('themes').classList.add('dark');
      document.getElementById('button-text').textContent = 'Dark Mode';
    }
  }
  document.getElementById('themes').addEventListener('click', alterarTema);