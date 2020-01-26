<?php
    $p = "";
    $id = $_GET["id"];
    $json = file_get_contents('./gallery/games/games.json');
    $json_games = json_decode($json,true);
    $agames = $json_games["android"];
    $wgames = $json_games["windows"];
    if ($id == "")
    {
        $id = "home";
    }
    else if ($id == "posts" || $id == "sound" || $id == "gallery")
    {
        $p = "";
        echo "<script>history.replaceState(null, null, \"$id\");</script>";
    }
    else if ($id == "gallery_pictures" || $id == "gallery_games" || $id == "gallery_videos")
    {
        $p = "../";
        $st = "_"; $up = "/";
        $id = str_replace($st, $up, $id); //I had to put the strings into variables stupid
        echo "<script>history.replaceState(null, null, \"$id\");</script>";
    }
    else if (preg_match("/\d+p/", $id)) //There is one guy called kangalioo and he's a god.
    {
        $id = substr_replace($id ,"", -1);
        if ($id <= 11)
        {
            $id = $id."p";
            echo "<script>history.replaceState(null, null, \"posts?p=$id\");</script>";
        }
        else
        {
            header("Location: ?id=posts");
        }
    }
    else if(in_array($id, $agames))
    {
        $p = "../../";
        echo "<script>history.replaceState(null, null, \"gallery/games/android?gm=$id\");</script>";
    }
    else if(in_array($id, $wgames))
    {
        $p = "../../";
        echo "<script>history.replaceState(null, null, \"gallery/games/windows?gm=$id\");</script>";
    }
    else
    {
        $id = base64_encode($id); //could replace with sha1 xD

        if($id == "YWQ0MTc=")
        {
            $p = "../../";
            echo "<script>history.replaceState(null, null, \"gallery/games/adult\");</script>";
        }
        else if($id == "YmZl")
        {
            $id = base64_decode($id);
            $p = "../../../";
            echo "<script>history.replaceState(null, null, \"gallery/games/adult/games?gm=$id\");</script>";
            $id = base64_encode($id);
        }
        else
        {
            header("Location: index.php");
        }
    }

    

    $an = $_GET["an"];
    if ($an != "")
    {
        echo "<script>history.replaceState(null, null, \"#$an\");</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo "K - ".$id ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $p?>z.dpnd/w.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $p?>z.dpnd/mainstyle.css" />
</head>
<body> 
    <header>
        <img class="kopicl" src="<?php echo $p?>z.dpnd/kopic.png" alt="Logo">
        <img class="kopicr" src="<?php echo $p?>z.dpnd/kopic.png" alt="Logo">

        <div class="name">Everything about KoleckOLP<br>
                            Webpage v3.5 💾 "floppy" <span id="acver">(actually: PHP edition 3.7)</span></div>
    </header>

    <nav>
        <ul class="nav">
            <?php
                $home = "<li class=\"nav\"><a href=\"".$p."index.php\">Home</a></li>"; //main
                $gallery = "<li class=\"nav\"><a href=\"".$p."gallery/\">Gallery</a></li>";
                $posts = "<li class=\"nav\"><a href=\"".$p."posts/\">All Posts</a></li>";
                $soundboard = "<li class=\"nav\"><a href=\"".$p."sound/\">Soundboard</a></li>";
                $pictures = "<li class=\"nav\"><a href=\"pictures/\">Pictures</a></li>"; //sub-gallery
                $videos = "<li class=\"nav\"><a href=\"videos/\">Videos</a></li>";
                $games = "<li class=\"nav\"><a href=\"games/\">Games</a></li>";
                if ($id == "home") //main
                {
                    echo "<li class=\"nav\"><p class=\"cln\">Home</p></li>".$gallery.$posts.$soundboard;
                }
                else if ($id == "posts")
                {
                    echo $home.$gallery."<li class=\"nav\"><p class=\"cln\">All Posts</p></li>".$soundboard;
                }
                else if ($id == "sound")
                {
                    echo $home.$gallery.$posts."<li class=\"nav\"><p class=\"cln\">Soundboard</p></li>";
                }
                else if ($id == "gallery")
                {
                    echo $home."<li class=\"nav\"><p class=\"cln\">Gallery</p></li>".$posts.$soundboard;
                }
                else if ($id == "gallery/videos") //sub-gallery
                {
                    echo $home.$pictures."<li class=\"nav\"><p class=\"cln\">Videos</p></li>".$games;
                }
                else if ($id == "gallery/pictures") //sub-gallery
                {
                    echo $home."<li class=\"nav\"><p class=\"cln\">Pictures</p></li>".$videos.$games;
                }
                else if ($id == "gallery/games") //sub-gallery
                {
                    echo $home.$pictures.$videos."<li class=\"nav\"><p class=\"cln\">Games</p></li>";
                }
                else if (preg_match("/\d+p/", $id))
                {
                    echo $home.$posts;
                }
                else if (in_array($id, $agames) || in_array($id, $wgames) || $id == "YmZl")
                {
                    echo $home.$gallery;
                }
                
                if($id == "YWQ0MTc=")
                {
                    echo $home.$gallery;
                }

            ?>
    <?php
        if (!preg_match("/\d+p/", $id) && !in_array($id, $agames) && !in_array($id, $wgames))
        {
            echo "<li class=\"nav\"><a target=\"_blank\" href=\"https://1drv.ms/x/s!AjSd1eSY-UzLg686fcArrVVwIbCetQ\">My Devices</a></li>";
			echo "<li class=\"nav\"><a target=\"_blank\" href=\"https://github.com/KoleckOLP/koleckolp.github.io/releases\">Changelog</a></li>";
        }
    ?>
        </ul>
    </nav>

    <article>
        <?php 
            if ($id == "home")
            {
                $myfile = fopen("home.html", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("home.html"));
                fclose($myfile);
            }
            else if ($id == "posts" || $id == "sound" || $id == "gallery")
            {
                $id = $id."/".$id.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if ($id == "gallery/pictures" || $id == "gallery/videos" || $id == "gallery/games")
            {
                $na = substr($id, 8);
                $id = $id."/".$na.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if (preg_match("/\d+p/", $id))
            {
                $id = "posts/".$id.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if(in_array($id, $agames))
            {
                $id = "gallery/games/android/".$id.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if(in_array($id, $wgames))
            {
                $id = "gallery/games/windows/".$id.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if($id == "YWQ0MTc=")
            {
                $id = "gallery/games/adult/adult.html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
            else if($id == "YmZl")
            {
                $id = base64_decode($id);
                $id = "gallery/games/adult/games/".$id.".html";
                $myfile = fopen($id, "r") or die("Unable to open file!");
                echo fread($myfile,filesize($id));
                fclose($myfile);
            }
        ?>    
    </article>

    <footer>
		<div class="copy">©2015-<script>document.write(new Date().getFullYear())</script> KoleckOLP copyright</div>
		<div class="contact">Join my discord server <a class="cln" target="_blank" href="https://discord.gg/W88375j">here</a></div>
	</footer>
	<script src="<?php echo $p?>z.dpnd/removeBanner.js"></script> <!--000webhost banner remove-->
</body>
</html>