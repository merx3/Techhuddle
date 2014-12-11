<?php

namespace Library\Helpers;

/**
* Coordinates helper class
*
* The Library\Helpers\Coordinates is used to represent valid 
* coordinates of a board square
*
* Example usage:
* $coords = new Coordinates(10,5);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Coordinates
{
	
	private $x; // column
	private $y;  // row

	public function __construct($x, $y){
		// we are reusing the validations in the setters
		$this->setX($x);
		$this->setY($y);
	}

    /**
     * Return X coordinate
     * @return int coordinate X
     */
	public function getX(){
		return $this->x;
	}

    /**
     * Return Y coordinate
     * @return int coordinate Y
     */
	public function getY(){
		return $this->y;
	}

    /**
     * Change X coordinate
     * @param int $X
     */
	public function setX($x){
		if(is_int($x) && $x >= 0){
			$this->x = $x;
		}
		else{
			throw new \Exception("Invalid X coordinate: must be a positive integer.");
		}
	}

    /**
     * Change Y coordinate. The y coord is a letter between a-z, which means it can be max 26
     * @param int $Y
     */
	public function setY($y){
		if(is_int($y) && $y >= 0 && $y < 26){
			$this->y = $y;
		}
		else{
			throw new \Exception("Invalid Y coordinate: must be a integer in the range 0-25 including");
		}
	}
}
