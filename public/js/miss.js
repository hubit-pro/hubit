var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("miss1");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2500); // Change image every 1.5 seconds
}