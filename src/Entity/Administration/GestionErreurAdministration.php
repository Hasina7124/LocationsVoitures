<?php
namespace Locations\Entity\Administration;

class GestionErreurAdministration{
    function setflash($key,$message){
        $_SESSION['flash'][$key] = $message;
    }

    function getflash($key){
        if(isset($_SESSION['flash'][$key])){
            $message = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $message;
        }
        return null;
    }

    function hashflash($key){
        return isset($_SESSION['flash'][$key]);
    }
}