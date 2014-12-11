<?php

namespace View;

/**
* The Base is a parent of the Views, used for board rendering logic
*
* The View\Base is used by its child views to create a user-friendly and easy to print
* board, which includes row and volumn labeling and spaces between the squares.
*
* Example usage:
* // in the View
* echo self::renderBoard($data["board"]);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Base
{
	// Removed for privacy