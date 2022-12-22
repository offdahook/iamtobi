function distanceToTop(){
    var nav = document.getElementById('navbar')
    var windowWidth = document.getElementById('jumbo').clientWidth;

    if (window.pageYOffset > 10 && windowWidth > 700) {
       nav.style.transition = "all 1s"  
       nav.style.backgroundColor = 'rgba(0,0,0,1.0)'
    }
    else {
        nav.style.transition = "all 1s"
        nav.style.backgroundColor = 'rgba(0,0,0,0.0)'
    }
}   

function toggleSearchbar(){
    var searchbar = document.getElementById('search-bar');   
    var searchbarForm = document.getElementById('search');   
    
    if (searchbar.style.display ==="flex"){
        searchbar.style.display = "none"
    }
    else {
        searchbar.style.display = "flex"; 
        searchbarForm.focus(); 
    }    
}

function toggleResponsiveMenu(){

}

window.onscroll = distanceToTop;