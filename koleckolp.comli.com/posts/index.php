<?php
    $p = $_GET["p"];
    if (preg_match("/\d+p/", $p))
    {
        $p = substr_replace($p ,"", -1);
        if ($p <= 11)
        {
            $p = $p."p";
            header("Location: ../?id=".$p);
        }
        else
        {
            header("Location: ../?id=posts");
        }
    }
    else
    {
        header("Location: ../?id=posts");
    }
?>