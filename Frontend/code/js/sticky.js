// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var nav2 = document.querySelector(".nav2");

// Get the offset position of the navbar
var sticky = nav2.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    nav2.classList.add("sticky")
  } else {
    nav2.classList.remove("sticky");
  }
}