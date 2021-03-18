$(document).ready(function() {


  
});

//flexslider
$(window).on('load', function() {
	// The slider being synced must be initialized first
	$('#carousel').flexslider({
	  animation: "slide",
	  controlNav: false,
	  animationLoop: false,
	  slideshow: false,
	  itemWidth: 210,
	  itemMargin: 5,
	  asNavFor: '#slider'
	});
   
	$('#slider').flexslider({
	  animation: "slide",
	  controlNav: false,
	  animationLoop: false,
	  slideshow: false,
	  sync: "#carousel",
	  itemWidth: 650,
	});
  });


//tabs
// window.addEventListener("load", function load() {
// 	document.getElementById("defaultOpen").click();
// 	});

function openTab(evt, tabName) {
	// Declare all variables
	var i, tabcontent, tablinks;
  
	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	  tabcontent[i].style.display = "none";
	}
  
	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
  
	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(tabName).style.display = "block";
	evt.currentTarget.className += " active";
  }
