<html>
<head>
<meta charset="UTF-8">
<title>Success !</title> 
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fifa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$spid = $_POST["pid"];
$spclub = $_POST["pclub"];
$sppreferredposition = $_POST["ppreferredposition"];
?>
<ul class="menu cf">
<li><a href="../../../INDEX.html">Home</a></li>
<li><a href="../../../search_player/player_search.html">Search</a> </li>
<li><a href="../../../update_player/update_player.html">Update</a></li>
<li><a href="../../insert_new_player.html">Insert</a></li>
<li><a href="../../../database/database.php">Database</a></li>
<li><a href="../../../about/about.html">About</a></li>
</ul>

<?php
$sql = "INSERT INTO $dbname.other_details (player_id, club, preferred_position) VALUES                                                 ('$spid','$spclub','$sppreferredposition')";

if ($conn->query($sql) === TRUE) {
echo "<h3 style=\"color:white;text-align:center; font-family:cursive;\">New record inserted successfully ! Go ahead to <a href=\"../../../database/database.php\">DATABASE</a> to see for yourself.</h3>";
} else {
header("Location:index.html");
//            echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<canvas>                    
</canvas>
</body>
</html>