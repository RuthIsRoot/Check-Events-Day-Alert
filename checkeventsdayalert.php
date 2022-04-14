<?php
/**
 * Plugin Name: Check Events Day Alert
 * Plugin URI: https://github.com/RuthIsRoot/Check-Events-Day-Alert/
 * Description: Plugin que contiene un array con información sobre eventos importantes en diferentes paises. Si la fecha de hoy corresponde a algún evento, cada vez que el usuario accede a la página o se mueve por ella se le notifica de esto mediante un alert de JS.
 * Version: 1.0
 * Author: Alex Castella Iniesta
 * Author URI: http://www.alexwordpress.com.mialias.net/
 * License: GPLv3
 */

add_action('wp_enqueue_scripts','checkEventsDay');

function checkEventsDay() {
	$today = date('d/m/Y');

	$events = [
	    "14/04/2022" => "Sabías que hoy, 23/04/2022 es el día de la GERMAN COMIC CON ? Visita https://www.feriasinfo.es/Ferias-de-comic-Y406-S1.html para obtener más información ;)",
	    // 14/04/2022 Es una prueba
	    "23/04/2022" => "Sabías que hoy, 23/04/2022 es el día de la GERMAN COMIC CON ? Visita https://www.feriasinfo.es/Ferias-de-comic-Y406-S1.html para obtener más información ;)",
	    "14/05/2022" => "Sabías que hoy, 14/05/2022 es el día de la VIENNA COMIX ? Visita https://www.feriasinfo.es/Ferias-de-comic-Y406-S1.html para obtener más información ;)",
	    "26/05/2022" => "Sabías que hoy, 26/05/2022 es el día de la FANTASY BASEL COMIC CON ? Visita https://www.feriasinfo.es/Ferias-de-comic-Y406-S1.html para obtener más información ;)",
	    "05/08/2022" => "Sabías que hoy, 05/08/2022 es el día de la CHICAGO COMIC & ENTERTAINMENT EXPO ? Visita https://www.feriasinfo.es/Ferias-de-comic-Y406-S1.html para obtener más información ;)",
	    "06/10/2022" => "Sabías que hoy, 06/10/2022 es el día del NEW YORK COMIC CON ? Visita https://www.feriasinfo.es/New-York-Comic-Con-M3225/Nueva-York.html para obtener más información ;)",
	];

	foreach($events as $day => $info) {
	    if ($today == $day) {
	    echo '<script type="text/javascript">/'.'/ <![CDATA[
		    window.onload = function(){
		      alert("'. $info.'");
		    }
		  /'.'/ ]]>
		  </script>';
	    }
	}
}
?>
