<?php 
class Cne {

    public function obtenerElector($nacionalidad, $cedula) {
       
        $url = "http://www.cne.gob.ve/web/registro_electoral/ce.php?nacionalidad=".$nacionalidad."&cedula=".$cedula;
        $ch = curl_init();
     
        curl_setopt($ch,CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_REFERER,'http://www.cne.gob.ve/');
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux i686; rv:32.0) Gecko/20100101 Firefox/32.0');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        curl_setopt($ch,CURLOPT_FRESH_CONNECT,TRUE);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0.5);
        curl_setopt($ch,CURLOPT_TIMEOUT,0.1);
        $html=curl_exec($ch);

     if($html==false){
            $m=curl_error(($ch));

            error_log($m);
            curl_close($ch);
            $j['modo'] = 2;
            $j['error'] = 2;

            return json_encode($j);
            
        } else {
            curl_close($ch);
            if (strpos($html, '<b>DATOS DEL ELECTOR</b>') > 0) {
                $modo = 1; # Puede Votar
            } else if (strpos($html, '<strong>DATOS PERSONALES</strong>') > 0) {
                $modo = 2; # No Puede Votar
            } else {
                
                $j['error'] = 2;
                $j['modo'] = 2;

                return json_encode($j);
            }


            
            $j['modo'] = $modo;

            // Datos para un elector que puede votar
            if ($j['modo'] == 1) {
                #Obtener Cédula
                $npos = strpos($html, 'align="left">', strpos($html, 'dula:')) + 13;
                $j['cedula'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Nombre
                $npos = strpos($html, 'align="left"><b>', strpos($html, 'Nombre:')) + 16;
                $j['nombre'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Estado
                $npos = strpos($html, 'align="left">', strpos($html, 'Estado:')) + 13;
                $j['estado'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));  
                $j['error']=1;
            }

            // Datos para un elector con objeción
            else if ($j['modo'] == 2) {
                $j['error']=2;
                #Obtener Cédula
                $npos = strpos($html, 'strong> ', strpos($html, 'dula:')) + 8;
                $j['cedula'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Estado
                $npos = strpos($html, 'align="left">', strpos($html, 'Estado:')) + 13;
                $j['estado'] = 'SELECIONE UN ESTADO';  
                         
               
            }
            return json_encode($j);
            }
        }
    }

?>