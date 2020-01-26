<?php
    $gm = $_GET["gm"];
?>
<head>
    <meta charset="UTF-8">
	<title><?php echo "K - ".$gm ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="../../../z.dpnd/w.ico">
</head>
<?php
    if ($gm == "tgg")
    {
        $width = "800px";
        $height = "582px";
    }
    else if ($gm == "isaac")
    {
        $width = "800px";
        $height = "600px";
    }
    else if($gm == "ram")
    {
        $width = "800px";
        $height = "578px";
    }
    else if($gm == "fallguy")
    {
        $width = "545px";
        $height = "600px";
    }
    else if($gm == "sas2")
    {
        $width = "800px";
        $height = "525px";
    }
    else if($gm == "sh1" || $gm == "sh2" || $gm == "sh3" || $gm == "sh4" || $gm == "sh5")
    {
        $gm = "sh/".$gm;
        $width = "800px";
        $height = "440px";
    }
    else if($gm == "loveme1" || $gm == "loveme2")
    {
        $gm = "loveme/".$gm;
        $width = "800px";
        $height = "400px";
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
<script src="../../../z.dpnd/removeBanner.js"></script> <!--000webhost banner remove-->