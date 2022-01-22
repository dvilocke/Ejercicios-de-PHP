<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$json = file_get_contents($url);

$objRespuesta = json_decode($json);

?>

<h1>Nombre de videos</h1>

<ul>
    <?php foreach ($objRespuesta->list as $video) {?>
        <li> <?php echo $video->title?></li>
    <?php } ?>
</ul>