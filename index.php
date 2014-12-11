<?php 

//composer autoloader
require 'vendor/autoload.php';

use Library\Helpers\UI;

// load the game default settings
require_once("application/configs/config.php");

// the state of the game is stored in a user session
session_start();

// the controller has different logic and UI rendering for the different user interfaces
$controller = new Controller\Game(UI::getCurrentInterface());
$controller->handleInput();
