<?php 
    include_once "app/config.inc.php";
    $titulo = "Backup 360 para Productividad - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron container-fluid">
    <h1>Backup 360 para Productividad</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>La única manera de proteger sus datos de nube (O365/GSuite) y asegurarse de que usted nunca perderá el acceso a ellos es realizar una copia de seguridad a otra nube. 
                Si usted tiene una copia de reserva de su buzón, almacenamiento, contactos y eventos del calendario entonces usted siempre será capaz de restaurar sus datos, incluso 
                si la cuenta del usuario ha sido eliminada o infectada. <b>BackUp 360 para Productividad</b> es una solución de seguridad de la información, por medio de copias de seguridad 
                cifradas por usuario, montadas en la nube de forma granular, lo cual permite fácil acceso archivo por archivo.</p><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>BACKUP_360_PRODUCTIVIDAD.jpg" width="100%" height="50%">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Es un servicio de Cloud to Cloud soportado por MS AZURE o Amazon AWS. Esto significa que puede ser accedido desde cualquier lugar del mundo.</li><br>
                <li>Disminuye la carga operativa en administración de la gestión del backup.</li><br>
                <li>Siempre se tendrá acceso a el correo, drive, contactos, eventos de calendario, incluso cuando O365/GSuite presente escenarios de indisponibilidad.</li><br>
                <li>Flexibilidad realizar una copia de seguridad de los archivos y correos electrónicos de forma manual o programada.</li><br>
                <li>Puede restaurar todo su correo, carpetas de su drive o archivos individuales: puede restaurar una carpeta seleccionada del buzón o un solo mensaje de correo electrónico.</li><br>
                <li>Es capaz de restaurar cualquier versión de un archivo según la política de respaldo de la empresa.</li><br>
            </ul>
            
        </div>
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Características</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Copias de seguridad Cloud to Cloud sin necesidad de descargarlas en ningún hardware.</li><br>
                <li>Almacenamiento independiente al estado de la suscripción de Office 365 o G-Suite.</li><br>
            </ul>
        </div>        
    </div>    
</div>

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>

