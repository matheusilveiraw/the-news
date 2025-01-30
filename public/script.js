feather.replace();

document.getElementById('menu-btn').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

const searchBtn = document.getElementById('search-btn');
const searchInput = document.getElementById('search-input');

searchBtn.addEventListener('click', function() {
    searchInput.classList.toggle('hidden');
    searchInput.focus();
});

// Evento para capturar a tecla "Enter" na pesquisa
searchInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        const query = searchInput.value.trim();
        if (query !== "") {
            window.location.href = `/buscar?q=${encodeURIComponent(query)}`;
        }
    }
});

// Verificação se o script está carregando corretamente
document.addEventListener("DOMContentLoaded", function () {
    console.log("Script carregado!");  // Teste de carregamento

    alert('!!!');  // Deve aparecer se o script estiver funcionando
});