const background = document.getElementById('hero');


function mediaQuery(x) {
    if (x.matches) {
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 330 - +window.pageYOffset / 12 + '%';
        });
    } else {
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 150 - +window.pageYOffset / 12 + '%';
        });
    }
}

var x = window.matchMedia("(max-width: 425px");
mediaQuery (x);
x.addListener(mediaQuery);