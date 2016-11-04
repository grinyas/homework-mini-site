<?php

define('PAGES_PATH', 'pages');

function renderPage($page)
{
    $filename = PAGES_PATH . "/{$page}.php";
    ob_start();
    include 'default.php';
    include $filename;
    include 'header.php';
    include 'footer.php';
    $content = ob_get_contents();
    ob_clean();
    return $content;

}


function isPageExists($page)
{
    $filename = PAGES_PATH . "/{$page}.php";
    return file_exists($filename)
    && is_readable($filename);
}

function isUserLogged(){

}

function loginUser(){

}