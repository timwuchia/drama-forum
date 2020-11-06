document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('header .hamburger');
    const mainNav = document.querySelector('header .main-navigation');
    const userProfileBtn = document.querySelector('header .profile-toggle');
    const userNav = document.querySelector('header .user-navigation');

    function toggleMenu () {
        this.classList.toggle('is-active');
        mainNav.classList.toggle('show');
        userNav.classList.remove('show')
    }
    hamburger.addEventListener('click', toggleMenu);

    
    function toggleProfile () {
        this.classList.toggle('is-active');
        hamburger.classList.remove('is-active');
        userNav.classList.toggle('show');
        mainNav.classList.remove('show');
    }
    userProfileBtn.addEventListener('click', toggleProfile)
});