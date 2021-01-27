$(document).ready(function() {
  var submit, first_name, last_name, email, phone, people, event, date, time;
  submit = $(".submitBooking");

  submit.click(function(e) {
    e.preventDefault();

    first_name = $("#first_name").val();
    last_name = $("#last_name").val();
    email = $("#email").val();
    phone = $("#phone").val();
    people = $("#people").val();
    event = $("#event").val();
    date = $("#date").val();
    time = $("#time").val();

    if (
      first_name.length < 1 ||
      last_name.length < 1 ||
      email.length < 1 ||
      phone.length < 1 ||
      people.length < 1 ||
      event < 1 ||
      date.length < 1 ||
      time.length < 1
    ) {
      alert("Please fill in all information");
    } else {
      $.ajax({
        url:
          "php/insertBooking.php?first_name=" +
          first_name +
          "&last_name=" +
          last_name +
          " &email=" +
          email +
          "&phone=" +
          phone +
          "&people=" +
          people +
          "&event=" +
          event +
          "&date=" +
          date +
          "&time=" +
          time,
        success: function(data) {
          $("#first_name").val("");
          $("#last_name").val("");
          $("#email").val("");
          $("#phone").val("");
          $("#people").val("");
          $("#date").val("");
          $("#time").val("");
          alert(data);
        }
      });
    }
  });
});
