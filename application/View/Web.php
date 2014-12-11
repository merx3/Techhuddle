<?php

namespace View;

/**
* The View in an MVC implementation of the Battleship game, used for Web UI
*
* The View\Web is used to render the web user interface from the passed by the controller data. 
* It has body separation. The html parts are located in application/html folder.
*
* Example usage:
* $view = new View\Console();
* $view->render($data);
*
* @author   Marian Marinov <marian.mmarinov@gmail.com>
* @version  release 1.0
* @access   public
* @see      https://github.com/merx3/Techhuddle/
*/
class Web extends Base
{
	// Removed for privacy
