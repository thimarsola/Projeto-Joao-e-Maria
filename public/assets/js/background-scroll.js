const background = document.getElementById('hero');

window.addEventListener('scroll', function(){
   background.style.backgroundSize = 150 - +window.pageYOffset/12+'%'; 
})