<?php 
    include_once "app/config.inc.php";
    $titulo = "Software de Productividad - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Software de Productividad</h1>
</div>
<div class="container">

    <div class="row" id="textoJustificado">
        <div class="col-md-6">
            <p style="font-size: 1.3em;">               ​​
                Le proporcionamos un software de productividad para que pueda ver y editar información desde cualquier dispositivo con aplicaciones de escritorio y móviles para PC Windows, iOS, Android y Mac. Incrementamos su productividad facilitando que pueda contar con la información de su organización de manera ordenada y productiva, evaluando su utilidad en los procesos internos para que sean más eficientes, eficaces y efectivos.
            </p><br>            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 1.2em;">
                <li>Hasta 300 usuarios.</li><br>
                <li>Varios dispositivos.</li><br>
                <li>Almacenamiento por usuario.</li><br>
                <li>Correo y calendarios.</li><br>
            </ul>
        </div>
    </div>
    
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>