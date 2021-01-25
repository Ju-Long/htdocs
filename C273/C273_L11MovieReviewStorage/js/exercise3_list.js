$(document).ready(function() {
  $("form").submit(function() {
    var list = JSON.parse(localStorage.getItem('list'));
    var person = {};
    person.name = $("[name=name]").val();
    person.email = $("[name=email]").val();
    person.postalCode = $("[name=postalCode]").val();

    if (list == null) {
      list = [person];
    } else {
      list.push(person);
    }
    localStorage.setItem("list", JSON.stringify(list));
    console.log(JSON.parse(localStorage.getItem('list')));
    $("form").trigger('reset');
    return false;
  });

});
