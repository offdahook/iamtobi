function distanceToTop(){
    var nav = document.getElementById('navbar')
    var windowWidth = document.getElementById('jumbo').clientWidth;

    if  (windowWidth > 700){
        if (window.pageYOffset > 10) {
        nav.style.transition = "all 1s"  
        nav.style.backgroundColor = 'rgba(0,0,0,1.0)'
        }
        else {
            nav.style.transition = "all 1s"
            nav.style.backgroundColor = 'rgba(0,0,0,0.0)'
        }
    }
    else {

    }
}   

function toggleSearchbar(){
    var searchbar = document.getElementById('search-bar');   
    searchbar.classList.toggle('hidden');
}

function toggleResponsiveMenu(){
    var navbar = document.getElementById('navbar');
    var burgerIcon = document.getElementById('burger-icon'); 
    var burgerMenu = document.getElementById('burger-menu'); 
    var logo = document.getElementById('logo');
    var mainNav = document.getElementById('main-nav');
    var altNav = document.getElementById('alt-nav');
    var searchbar = document.getElementById('search-bar');  
    var siteBody = document.querySelector('body');
  
    navbar.classList.toggle ('responsive-menu');
    navbar.classList.toggle('responsive-nav');
    burgerIcon.classList.toggle('fa-bars');
    burgerIcon.classList.toggle('fa-close');
    burgerMenu.classList.toggle('responsive-pos');    
    logo.classList.toggle('hidden');
    mainNav.classList.toggle('hidden');
    altNav.classList.toggle('hidden');
    searchbar.classList.add('hidden');
    siteBody.classList.toggle('menu-open');
}

function responsiveCheck(){    
    var mainNav = document.getElementById('main-nav');
    var altNav = document.getElementById('alt-nav');
    var windowWidth = document.querySelector('body').clientWidth;
    
    if (windowWidth < 700) {
        mainNav.classList.add ('hidden');
        altNav.classList.add ('hidden');
    } 
    else {
        mainNav.classList.remove ('hidden');
        altNav.classList.remove ('hidden');
    }

}

window.onscroll = distanceToTop;
window.onload = responsiveCheck;
window.onresize = responsiveCheck;