<?php 
    include_once "app/config.inc.php";
    $titulo = "Connect Office 365 - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron">
    <h1>Connect Office 365</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p>Contar con la suscripción a Office 365 para su negocio le brinda una gran cantidad de herramientas 
                para potenciar la productividad de su equipo. Sin embargo, la administración de su suscripción y la configuración de 
                las cuentas es un trabajo dispendioso, y que puede requerir conocimientos técnicos para su correcta realización. 
                Con <b>COEM Connect Office 365</b> le ofrecemos los servicios que su empresa necesita para la gestión y configuración 
                de su suscripción a Office 365, con personal experto y sin la carga administrativa.</p><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>COEM_Connect_Office_365_XaaS_.jpg" width="100%" height="50%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Aumentar la productividad de su negocio.</li><br>
                <li>Asegurar la continuidad del servicio y minimizar el riesgo.</li><br>
                <li>Contar con un solo proveedor para el acceso técnico con los servicios de Office 365.</li><br>
                <li>Excelente relación costo-beneficio.</li><br>
                <li>Disponibilidad de especialistas locales certificados.</li><br>
                <li>Generar informes sobre actividades del servicio.</li><br>
                <li>Contacto personalizado en español.</li><br>
            </ul>            
        </div>
        <div class="col-md-5"></div>
    </div>
</div>     

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>