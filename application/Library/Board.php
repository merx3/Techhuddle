<?php

namespace Library;

use Library\Helpers\Orientation;
use Library\Helpers\Shot;

/**
* Board class, used to represent the board object
*
* Library\Board is a class used to create and manipulate the board, including
* opening a square on the board and getting all board squares. To create a board
* its sizes and the positioned ships must be supplied
*
* Example usage:
* $board = new Library\Board($ships, 10, 10);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Board
{
	// Removed for privacy