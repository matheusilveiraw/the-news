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

searchInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        window.location.href = '/buscar?query=' + searchInput.value;
    }
});