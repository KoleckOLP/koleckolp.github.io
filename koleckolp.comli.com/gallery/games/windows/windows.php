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
if ($gm == "jorvik")
{
    echo "<h3>Starshine Legacy (1-4)</h3>";
    echo "<img src=\"windows/jorvik/jssl.jpg\" height=\"90px\">";
    echo "<h3>Star Stable (1-4)</h3>";
    echo "<img src=\"windows/jorvik/jss.png\">";
    echo "<h3>Star Academy (1-4)</h3>";
    echo "<img src=\"windows/jorvik/jsa.png\" height=\"90px\">";
}
elseif ($gm == "pokerom")
{
    echo "<img src=\"windows/pokerom/poke.jpg\">";
    echo "<p>Picture of my physical copy.</p>";
}

echo "<h3>Download</h3>";
echo "<a href=\"".$link."\">here</a><br>";
echo "<p>Read the .nfo if there is any.</p>"
?>