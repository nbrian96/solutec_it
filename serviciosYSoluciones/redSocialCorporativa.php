<?php 
    include_once "app/config.inc.php";
    $titulo = "Red Social Corporativa - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Red Social Corporativa</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.2em;">                ​​
                Centralice las comunicaciones manteniendo a toda la organización informada y conectada en un mismo lugar en el que se pueda interactuar de una manera simple y eficaz, colectar ideas, comentar y compartir contenidos sin necesidad de seguir recurriendo solamente al correo electrónico u otras herramientas de terceros que no están bajo el control de la empresa. Yammer es la red social corporativa que viene incluida dentro de los planes de Office 365 proporcionando un ambiente abierto para colaborar con todas las personas a largo de la organización, cubierto bajo las políticas de seguridad y cumplimiento a nivel empresarial de la suite de productividad.
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
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <li>Comunicaciones centralizadas.</li><br>
                <li>Interacción simple similar a las redes sociales personales.</li><br>
                <li>Creación de grupos y comunidades, públicas, privadas, internas y externas para enganchar a más personas con la información adecuada.</li><br>
                <li>Centro de administración propio para una gestión más ajustada a las necesidades y políticas de la organización.</li><br>
                <li>Integración con otras herramientas de Office 365 como Stream, SharePoint, Teams, entre otras.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>