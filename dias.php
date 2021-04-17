<?php


	function descomponer_anios($total_dias){
		$PROMEDIO_ANNIO = 365.20;
		$PROMEDIO_MES   = 30.42;

		$calcular_annios = floor($total_dias / $PROMEDIO_ANNIO);
		return round($calcular_annios);
	}

	function descomponer_meses($total_dias){
		$PROMEDIO_ANNIO = 365.20;
		$PROMEDIO_MES   = 30.42;

		$calcular_meses = floor($total_dias - descomponer_anios($total_dias) * $PROMEDIO_ANNIO);
		$meses = floor($calcular_meses / $PROMEDIO_MES);
		return ($meses);
	}

	function descomponer_dias($total_dias){
		$PROMEDIO_ANNIO = 365.20;
		$PROMEDIO_MES   = 30.42;

		$calcular_dias = ($total_dias-(descomponer_anios($total_dias) * $PROMEDIO_ANNIO + 
			descomponer_meses($total_dias) * $PROMEDIO_MES));
		return floor($calcular_dias);
	}

	echo((descomponer_anios(3703)));
	echo "/";
	echo((descomponer_meses(3703)));
	echo "/";
	echo((descomponer_dias(3703)));


?>