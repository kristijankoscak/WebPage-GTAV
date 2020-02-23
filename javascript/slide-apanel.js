var infoIndex = 1;
currentInfo(infoIndex);

function currentInfo(n) {
  showInfo(infoIndex = n);
}

function showInfo(n) {
    var i;
    var slides = document.getElementById("ap-list");
    var dots = document.getElementById("ap-slide");
    if (n > slides.length) {infoIndex = 1}    
    if (n < 1) {infoIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display= "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[infoIndex-1].style.display = "block";  
    dots[infoIndex-1].className += " active";
}
