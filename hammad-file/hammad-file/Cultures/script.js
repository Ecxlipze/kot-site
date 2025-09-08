function toggleMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}

function toggleDropdown(element) {
    const dropdown = element.nextElementSibling;
    dropdown.classList.toggle('hidden');
}

function changeLanguage(lang, flagSrc) {
    document.getElementById('selected-lang').textContent = lang;
    document.getElementById('selected-flag').src = flagSrc;
    
}

function toggleSearch() {
    const searchMenu = document.getElementById('search-menu');
    const navbar = document.getElementById('main-navbar');
    searchMenu.classList.toggle('hidden');
    navbar.classList.toggle('hidden');
}