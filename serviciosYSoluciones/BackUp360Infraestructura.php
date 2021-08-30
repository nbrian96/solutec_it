<?php 
    include_once "app/config.inc.php";
    $titulo = "Backup 360 para Infraestructura - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron container-fluid">
    <h1>Backup 360 para Infraestructura</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p><b>BackUp 360 para Infraestructura</b> es un servicio que se realiza de forma automatizada, centralizada y segura, clave para salvaguardar los datos locales y alojados en la nube. Permite realizar copias de seguridad y/o restaurar archivos, carpetas, máquinas virtuales y de Gestores de Contenido.</p><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5" align="center">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>BACKUP_360_INFRAESTRUCTURA_1.jpg" width="60%" height="50%">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Es un servicio Cloud que puede ser accedido desde cualquier lugar del mundo, con cualquier dispositivo conectado a internet.</li><br>
                <li>Disminuye la carga operativa en administración de la gestión del backup.</li><br>
                <li>Cambia positivamente las estrategias de backups no funcionales.</li><br>
                <li>Ahorra costos altos de estrategia de custodia.</li><br>
                <li>Obtiene alta fiabilidad en la restauración de la información.</li><br>
                <li>Evita la obsolescencia de las tecnologías actuales de backup.</li><br>
            </ul>
            
        </div>
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Características</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Solución unificada para la protección de datos locales y en la nube, con 99,9% de disponibilidad garantizada.</li><br>
                <li>Destino fiable para copias de seguridad remotas.</li><br>
                <li>Eficientes copias de seguridad incrementales.</li><br>
                <li>Seguridad y cifrado de los datos activos e inactivos.</li><br>
                <li>Almacén de copia de seguridad con replicación geográfica.</li><br>
                <li>Ofrece los servicios de implementación y administración de la plataforma.</li><br>
                <li>Proporciona protección para los datos independientemente de dónde residan (en el centro de datos empresarial, en sucursales u oficinas remotas o en la nube pública).</li><br>
                <li>Proporciona servicios de recuperación basados en una infraestructura de clase mundial escalable, duradera y de alta disponibilidad.</li><br>
                <li>Requisito: Localmente se requiere un servidor físico o virtual; los componentes de almacenamiento están hospedados en la nube de Azure. Se puede obtener acceso al portal de administración y gestión desde cualquier explorador, por lo que no hay requisito de software del cliente.</li><br>
                
            </ul>
        </div>        
    </div>    
</div>

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
