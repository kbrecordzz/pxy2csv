<?php

$o = "n;x;y;z;kod;fritext;;";
$lines = explode("\n", $input);
for ($i = 2; $i < count($lines); $i++)
{
        $o = $o . "\n" . $lines[$i];
}

$o = str_replace(" ", ";", $o);
$o = str_replace(";;", ";", $o);
$o = str_replace(";;", ";", $o);
$o = str_replace(";;", ";", $o);
$o = str_replace(";;", ";", $o);
$o = str_replace(";;", ";", $o);
$o = str_replace(";;", ";", $o);

echo str_replace("\n", "<br>", $o);

?>
