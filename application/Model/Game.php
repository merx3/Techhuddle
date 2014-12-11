<?php

namespace Model;

use Library\ShipFactory;
use Library\Board;
use Library\Helpers\Orientation;
use Library\Helpers\Coordinates;

/**
* The Model in an MVC implementation of the Battleship game
*
* The Model\Game is responsivle for initializing the game elements and
* keeping them in the user session for later use. Also, it has methods to 
* change and get the current state of the game. Do note, that once a game is 
* in the user session, it is removed only after the game is finished or the 
* session expires.
*
* Example usage:
* $model = new Model\Game(UI::WEB);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Game
{
// Removed for privacy