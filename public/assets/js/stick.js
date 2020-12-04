//header
window.addEventListener("scroll", function(){
   let header = document.getElementById("header");
   
   header.classList.toggle("header--active", window.scrollY > 0);
});

//whatsapp button
window.addEventListener("scroll", function(){
   let whatsapp = document.getElementById("whatsapp");
   
   whatsapp.classList.toggle("whatsapp__button--active", window.scrollY > 0);
});