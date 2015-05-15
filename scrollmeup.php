<?php
/*

Plugin Name: Scroll Me Up

Plugin URI: http://www.herbydesign.com/

Description: Scroll Me Up plugin is lightweight and easy to install wordpress plugin  for Scroll the page up. Enjoy this cool plugin.

Version: 1.0

Author: Herby M.

Author URI: http://www.herbydesign.com

*/

 /*  Copyright 2015  Hernan Malubay  (email : maluherby@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function scrollmeup() {
	include('show.php');
}
add_action('wp_head', 'scrollmeup');
?>