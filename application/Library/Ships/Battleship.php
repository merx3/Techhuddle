<?php

namespace Library\Ships;

/**
* Battleshit is a child class of ShipAbstract to represent a specific ship
*
* Currently, Library\ShipAbstract\Battleship only has unique size
*
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Battleship extends \Library\ShipAbstract
{
	
	const SHIP_SIZE = 5;

    public function __construct($start_coords, $orientation){
    	parent::__construct($start_coords, $orientation);
    }
}
