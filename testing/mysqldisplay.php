<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h1>The XMLHttpRequest Object</h1>

<form action="">
<select name="customers" onchange="showCustomer(this.value)">
<option value=0> Select a user: </option>
<option value=1> 1 </option>
<option value=2> 2 </option>
<option value=3> 3 </option>
</select>
</form>
<br>
<div id="txtHint">user info will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;
  if (str == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "mysqlretrieve.php?n="+str, true);
  xhttp.send();
}
</script>

</body>
</html>
