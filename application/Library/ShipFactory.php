<?php

namespace Library;

use Library\Ships\Battleship;
use Library\Ships\Destroyer;
use Library\Helpers\Orientation;
use Library\Helpers\Coordinates;

/**
* ShipFactory is a class using the factory design pattern to create ships
*
* Library\ShipFactory is used to generate random ships on the board. The $ship_type parameter must be an 
* existing ship class, derived from ShipAbstract. Also, the occupied by other ships squares are needed
* to know where the ships cannot be placed.
*
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class ShipFactory
{
// Removed for privacy