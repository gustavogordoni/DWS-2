// Função para trocar o modo entre light e dark
function temaDark() {
    var html = document.querySelector('html');
    
    html.setAttribute('data-bs-theme', 'dark');
}

function temaLight() {
    var html = document.querySelector('html');

    html.setAttribute('data-bs-theme', 'light');
}
