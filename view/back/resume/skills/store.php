<?php

include_once ("../../../../vendor/autoload.php");
use App\back\AboutMe\AboutMe;

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo '<pre>';
var_dump($_FILES);
echo '</pre>';

var_dump();



$portfolioImage = $_FILES['portfolioImage']['name'];

$portfolioImage_tmp = $_FILES['portfolioImage']['tmp_name'];

if ( isset($portfolioImage) ) {
    $portfolioImageExtension = end(explode('.', $portfolioImage));
}

$_POST['portfolioImage'] = substr(md5(time()), 0, 11) . '.' . $portfolioImageExtension;

var_dump($_POST);



move_uploaded_file($portfolioImage_tmp, '../../../src/uploads/' . $_POST['portfolioImage']);

$object = new AboutMe();

$object->set($_POST);
$object->store();
