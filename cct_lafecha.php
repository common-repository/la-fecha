<?php
/*
Plugin Name: La Fecha
Plugin URI: http://p.contraculto.com/lafecha
Description: Translates the dates to spanish without the need to thanslate the whole WordPress installation. Traduce las fechas a español sin tener que traducir todo el WordPress. This plugin is a translation of DutchDate, by Barry Ceelen. Credit for making the function goes to him.
Version: 1.2.2
Author: Rodrigo Lanas van Lamoen
Author URI: http://contraculto.com

LaFecha is a translation of DutchDate, created by Barry Ceelen. More information at http://multipop.org/dutchdate
LaFecha es una traducción de DutchDate, creado por Barry Ceelen. Más información en http://multipop.org/dutchdate

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function la_fecha($text) {
	$days_english = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
	'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 
	'January', 'February', 'March', 'April', 'Mayo', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 
	'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 
	'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th');
	
	$days_esp = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo', 
	'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom', 
	'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 
	'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic',
	'1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
	$text = str_replace($days_english, $days_esp, $text);
	return $text;
}

add_filter('get_the_time', 'la_fecha');
add_filter('the_modified_time', 'la_fecha');
add_filter('get_the_date', 'la_fecha');
add_filter('the_modified_date', 'la_fecha');
add_filter('get_comment_date','la_fecha');
?>
