<?php

require 'includes/common.php';

$page = !empty($_GET['page']) ? $_GET['page'] : null;


if (!empty($page)
    && !isPageExists($page)
) {
    header('Not found', true, 404);
    exit;
}


$page = is_null($page) ? 'index' : $page;

echo renderPage($page);