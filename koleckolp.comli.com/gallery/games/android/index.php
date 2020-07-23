<?php
    $gm = $_GET["gm"];
    //$json = file_get_contents('../games.json');
    //$json_games = json_decode($json,true);
    //$games = $json_games["android"];

$servername = "localhost";
$username = "id1792536_koleckolp";
$password = "1234";
$dbname = "id1792536_kolecko";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT game FROM games WHERE platform='android'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $games[] = $row['game'];
    }
} else {
    echo "0 results";
}
$conn->close();
    //You remember that guy kangalioo, he's done it again.
    if (in_array($gm, $games))
    {
        header("Location: ../../../?id=".$gm);
    }
?>