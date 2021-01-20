<?php

$prefix = 'https://github.com/linux-surface';
$file = getcwd() . $_GET['q'] . '.blob';

if (!file_exists($file)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    die();
}

list($repo, $artifact) = explode(':', file_get_contents($file), 2);
$url = $prefix . '/' . $repo . '/releases/download/' . $artifact;
header("Location: $url", true, 301);

?>
