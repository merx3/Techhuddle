<?php

namespace Library\Helpers;

/**
* UI helper class
*
* The Library\Helpers\UI is a class ment to be used for UI awareness.
* It can be used as an enumerator (UI::WEB or UI::CONSOLE) for code readability
* or to get the current user interface
*
* Example usage:
* if(UI::getCurrentInterface() === UI::WEB){
*   //...
* }
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
abstract class UI
{	
	
    const WEB = 0;
    const CONSOLE = 1;

	public static function getCurrentInterface()
	{
	    return (php_sapi_name() === 'cli') ? self::CONSOLE : self::WEB;
	}
}
