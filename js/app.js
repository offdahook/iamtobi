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
window.onscroll = distanceToTop;