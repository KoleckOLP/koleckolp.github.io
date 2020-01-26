<?php
    $gm = $_GET["gm"];
    if ($gm == "bfe")
    {
        header("Location: ../../../..?id=bfe");
    }
?>
<head>
    <meta charset="UTF-8">
	<title><?php echo "K - ".$gm ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../../z.dpnd/w.ico">
</head>
<?php
    if ($gm == "bfe1.4.5" || $gm == "bfe1.5" || $gm == "fc" || $gm == "ff" || $gm == "fr" || $gm == "milf" || $gm == "rr")
    {
        $width = "800px";
        $height = "600px";
    }
    else if($gm == "fw" || $gm == "fs")
    {
        $width = "750px";
        $height = "600px";
    }
    else if($gm == "rdf" || $gm == "fbm")
    {
        $width = "800px";
        $height = "450px";
    }
    else if($gm == "mfy")
    {
        $width = "600px";
        $height = "600px";
    }
    else if($gm == "faj")
    {
        $width = "800px";
        $height = "533px";
    }
    else if($gm == "og2")
    {
        $width = "800px";
        $height = "550px";
    }
?>
<style>
div{
	resize: both;
	overflow: hidden;
	background-color: #ffffff;
	padding: 5px;
}

embed{
	width: 100%;
	height: 100%;
}

body{
	background-color: #000000;
}

div.game{
    width: <?php echo $width?>;
    height: <?php echo $height?>;
}
</style>

<div class="game"><embed src="<?php echo $gm?>.swf"></div><br>
<a href="<?php echo $gm?>.swf" download>Download</a>
<script src="../../../../z.dpnd/removeBanner.js"></script> <!--000webhost banner remove-->