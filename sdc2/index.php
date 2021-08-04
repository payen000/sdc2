<?php
    $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    header('Location: http://' . $url . 'home/landing/');
?>
