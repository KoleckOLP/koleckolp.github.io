<?php
    $gm = $_GET["gm"];
    $json = file_get_contents('../games.json');
    $json_games = json_decode($json,true);
    $games = $json_games["windows"];
    //You remember that guy kangalioo, he's done it again.
    if (in_array($gm, $games))
    {
        header("Location: ../../../?id=".$gm);
    }
?>