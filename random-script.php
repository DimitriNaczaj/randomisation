<?php

include 'websites.php';

shuffle($links);

$i		= rand(0, (count($links) - 1));
$link	= $links[$i];

header("Location: {$link}");

?>
