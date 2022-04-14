<?php
/**
 * Plugin Name: FreeComicDay Alert
 * Plugin URI: https://github.com/RuthIsRoot/FreeComicDay-Alert
 * Description: Este plugin informa al usuario mediante un alert de JS si hoy es el día mundial del FreeComicDay (06/05/2023) al llegar a este día, se le informa al usuario y se le adjunta un enlace donde puede obtener más información.
 * Version: 1.0
 * Author: Alex Castella Iniesta
 * Author URI: http://www.alexwordpress.com.mialias.net/
 * License: GPLv3
 */

add_action('wp_head','checkFreeComicDay');

function checkFreeComicDay() {
	$today = date('d/m/Y');
	$freeComicDayDate = "06/05/2023";
	
	if ($today == $freeComicDayDate) {
		echo '<script type="text/javascript">alert("Sabías que hoy, 06/05/2023 es el día del Free Comic Book ?\n\nVisita https://www.freecomicbookday.com/ para obtener más información ;)")</script>';
	}
}

?>
