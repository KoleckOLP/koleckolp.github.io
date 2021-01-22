<script>
    //script for search
    function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>

<div>
    <h3>All the Flash games were removed please use <a href="https://bluemaxima.org/flashpoint/">BlueMaxima Flashpoint</a> instead<br>All software/apps on this page come with no warranty lol, you might get help on my dicord link in the footer.</h3>
</div>
<a class="hidden" target="_blank" href="games/adult"><img src="games/button.png"></a>

<div class="nav">
    <ul class="nav">
        <li class="nav" id="space"><a class="lnk" href="#android">Android Games</a></li>
        <li class="nav" id="space"><a class="lnk" href="#windows">Windows Games</a></li>
        <li class="nav" id="space"><a class="lnk" href="#rest">Rest</a></li>
    </ul>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="search.."> Search for a game or program.

<ul id="myUL">
    <li>
        <a id="nadps" name="android" href="#">
            <h2>#Andoid Games:</h2>
        </a>
    </li>
    <ul>
<?php

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

$sql = "SELECT game, name FROM games WHERE platform='android'";
$result = $conn->query($sql);

$games = [];
while($row = mysqli_fetch_array($result))
{
    $games[] = $row['game'];
    $gname[] = $row['name'];
}

$conn->close();

$i = 0;

while($i < count($games))
{
    echo "<li>"."\n";
        echo "<a target=\"_blank\" href=\"games/android?gm=".$games[$i]."\">"."\n";
            echo "<h2>".$gname[$i]."</h2>"."\n";
        echo "</a>"."\n";
    echo "</li>"."\n";
    $i++;
}

?>
    </ul>
    <li>
        <a id="nadps" name="windows" href="#">
            <h2>#Windows Games:</h2>
        </a>
    </li>
    <ul>
<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT game, name FROM games WHERE platform='windows'";
$result = $conn->query($sql);

$games = [];
$gname = [];
while($row = mysqli_fetch_array($result))
{
    $games[] = $row['game'];
    $gname[] = $row['name'];
}

$conn->close();

$i = 0;

while($i < count($games))
{
    echo "<li>"."\n";
        echo "<a target=\"_blank\" href=\"games/windows?gm=".$games[$i]."\">"."\n";
            echo "<h2>".$gname[$i]."</h2>"."\n";
        echo "</a>"."\n";
    echo "</li>"."\n";
    $i++;
}

?>
    </ul>
    <li>
        <a id="nadps" name="rest" href="#">
            <h2>#Rest:</h2>
        </a>
    </li>
    <ul>
        <li>
            <a target="_blank" href="games/other/train">
                <h2>Train</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://github.com/KoleckOLP/yt-dl">
                <h2>yt-dl</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://github.com/PopovEvgeniy/easykms">
                <h2>easykms</h2>
            </a>
        </li>
    </ul>