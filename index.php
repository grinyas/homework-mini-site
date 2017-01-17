<?php
//exit(phpinfo());/
require 'includes/common.php';





$page = !empty($_GET['page']) ? $_GET['page'] : null;

$page = str_replace('.php','', $page);
print_r($_GET);
echo $page;


if (!empty($page)
    && !isPageExists($page)
) {
    header('Not found', true, 404);
    exit;
}


$page = is_null($page) ? 'login' : $page;

echo renderPage($page);