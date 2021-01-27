$(document).ready(function() {
  var textToggle = $(".text-toggle");
  var activeSayContainer = $(".say-container-active");
  var sayContainer = $(".say-container");
  var contactDetails = $(".contact-img, .contact-text, .contact-name");
  sayContainer
    .not(activeSayContainer)
    .find(contactDetails)
    .hide();

  textToggle.click(function() {
    textToggle.removeClass("text-toggle-active");
    $(this).addClass("text-toggle-active");

    if ($("#text1").hasClass("text-toggle-active")) {
      contactDetails.fadeOut();
      $("#say1")
        .find(".contact-img, .contact-text, .contact-name")
        .fadeIn();
    }

    if ($("#text2").hasClass("text-toggle-active")) {
      contactDetails.fadeOut();
      $("#say2")
        .find(".contact-img, .contact-text, .contact-name")
        .fadeIn();
    }

    if ($("#text3").hasClass("text-toggle-active")) {
      contactDetails.fadeOut();
      $("#say3")
        .find(".contact-img, .contact-text, .contact-name")
        .fadeIn();
    }
  });
});
