function openNav() {
    var navbar = document.getElementById("navl");
    var myNav = document.getElementById("myNav");
    var hamburger = document.getElementById("nav-icon4");
    var humiaLogo = document.getElementById("humia-logo");
    if (navbar.style.left === "") {
        navbar.style.left = "-100%";
    }
    navbar.style.transition = "1.0s";
    if (navbar.style.left === "-100%") {
        navbar.style.left = "0%";
        hamburger.style.position = "fixed"
        humiaLogo.style.position = "fixed"
    } else {
        navbar.style.left = "-100%";
        myNav.style.position = "relative";
        hamburger.style.position = "relative"
        humiaLogo.style.position = ""
    }
}

window.addEventListener('resize', () => {
    var navbarLeft = document.getElementById("navl");
    var myNav = document.getElementById("myNav");
    var windowWidth = window.innerWidth;

    // Check if window width is less than 600px
    if (windowWidth > 768) {
        navbarLeft.style.transition = "none";
        navbarLeft.style.left = "0%";
        myNav.style.position = "";// Adjust width for smaller screens
    } else {
        navbarLeft.style.left = "-100%"; // Reset width for larger screens
    }
});

$(document).ready(function () {
    $('#nav-icon4').click(function () {
        $(this).toggleClass('open');
    });
});

$(document).ready(function () {
    let slifer = tns({
        container: '.my-slider',
        slideBy: 1,
        speed: 2000,
        nav: false,
        autoplay: false,
        controls: false,
        autoplayButtonOutput: false,
        autoplayTimeout: 2500,
        loop: true,
        responsive: {
            1600: {
                items: 5,
                gutter: 20
            },
            1024: {
                items: 4,
                gutter: 20,
            },
            768: {
                items: 3,
                gutter: 20
            },
            480: {
                items: 2,
            }
        }
    });
});