<?php

namespace Library\Helpers;

/**
* Orientation helper class
*
* The Library\Helpers\Orientation is a class ment to be used as
* an enumerator for easies code reading. It represents the ships'
* orientation on the board(Horizontal or Vertical)
*
* Example usage:
* $orientation = Orientation::HORIZONTAL
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
abstract class Orientation
{
	
    const HORIZONTAL = 0;
    const VERTICAL = 1;    
}
