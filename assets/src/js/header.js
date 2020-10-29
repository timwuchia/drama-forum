document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('header .hamburger');
    const mainNav = document.querySelector('header .main-navigation');
    
    function toggleMenu () {
        console.log('toggled')
        this.classList.toggle('is-active');
        mainNav.classList.toggle('show')
    }
    hamburger.addEventListener('click', toggleMenu);

    const userProfileBtn = document.querySelector('header .profile-toggle');
    const userNav = document.querySelector('header .user-navigation');
    function toggleProfile () {
        console.log('toggled')
        this.classList.toggle('is-active');
        userNav.classList.toggle('show')
    }
    userProfileBtn.addEventListener('click', toggleProfile)
});