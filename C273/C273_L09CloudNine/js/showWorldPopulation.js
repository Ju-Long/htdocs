$(document).ready(function () {

  console.log("Ready");

  // $.get("./getStatistics.php", {}, function(values) {
  //   var data = [];
  //   values.forEach(i => {
  //     data.push([i.country, i.population]);
  //   });
  //   display(data);
  // }, "json")
  //
  // function display(data) {
  //   console.log(data);
  //   chart = anychart.bar();
  //   var series = chart.bar(data);
  //   chart.container("barChart");
  //   chart.draw();
  // }

  var data = [];
  var labels = [];

  $.get("./getStatistics.php", {}, function(values) {
    values.forEach(i => {
      data.push(i.population);
      labels.push(i.country);
    })
    display();
  }, 'json')

  function display() {
    var barChart = new Chart($("#barChart"), {
        type: 'horizontalBar',
        data: {
            datasets: [{
                    data: data,
                    backgroundColor: "lightblue",
                    label: 'Population'
                }],
            labels: labels
        },
        options: {
            responsive: true
        }
    });
  }

});
