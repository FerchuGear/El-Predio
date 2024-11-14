(function() {
    "use strict";
    
    var menuIcon = document.querySelector('.menu-icon');
    var body = document.querySelector('body');

    if (menuIcon) {
        menuIcon.addEventListener('click', function() {
            body.classList.toggle('nav-active');
        });
    }
})();
