function distanceToTop(){
    var nav = document.getElementById('navbar')

    if (window.pageYOffset > 10) {
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
    
    return false;
}



window.onscroll = distanceToTop;