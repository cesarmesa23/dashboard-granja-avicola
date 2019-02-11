<?php
class Arduino
{
	
	public function __construct(){
		echo "simulacion de operaciones de arduino";
	}
	
	public function verificarParametros($tempe,$humedad,$amoniaco){
		if($tempe!=0 && $humedad!=0 && $amoniaco!=0){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function validarParametrosSms($tempe,$humedad,$amoniaco){
		if($tempe>32 || $humedad>70 || $amoniaco>25){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function enviarSms($tempe,$humedad,$amoniaco,$numtelefonico){
		$texto="ALERTA!!\nSr Mesa: \nSe recomienda tomar medidas en su granja\nTemperatura: ".$tempe."C\nHumedad:".$humedad."%\nAmoniaco:".$amoniaco." ppm";
		if(empty($texto)){
			return false;		
		}
		else{
			return true;
		}
	}
	
	public function guardarWifi($tempe,$humedad,$amoniaco,$estado){
			if($estado==1){
			 echo "paso";
			}
			else{
			enviarSms($estado);	
			verificarParametros($tempe,$humedad,$amoniaco);
			}
	}
		
	public function guardarSim($tempe,$humedad,$amoniaco,$estado){
		if(verificarParametros($tempe,$humedad,$amoniaco)){
				enviarSms($estado);
			}
			if($estado==1){
			
			}
			else{
			guardarSim();
			}

		}
	
	
}
?>