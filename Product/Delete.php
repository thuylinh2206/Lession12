<?php

require_once 'pdo.php';
require_once 'Helper.php';

if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    $getinf = new Query();
    $products = $getinf->delete(['id' => $_POST['id']]);
    // delete(['id' => $_POST['id']]);
}

redirectHome();