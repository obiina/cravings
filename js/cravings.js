$(window).scroll(function() {
  if ($(this).scrollTop() > 150) {
    $("nav").addClass("dark-nav");
  } else if ($(this).scrollTop() <= 150) {
    $("nav").removeClass("dark-nav");
  }
});

$(document).ready(function() {
  var menu, all, breakfast, lunch, dinner, drinks, others, menuItem;
  menu = $(".menu_name");
  all = $(".allCtrl");
  breakfast = $(".breakfastCtrl");
  lunch = $(".lunchCtrl");
  dinner = $(".dinnerCtrl");
  drinks = $(".drinksCtrl");
  others = $(".othersCtrl");
  menuItem = $(".menu_item");

  menu.click(function() {
    menu.removeClass("active_menu_name");
    $(this).addClass("active_menu_name");
  });

  $(".removeOne").val("");
  $("#defaultOpen").click(function(event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#Information").offset().top - 240
      },
      700
    );
  });

  $("#Booking_Tab").click(function(event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#Booking").offset().top - 240
      },
      700
    );
  });

  $("#Events_Tab").click(function(event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#Events").offset().top - 130
      },
      700
    );
  });

  /*_______________________CONTROLS FOR HAMBURGER___________________*/
  var bars, body, goLeft, imgGoLeft, sideBar, comeLeft;

  bars = $(".bars-container");
  body = $("body");
  sideBar = $(".sideBar");
  goLeft = "goLeft";
  comeLeft = "comeLeft";
  imgGoLeft = "imgGoLeft";

  bars.click(function() {
    $(".site_title").toggleClass(comeLeft);
    bars.toggleClass(goLeft);
    sideBar.toggleClass(comeLeft);
  });
});

function toggle(b) {
  b.classList.toggle("change");
}

function openCity(evt, cityName) {
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

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
