/* global e */

const background = document.getElementById('hero');

const mediaDesktop = window.matchMedia('(min-width: 1025px)');
const mediaTabletPro = window.matchMedia('(max-width: 1024px)');
const mediaTablet = window.matchMedia('(max-width: 768px)');
const mediaPhone = window.matchMedia('(max-width: 425px)');
const mediaPhoneSmall = window.matchMedia('(max-width: 375px)');

//min-width: 1025px
function sizeMediaDesktop(mediaDesktop){
    if (mediaDesktop.matches){
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 150 - +window.pageYOffset / 12 + '%';
        });
    }
}
sizeMediaDesktop (mediaDesktop);
mediaDesktop.addListener(sizeMediaDesktop);

//max-width: 1024px
function sizeMediaTabletPro(mediaTabletPro){
    if (mediaTabletPro.matches){
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 280 - +window.pageYOffset / 12 + '%';
        });
    }
}
sizeMediaTabletPro (mediaTabletPro);
mediaTabletPro.addListener(sizeMediaTabletPro);

//max-width: 768px
function sizeMediaTablet(mediaTablet){
    if (mediaTablet.matches){
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 250 - +window.pageYOffset / 12 + '%';
        });
    }
}
sizeMediaTablet (mediaTablet);
mediaTablet.addListener(sizeMediaTablet);

//max-width: 425px
function sizeMediaPhone(mediaPhone){
    if (mediaPhone.matches){
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 350 - +window.pageYOffset / 12 + '%';
        });
    }
}
sizeMediaPhone (mediaPhone);
mediaPhone.addListener(sizeMediaPhone);

//max-width: 375px
function sizeMediaPhoneSmall(mediaPhoneSmall){
    if (mediaPhoneSmall.matches){
        window.addEventListener('scroll', function () {
            background.style.backgroundSize = 380 - +window.pageYOffset / 12 + '%';
        });
    }
}
sizeMediaPhoneSmall (mediaPhoneSmall);
mediaPhoneSmall.addListener(sizeMediaPhoneSmall);

//function mediaQuery(x) {
//    if (x.matches) {
//        window.addEventListener('scroll', function () {
//            background.style.backgroundSize = 250 - +window.pageYOffset / 12 + '%';
//        });
//    }else {
//        window.addEventListener('scroll', function () {
//            background.style.backgroundSize = 150 - +window.pageYOffset / 12 + '%';
//        });
//    }
//}
//
//var x = window.matchMedia("(max-width: 768px)");
//mediaQuery (x);
//x.addListener(mediaQuery);
//
//var y = window.matchMedia("(max-width: 425px)");
//mediaQuery (y);
//y.addListener(mediaQuery);