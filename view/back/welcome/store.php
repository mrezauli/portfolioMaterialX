<?php

include_once ("../../../vendor/autoload.php");
use App\back\Welcome\Welcome;

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo '<pre>';
var_dump($_FILES);
echo '</pre>';

$logoName = $_FILES['logoName']['name'];
$backgroundImageName = $_FILES['backgroundImageName']['name'];

$logoName_tmp = $_FILES['logoName']['tmp_name'];
$backgroundImageName_tmp = $_FILES['backgroundImageName']['tmp_name'];

if ( isset($logoName) ) {
    $logoNameExtension = end(explode('.', $logoName));
}

if ( isset($backgroundImageName) ) {
    $backgroundImageNameExtension = end(explode('.', $backgroundImageName));
}

$_POST['logoName'] = $_POST['mobileNumber'] . 'logoName' . '.' . $logoNameExtension;
$_POST['backgroundImageName'] = 'home-bg.' . $backgroundImageNameExtension;

var_dump($_POST);



move_uploaded_file($logoName_tmp, '../../../src/uploads/' . $_POST['logoName']);
move_uploaded_file($backgroundImageName_tmp, '../../../assets/front/images/' . $_POST['backgroundImageName']);


$object = new Welcome();

$object->set($_POST);
$object->store();
