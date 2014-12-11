<?php

namespace Library\Helpers;

/**
* Shot helper class
*
* The Library\Helpers\Shot is a class ment to be used as
* an enumerator for easies code reading. It represents the 
* shot status(Hit, Miss or Sunk)
*
* Example usage:
* return Shot::HIT;
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
abstract class Shot
{
	
    const HIT = 0;
    const MISS = 1;
    const SUNK = 2;    
}
