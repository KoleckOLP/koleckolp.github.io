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
    <h3>All the flash Ganes open a new tab in resolution roughly 800x600 to work on 99% of devices.<br> You should be able to resize them by dragging the bottom left corner.</h3>
</div>
<a class="hidden" target="_blank" href="games/adult"><img src="games/button.png"></a>

<div class="nav">
    <ul class="nav">
        <li class="nav" id="space"><a class="lnk" href="#flash">Flash Games</a></li>
        <li class="nav" id="space"><a class="lnk" href="#android">Android Games</a></li>
        <li class="nav" id="space"><a class="lnk" href="#windows">Windows Games</a></li>
        <li class="nav" id="space"><a class="lnk" href="#rest">Rest</a></li>
    </ul>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="search.."> Search for a game or program.

<ul id="myUL">
    <li>
        <a id="nadps" name="flash" href="#">
            <h2>#Flash Games:</h2>
        </a>
    </li>
    <ul>
        <li>
            <a target="_blank" href="games/flash?gm=tgg">
                <h2>The Gun Game</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=isaac">
                <h2>Binding of Isaac</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sh1">
                <h2>Shift Heads 1</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sh2">
                <h2>Shift Heads 2</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sh3">
                <h2>Shift Heads 3</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sh4">
                <h2>Shift Heads 4</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sh5">
                <h2>Shift Heads 5</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=loveme1">
                <h2>Love Me 1</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=loveme2">
                <h2>Love Me 2</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=ram">
                <h2>Rinmaru Anime Maker</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=fallguy">
                <h2>Freeway Fallguy</h2>
            </a>
        </li>
        <li>
            <a target="_blank" href="games/flash?gm=sas2">
                <h2>Swords and Sandals 2</h2>
            </a>
        </li>
    </ul>
    <li>
        <a id="nadps" name="android" href="#">
            <h2>#Andoid Games:</h2>
        </a>
    </li>
    <ul>
<?php
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
    </ul>