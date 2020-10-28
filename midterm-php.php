<!DOCTYPE html>
<html>
<body>
<h2>Midterm Test</h2>
<p>Please input your age:</p>

<input id="numb">

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("numb").value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1 || x > 50) {
    text = "Don't worry, you are still young";
  } else {
    text = "You are really young";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
<?php
$servername = "localhost";
$username = "yan";
$password = "bryan2018";
$dbname = "lab6";

// Create connection
$conn = mysqli_connect($localhost, $yan, $bryan2018, $lab6);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ProgramID, ProgramName FROM Programs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ProgramID: " . $row["id"]. " - ProgramName: " . $row["firstname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>