<?php
$gm = $_GET["gm"];

$json1 = file_get_contents('./z.dpnd/sql.json');
$json_conn = json_decode($json1,true);

$servername = $json_conn['servername'];
$username = $json_conn['username'];
$password = $json_conn['password'];
$dbname = $json_conn['dbname'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT game, name, link FROM games WHERE game='$gm'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["game"];
        $namef = $row["name"];
        $link = $row["link"];
    }
} else {
    echo "0 results";
}
$conn->close();

echo "<h1>".$namef."</h1>";
echo "<h3>Download</h3>";
echo "<a href=\"".$link."\">APK + DATA</a><br>";
echo "<p>extract DATA into \"Android/obb/\"</p>";
?>