require('./bootstrap');

import owlCarousel from 'owl.carousel';


// RESPONSIVE MENU 
var btnMenu = document.getElementById('burger-menu');
var leMenu = document.getElementById('leMenu');
var btnClose = document.getElementById('close-menu');
var main = document.getElementById('main');
var footer = document.getElementById('footer');

btnMenu.addEventListener("click",openMenu);
btnClose.addEventListener("click",closeMenu);

function openMenu() {
    leMenu.classList.remove('fadeOutDown');
    leMenu.classList.add('animated');
    leMenu.classList.add('fadeInUp');
    leMenu.classList.add('menu-mobile');
    leMenu.classList.remove('menu');
    btnClose.classList.remove('di-none');
    btnMenu.classList.add('di-none');
    main.classList.add('di-none');
    footer.classList.add('di-none');
}

function closeMenu() {
    leMenu.classList.remove('fadeInUp');
    leMenu.classList.add('fadeOutDown');
    btnClose.classList.add('di-none');
    setTimeout(function(){ leMenu.classList.add('menu'); }, 1000);
    setTimeout(function(){ leMenu.classList.remove('menu-mobile'); }, 1000);
    setTimeout(function(){ btnMenu.classList.remove('di-none'); }, 1000);
    setTimeout(function(){ main.classList.remove('di-none'); }, 1000);
    setTimeout(function(){ footer.classList.remove('di-none'); }, 1000);
    setTimeout(function(){ leMenu.classList.remove('animated'); }, 1000);
}


//OWL Carousel
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
	items:3,
    loop:true,
    margin:40,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
})






/// ANIM ON SCROLL

new WOW().init();









