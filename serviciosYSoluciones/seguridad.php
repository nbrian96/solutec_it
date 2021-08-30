<?php 
    include_once "app/config.inc.php";
    $titulo = "Seguridad - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Seguridad</h1>
    <h3>Home Office: la herramienta adecuada para tus necesidades de teletrabajo</h3>
</div>
<div class="container">

    <div class="row" id="textoJustificado">
        <div class="col-md-6">
            <p style="font-size: 1.2em;">                     
                No importa si trabajas para una gran multinacional o para una pequeña o mediana empresa, utilizar una solución de VPN o de escritorio remoto hará que el trabajo desde casa sea tan sencillo como trabajar en la oficina. Con una red privada virtual o VPN puedes acceder de manera flexible a los datos y recursos de la red corporativa cuando trabajes desde tu hogar, así como recibir tus correos electrónicos desde cualquier lugar, en cualquier momento. Sin embargo, la VPN tiene algunos inconvenientes: la configuración es bastante complicada y, a menudo, requiere mantenimiento. Además, una VPN conlleva riesgos de seguridad y tiene diversos requisitos de software que el ordenador que utilizas en casa debe cumplir. Por este motivo, utilizar una solución de escritorio remoto para el teletrabajo desde casa es a menudo la mejor opción como alternativa a la VPN.
            </p>
            <br>
            <p style="font-size: 1.2em;">
                Con un potente software de escritorio remoto podrás acceder fácilmente a los sistemas y archivos dentro de la red corporativa mientras trabajas desde casa con otras aplicaciones de escritorio en tu ordenador. La solución de acceso remoto te brinda la capacidad de conectarte instantáneamente a los servidores de tu empresa en cualquier momento y desde cualquier dispositivo para que puedas disfrutar de los mismos beneficios en casa que trabajando en la oficina. 
            </p>
            <br>            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>seguridad.jpg" width="100%" height="50%">
        </div>
    </div>
    <br>
    
</div>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>