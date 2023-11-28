<?php
header("Content-Type: text/css");
$hue = rand(0,255);
?>

h1 {
  background-color: hsl(<?=$hue?>, 65%, 78%);
}