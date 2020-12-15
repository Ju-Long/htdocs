const http = require('http')
const fs = require('fs');
var mysql = require('mysql');
const port = 3000

const server = http.createServer(function(req, res){
  res.writeHead(200, { 'Content-Type': 'text/html'})
  fs.readFile('index.html', function(error, data){
    if (error) {
      res.writeHead(404)
      res.write("Error: File Not Found")
    } else {
      res.write(data)
      // var users = sql();
      // for (var i in users) {
      //   res.write(i.username);
      // }
    }
    res.end()
  })
})

server.listen(port, function(error) {
  if (error) {
    console.log("Something went wrong");
  } else {
    console.log("Server is listening on port " + port);
  }
})

function sql() {
  var con = mysql.createConnection({host: "34.87.22.39", user: "root", password: "", database: "C273_Assignment_A1"});

  con.connect(function(err) {
    if (err)
      throw err;
    con.query("SELECT * FROM user", function(err, result, fields) {
      if (err)
        throw err;
        return result;
    });
  });
}
