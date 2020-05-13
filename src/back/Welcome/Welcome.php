<?php

namespace App\back\Welcome;

use App\PConnections;
use PDO;
use PDOException;

class Welcome extends PConnections
{
    
    private $_mobileNumber;
    private $_logoName;
    private $_backgroundImageName;
    private $_welcomeText;
    private $_designation;

    public function set($data = array()) {
    
        if ( array_key_exists ( "mobileNumber", $data ) ) {
            $this->_mobileNumber = $data['mobileNumber'];
        }
        
        if ( array_key_exists ( "logoName", $data ) ) {
            $this->_logoName = $data['logoName'];
        }

        if ( array_key_exists ( "backgroundImageName", $data ) ) {
            $this->_backgroundImageName = $data['backgroundImageName'];
        }

        if ( array_key_exists ( "welcomeText", $data ) ) {
            $this->_welcomeText = $data['welcomeText'];
        }

        if ( array_key_exists ( "designation", $data ) ) {
            $this->_designation = $data['designation'];
        }

        return $this;
    }

    public function store() {

        try {
            $_stmt = $this->_connection->prepare("INSERT INTO `welcome`(`mobileNumber`, `logoName`, `backgroundImageName`, `welcomeText`, `designation`) VALUES (:mobileNumber,:logoName,:backgroundImageName,:welcomeText,:designation)");

            $_result = $_stmt->execute(array(
                ':mobileNumber' => $this->_mobileNumber,
                ':logoName' => $this->_logoName,
                ':backgroundImageName' => $this->_backgroundImageName,
                ':welcomeText' => $this->_welcomeText,
                ':designation' => $this->_designation
            ));

            if ($_result) {
                $_SESSION['create'] = "Data Successfully Creasted!";

                header('Location:../index.php');

            }
        }
        catch (PDOException $e) {
            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }
    
    public function index() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `welcome` WHERE `mobileNumber` = 'zxc';");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {
            
            echo "there is some problem in Connection.php" . $e->getMessage();
        }
        
    }

}