<html>
<head>
<style>
body {
	background-image:url('c9.jpg');
        font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'sans-serif';
}
pre {
       font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'sans-serif';
}
.TabForo {
	font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'sans-serif'; 
	vertical-align:middle; 
	color:#FFFFFF;
	background-image:url('BarraMarron.jpg');
	background-repeat: repeat-y;
}
</style>

<script type="text/JavaScript">
function timeRefresh(timeoutPeriod) 
{
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
</head>

<body text=#FFFFFF onload="JavaScript:timeRefresh(20000);">
<pre>

<?php

/* CSoap client example
*
* a simple example how to invoke commands using SOAP
*/

/* 
$username = 'admsubigemma';
$password = 'Encanto13';
$host = "198.50.198.178";
$soapport = 7878;
$command = "server info";
*/ 
$username = 'admw';
$password = 'admw';
$host = "localhost";
$soapport = 7878;
$command = "server info";

$client = new SoapClient(NULL,
array(
    "location" => "http://$host:$soapport/",
    "uri" => "urn:TC",
    "style" => SOAP_RPC,
    'login' => $username,
    'password' => $password
));
try 
{
    $result = $client->executeCommand(new SoapParam($command, "command"));
    $result2 = $client->executeCommand(new SoapParam("account onlinelist", "command"));
    $params=preg_split("/[\n\r]+/", $result);
    $Aux=explode(':', $params[1]);
    echo "NUESTRO SERVIDOR\n\n";
    echo "Usuarios\n------------\n conectados: ".$Aux[1].$Aux[2]."\n\n";
    $Aux=explode(' ', $params[2]);
    echo "Conexiones\n------------\n activas: ".$Aux[2]." (max:".$Aux[4]."\n";
    echo " en cola: ".$Aux[7]." (max:".$Aux[9]."\n\n";
    $Aux=explode(':', $params[3]);
    $HorasSub=str_replace("Hour(s)", "H", $Aux[1]);
    $MinsSub=str_replace("Minute(s)", "M", $HorasSub);
    $SecsSub=str_replace("Second(s)", "S", $MinsSub);
    $DiasSub=str_replace("Day(s)", "D", $SecsSub);
    echo "Tiempo activo\n----------------\n".$DiasSub."\n\n\n";
    if ( !strstr ($result2, "No online players"))
    {
       echo "Jugando ahora:\n----------------\n";
       $Llista=explode("-", $result2);
       foreach ( $Llista as $MyKey => $MyValue )
       {
          if (strstr($MyValue,"#1"))
          {
             $Aux=str_replace("]", " ", $MyValue);
             $ArrAux=explode("[", $Aux);
             // print_r($ArrAux);
             echo $ArrAux[2]."\n";
          }
       }
    }
    
}
catch (Exception $e)
{
    echo "Servidor en mantenimiento\n";
}
?>
</pre>
</body>
</html>
