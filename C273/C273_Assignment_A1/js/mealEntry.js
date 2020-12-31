$(document).ready(function() {
  var data = [];
  getData();
  function getData() {
    $.get('./dataDisplay.php', {}, function(meals) {
      meals.forEach(i=>{
        i["x"]=i['food_name'];
        delete i["food_name"];
        i["value"]=i['COUNT(f.food_name)'];
        delete i["COUNT(f.food_name)"];
        delete i["0"];
        delete i["1"];
      })
      data = meals;
      displayChart();
    }, 'json');
  }

  $("form").validate({
    rules: {
      food: {
        min: 1
      }, calorie: {
        required: true
      }, fats: {
        required: true
      }
    },
    messages: {
      food: {
        min: "Please choose food"
      }, calorie: {
        required: "Please enter the calories"
      }, fats: {
        required: "Please enter the fats"
      }
    },
    submitHandler: function() {
      return true;
    }
  });

  $("form").submit(function() {
    $.post('./doMealEntry.php', {food: $("#food").val(), calorie: $("#id_calorie").val(), fats: $("#id_fats").val()}, function(data, status) {
      if(status == "success" && data == 1) {
        getData();
      } else {
        console.log("fail");
      }
    }, "text");
    $("#food").val("");
    $("#id_calorie").val("");
    $("#id_fats").val("");
    return false;
  });
  function displayChart() {
    $("#pieChart").html("");
    anychart.onDocumentReady(function() {
      console.log(data);
      var chart = anychart.pie();
      chart.title("Food you Ate");
      chart.data(data);
      chart.sort("desc");
      chart.legend().position("right");
      chart.legend().itemsLayout("vertical");
      chart.container('pieChart');
      chart.draw();
    });
  }
});
