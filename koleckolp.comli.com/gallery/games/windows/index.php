<?php
    $gm = $_GET["gm"];

$json1 = file_get_contents('../../../z.dpnd/sql.json');
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

$sql = "SELECT game FROM games WHERE platform='windows'";
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