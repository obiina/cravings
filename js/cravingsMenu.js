$(window).scroll(function() {
  if ($(this).scrollTop() > 150) {
    $("nav").addClass("dark-nav");
  } else if ($(this).scrollTop() <= 150) {
    $("nav").removeClass("dark-nav");
  }
});

$(document).ready(function() {
  var menu,
    all,
    breakfast,
    lunch,
    dinner,
    drinks,
    others,
    menuItem,
    national,
    continental,
    chicken,
    seafood,
    combo,
    platters,
    lean,
    nationalCorner,
    pasta,
    sides,
    nationalSides;
  menu = $(".menu_name");
  all = $(".allCtrl");
  breakfast = $(".breakfastCtrl");
  chicken = $(".chickenCtrl");
  seafood = $(".seafoodCtrl");
  lunch = $(".lunchCtrl");
  dinner = $(".dinnerCtrl");
  drinks = $(".drinksCtrl");
  others = $(".othersCtrl");
  combo = $(".comboCtrl");
  lean = $(".leanCtrl");
  sides = $(".sidesCtrl");
  nationalSides = $(".nationalsidesCtrl");
  pasta = $(".pastaCtrl");
  pork = $(".porkCtrl");
  nationalCorner = $(".nationalcornerCtrl");
  platters = $(".plattersCtrl");
  national = $(".nationalCtrl");
  continental = $(".soupCtrl");
  dessert = $(".dessertCtrl");
  menuItem = $(".menu_item");

  menu.click(function() {
    menu.removeClass("active_menu_name");
    $(this).addClass("active_menu_name");
  });

  all.click(function() {
    menuItem.hide();
    menuItem.fadeIn();
  });

  chicken.click(function() {
    menuItem.hide();
    $(".chicken").fadeIn();
  });

  sides.click(function() {
    menuItem.hide();
    $(".sides").fadeIn();
  });

  nationalSides.click(function() {
    menuItem.hide();
    $(".nationalSides").fadeIn();
  });

  seafood.click(function() {
    menuItem.hide();
    $(".seafood").fadeIn();
  });

  pork.click(function() {
    menuItem.hide();
    $(".pork").fadeIn();
  });

  combo.click(function() {
    menuItem.hide();
    $(".combo").fadeIn();
  });

  platters.click(function() {
    menuItem.hide();
    $(".platters").fadeIn();
  });

  lean.click(function() {
    menuItem.hide();
    $(".lean").fadeIn();
  });

  nationalCorner.click(function() {
    menuItem.hide();
    $(".nationalCorner").fadeIn();
  });

  pasta.click(function() {
    menuItem.hide();
    $(".pasta").fadeIn();
  });

  national.click(function() {
    menuItem.hide();
    $(".national").fadeIn();
  });

  continental.click(function() {
    menuItem.hide();
    $(".continental").fadeIn();
  });

  breakfast.click(function() {
    menuItem.hide();
    $(".breakfast").fadeIn();
  });

  dessert.click(function() {
    menuItem.hide();
    $(".dessert").fadeIn();
  });

  lunch.click(function() {
    menuItem.hide();
    $(".lunch").fadeIn();
  });

  dinner.click(function() {
    menuItem.hide();
    $(".dinner").fadeIn();
  });

  drinks.click(function() {
    menuItem.hide();
    $(".drinks").fadeIn();
  });

  others.click(function() {
    menuItem.hide();
    $(".others").fadeIn();
  });

  $(".place-card").hide();

  $(".button_patch").click(function(event) {
    event.preventDefault();
  });

  $(document).ready(function() {
    var menu,
      all,
      breakfast,
      lunch,
      dinner,
      drinks,
      others,
      menuItem,
      national,
      continental;
    menu = $(".menu_name");
    all = $(".allCtrl");
    national = $("nationalCtrl");
    continental = $("soupCtrl");
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

    all.click(function() {
      menuItem.hide();
      menuItem.fadeIn();
    });
    national.click(function() {
      menuItem.hide();
      alert("National")(".national").fadeIn();
    });

    continental.click(function() {
      menuItem.hide();
      ".continental".fadeIn();
    });

    breakfast.click(function() {
      menuItem.hide();
      $(".breakfast").fadeIn();
    });

    lunch.click(function() {
      menuItem.hide();
      $(".lunch").fadeIn();
    });

    dinner.click(function() {
      menuItem.hide();
      $(".dinner").fadeIn();
    });

    drinks.click(function() {
      menuItem.hide();
      $(".drinks").fadeIn();
    });

    others.click(function() {
      menuItem.hide();
      $(".others").fadeIn();
    });
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
