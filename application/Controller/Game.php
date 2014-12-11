<?php

namespace Controller;

use View;
use Model;
use Library\Helpers\UI;
use Library\Helpers\Shot;

/**
* The Controller in an MVC implementation of the Battleship game
*
* The Controller\Game is responsivle for the actions that the user 
* passes to the system and also handles data transition between the 
* View and the Model. It is specific to the user interface (Web or CLI)
*
* Example usage:
* $controller = new Controller\Game(UI::WEB);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Game
{ 
// Removed for privacy