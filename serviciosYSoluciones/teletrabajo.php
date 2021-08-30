<?php 
    include_once "app/config.inc.php";
    $titulo = "Teletrabajo - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1 style="font-size: 3em;">Teletrabajo: trabaja eficientemente desde casa</h1>
    <h3>Trabaja cómodamente desde tu oficina móvil con una conexión remota segura y de confianza</h3>
</div>
<div class="container">    
    <div class="row">
        <div class="col-md-5">
            <br>
            <img id="imagen6" src="<?php echo RUTA_IMG ?>teletrabajo.jpg" width="100%" height="50%">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Trabajar desde casa: todo lo que necesitas para el teletrabajo</h2>
            <p id="textoJustificado" style="font-size: 1.2em;">                ​​
                Cuando se trabaja desde casa es importante tener acceso a datos y recursos relevantes que se encuentran en la red de la empresa. Por eso mismo es recomendable establecer una conexión remota desde tu PC de casa o portátil con tu ordenador en el trabajo. Para asegurarte de que todos tus procesos de trabajo funcionan sin interrupciones y poder trabajar de manera productiva desde tu hogar, la conexión debe ser rápida, segura y de confianza. No importa si trabajas desde casa, si necesitas un descanso de la oficina o si te encuentras de viaje de negocios, la clave para un trabajo efectivo es una poderosa conexión remota que te permita el acceso a los materiales de trabajo de la empresa en todo momento.
            </p><br>  
        </div> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Los más altos estándares de seguridad para el teletrabajo</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <p>
                    La seguridad es uno de los requisitos clave al configurar un software de escritorio remoto para el Home Office o teletrabajo. Además, la seguridad de los datos empresariales, del servidor y de los trabajadores es una de las principales preocupaciones de los departamentos informáticos, los proveedores de servicios gestionados y de todos los empleados de la empresa, y se le debe dar prioridad cuando se trabaja desde casa. Una seguridad insuficiente puede provocar horas de inactividad para los sistemas informáticos, una menor productividad y una importante pérdida de datos. Para evitar tales situaciones durante el teletrabajo, siempre deben seguirse ciertas pautas de seguridad. Esta es la única manera de garantizar una seguridad óptima al hacer tu trabajo de oficina desde casa:
                </p>
                <li>Utiliza solamente conexiones a internet fiables para proteger tus archivos y documentos cuando trabajes desde tu casa. No te olvides de que las conexiones WiFi públicas a menudo resultan propensas a las vulnerabilidades de seguridad.</li><br>
                <li>Protege el ordenador portátil que usas para el teletrabajo con una clave cifrada o ponte en contacto con el departamento informático y pide a los expertos que lo hagan por ti.</li><br>
                <li>Vigila tu equipo y toma precauciones para evitar la pérdida o el robo.</li><br>
                <li>Crea contraseñas seguras y memorízalas en lugar de escribirlas.</li><br>
                <li>Ten cuidado al usar memorias USB y otros dispositivos que conectes a tu PC u ordenador portátil. Son fuentes potenciales de malware o software malicioso.</li><br>
                <li>Respeta las normas de Home Office que tenga tu empresa y síguelas cuando trabajes en casa.</li><br>
            </ul>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <br>
            <img id="imagen6" src="<?php echo RUTA_IMG ?>teletrabajo2.jpg" width="100%" height="50%">
            <br>
            <h2 style="color: #b61e6a;">Home Office para aumentar la productividad</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <p>
                    El bienestar y la flexibilidad son dos de los principales beneficios del teletrabajo. Los empleados están satisfechos, lo que potencia la productividad y creatividad y fortalece la moral corporativa tanto en la empresa como en el teletrabajo.
                </p>
            </ul>
            <h2 style="color: #b61e6a;">Trabajar durante viajes de negocios</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <p>
                    El teletrabajo te permite acceder de manera flexible y conveniente a tus datos y herramientas cuando estás fuera, como por ejemplo cuando viajas por negocios, para que dispongas de todo el material necesario cuando lo necesites.
                </p>
            </ul>
            <h2 style="color: #b61e6a;">Comunicación sin límites</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <p>
                    La solución de acceso remoto de TeamViewer sirve para conectarse y comunicarse con compañeros de trabajo, socios comerciales y clientes de todo el mundo, y te facilita el teletrabajo dondequiera que estés.
                </p>
            </ul>
        </div>
    </div>
</div>  
<br> 
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>