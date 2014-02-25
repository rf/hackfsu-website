<?php

/**
 * LordWEB
 *
 * @package		LordWEB
 * @author		Vladica Savic
 * @copyright           Copyright (c) 2011, LordWEB.
 * @link		http://vladicasavic.iz.rs/
 * @since		Version 1.0
 * @filesource
 */
/*
  | -------------------------------------------------------------------
  | Main Handler
  | -------------------------------------------------------------------
  | Main PHP script for handling all AJAX request
  |
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require 'jsonwrapper.php';
include_once (dirname(dirname(__FILE__)).'/CONFIG.php');

//Initial response is NULL
$response = null;

//Initialize appropriate action and return as HTML response
if (isset($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {      
        case "SendMessage": {
                if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["website"]) && isset($_POST["subject"]) && isset($_POST["message"])
                        && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
                    include("classes/class__mail.php");                    				
					
					$message = $_POST["message"];
					$message .= "<br/><br/>";					
					$message .= $_POST["website"];														
					
                    $response = (SendEmail($message, $_POST["subject"]." - Sender Name: ".$_POST["name"], $_POST["email"], $email)) ? 'Message Sent'  : "Sending Message Failed";
                } else {
                    $response = "Sending Message Failed";
                }
            }
            break;
        default: {
                $response = "Invalid action is set! Action is: " . $action;
            }
    }
}

if (isset($response) && !empty($response) && !is_null($response)) {
    echo '{"ResponseData":' . json_encode($response) . '}';
}
?>
