// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};
// Get the header
var header = document.getElementById("master-header");
var infoBar = document.getElementById("info-bar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

//scrollPosition > 100
// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky + 256) {
      header.classList.add("sticky");
      infoBar.style.display = "none";
  } else {
      header.classList.remove("sticky");
      infoBar.style.display = "initial";
  }

}