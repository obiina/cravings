$(document).ready(function() {
  var left, right, first, last, previous, next, c, active;
  active = "active-carousel";
  left = $(".left-btn");
  right = $(".right-btn");
  c = $(".carousel-one");
  first = c.first();
  last = c.last();
  previous = c.prev();
  next = c.next();

  c.removeClass(active).hide();
  c
    .first()
    .addClass(active)
    .show();
  c.last().removeClass(active);

  /*left.click(function () {
        if (first.hasClass(active)) {
            c.removeClass(active).fadeOut();
            last.addClass(active).fadeIn();
        } else if (last.hasClass(active)) {
            c.removeClass(active).fadeOut()
            $(document).find(last).prev().addClass(active).fadeIn();
       } else {
            $(document).find('.active-carousel').prev().addClass(active).fadeIn();
            $(document).find('.active-carousel').not($(document).find('.active-carousel').prev()).fadeOut().removeClass(active);

       }
    })*/

  /* 
       MAIN RIGHT CLICK FUNCTION

    right.click(function () {
        if (first.hasClass(active)) {
            c.removeClass(active).fadeOut();
            $(document).find(first).next().addClass(active).fadeIn();
        } else if (last.hasClass(active)) {
            c.removeClass(active).fadeOut();
            first.addClass(active).fadeIn();
        } else {
            $(document).find('.active-carousel').next().addClass(active).fadeIn();
            $(document).find('.active-carousel').not($(document).find('.active-carousel').next()).fadeOut().removeClass(active);
        }
    })

    */

  left.click(function() {
    if (first.hasClass(active)) {
      c.removeClass(active).slideUp();
      last.addClass(active).slideDown();
    } else if (last.hasClass(active)) {
      c.removeClass(active).slideUp();
      $(document)
        .find(last)
        .prev()
        .addClass(active)
        .slideDown();
    } else {
      $(document)
        .find(".active-carousel")
        .prev()
        .addClass(active)
        .slideDown();
      $(document)
        .find(".active-carousel")
        .not(
          $(document)
            .find(".active-carousel")
            .prev()
        )
        .slideUp()
        .removeClass(active);
    }
  });

  right.click(function() {
    if (first.hasClass(active)) {
      c.removeClass(active).slideUp();
      $(document)
        .find(first)
        .next()
        .addClass(active)
        .slideDown();
    } else if (last.hasClass(active)) {
      first.addClass(active).slideDown();
      last.removeClass(active).slideUp();
    } else {
      $(document)
        .find(".active-carousel")
        .next()
        .addClass(active)
        .slideDown();
      $(document)
        .find(".active-carousel")
        .not(
          $(document)
            .find(".active-carousel")
            .next()
        )
        .slideUp()
        .removeClass(active);
    }
  });

  window.setInterval(function() {
    if (first.hasClass(active)) {
      c.removeClass(active).slideUp();
      $(document)
        .find(first)
        .next()
        .addClass(active)
        .slideDown();
    } else if (last.hasClass(active)) {
      first.addClass(active).slideDown();
      last.removeClass(active).slideUp();
    } else {
      $(document)
        .find(".active-carousel")
        .next()
        .addClass(active)
        .slideDown();
      $(document)
        .find(".active-carousel")
        .not(
          $(document)
            .find(".active-carousel")
            .next()
        )
        .slideUp()
        .removeClass(active);
    }
  }, 6000);
});
