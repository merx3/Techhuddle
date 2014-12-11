<?php

namespace View;

/**
* The View in an MVC implementation of the Battleship game, used for Console UI
*
* The View\Console is used to render the cli user interface from the passed by the controller data.
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
class Console extends Base
{
// Removed for privacy