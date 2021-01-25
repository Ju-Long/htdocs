$(document).ready(function() {
  $("form").submit(function() {
    var person = {};
    person.name = $("[name=name]").val();
    person.email = $("[name=email]").val();
    person.postalCode = $("[name=postalCode]").val();

    localStorage.setItem("person", JSON.stringify(person));

    var person = JSON.parse(localStorage.getItem("person"));
    var msg = "";
    msg += "Name: " + person.name + "<br/>";
    msg += "Email: " + person.email + "<br/>";
    msg += "PostalCode: " + person.postalCode;
    $("#results").html(msg);
    return false;
  });

});
