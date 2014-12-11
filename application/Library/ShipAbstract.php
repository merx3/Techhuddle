<?php

namespace Library;

use Library\Helpers\Orientation;
use Library\Helpers\Shot;


/**
* ShipAbstract is used for most of the representation and functioanlity of a ship
*
* Library\ShipAbstract is an abstract class, whose childs can be instanciated with start coordinates
* and orientation. From the start coordinates, the ship is build <SHIP_SIZE> squares to the bottom
* or right, depenting on orientation. Aside from user actions, this class has a method to draw itself
*
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
abstract class ShipAbstract 
{
// Removed for privacy