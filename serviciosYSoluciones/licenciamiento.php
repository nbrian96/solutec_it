<?php 
    include_once "app/config.inc.php";
    $titulo = "Licenciamiento - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="container-fluid jumbotron" id="Jumbotron">
    <h1>Licenciamiento</h1>
</div>
<!-- Presentacion y Beneficios -->
<div class="container">
    <div class="jumbotron" style="background-color: white;">
        <div class="row">
            <!-- Presentacion -->
            <div class="col-md-7">               
                <p id="textoJustificado" style="font-size: 1.2em;">                ​
                    El uso legal de software proporciona garantías al usuario y permite que aumenten las oportunidades de competitividad y productividad dentro de la industria, ya que ayuda a los fabricantes y empresas a seguir innovando en sus productos.
                </p>
                <p id="textoJustificado" style="font-size: 1.2em;"> 
                    Sabemos lo importante que es para tu compañía contar con software oficial. Por eso te brindamos asesoramiento especializado para tu inversión en licencias originales, cualquiera sea la marca o el tipo de licencia (nueva, renovación, suscripción, alquiler, etc.). 
                </p>
                <p id="textoJustificado" style="font-size: 1.2em;"> 
                    Ya sean licencias para puestos de trabajo, equipos portátiles, tablets, smartphones o servidores; te ayudamos a identificar la cantidad y el tipo de producto que necesitás, para estar correctamente licenciado, sin riesgos ni complicaciones legales.
                </p>
                <p id="textoJustificado" style="font-size: 1.2em;"> 
                    Si tu empresa está llevando adelante un proceso de regularización de software, podemos brindarte asesoramiento para que tengas las licencias que necesitás, cuidando tu inversión y cumpliendo con todas las normativas de Software Legal.
                </p>
                <br>           
            </div>
            <!-- Beneficios -->
            <div class="col-md-5"> 
                <hr id="lineaHorizontal" style="margin-top: 0em;margin-bottom: 0.5em;">
                <h2  style="color: #b61e6a; margin-top: 0em;" >Beneficios</h2>
                <ul  id="textoJustificado" style="list-style-type: circle; font-size: 16px;padding-left: 1em;">
                    <li>Actualizaciones seguras de Microsoft que le permitirá estar protegido contra amenazas de malware.</li><br>
                    <li>Dar cumplimiento a los informes de gestión ya que se cumple con la norma de propiedad intelectual.</li><br>
                    <li>Garantiza el funcionamiento correcto del software instalado.</li><br>
                    <li>Con contratos por volumen pueden administrar eficazmente las licencias adquiridas.</li><br>
                    <li>Soporte con el fabricante.</li>
                </ul>
            </div>
        </div>        
    </div>
</div>
<!-- Licencias -->
<div class="container">
    <div class="row">
        <div class="col-md-6"> 
            <img class="img-responsive" id="centrarImagen" style="margin-bottom: 1em;" src="<?php echo RUTA_IMG ?>licenciamiento/microsoft_gris.png">          
            <p id="textoJustificado">
                Windows, Office, Office 365, Windows Server, SQL Server, Windows
                Server CALS, SQL Server CALS, Teams, Power Bi, Flow, Visio, Project.
            </p>
            <br>
        </div>         
        <div class="col-md-6"> 
            <img class="img-responsive" id="centrarImagen" style="margin-bottom: 1em;" src="<?php echo RUTA_IMG ?>licenciamiento/adobe_gris.png">          
            <p id="textoJustificado">
                Illustrator, Photoshop, Acrobat, Premiere, Stock, After Effects, In Copy,
                In Design, Creative Cloud, Dreamweaver, Audition, etc.
            </p>
        </div>
    </div>
    <br><br> 
    <div class="row">
        <div class="col-md-6">   
            <img class="img-responsive" id="centrarImagen" style="margin-bottom: 1.2em;" src="<?php echo RUTA_IMG ?>licenciamiento/Veeam_gris.png">
            
            <p id="textoJustificado">
                Availability Suite, Replication, Backup Essentials.
            </p>
            <br>
        </div>
        <div class="col-md-6"> 
            <img class="img-responsive" id="centrarImagen"style="margin-bottom: 1.2em;" src="<?php echo RUTA_IMG ?>licenciamiento/VMware_gris.png">
            
            <p id="textoJustificado">
                vCloud, vSan, vSphere, vSphere Platinum, vCenter Operations
                Management Suite, etc.
            </p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6"> 
            <img class="img-responsive" id="centrarImagen" style="margin-bottom: 1em;" src="<?php echo RUTA_IMG ?>licenciamiento/mcafee_gris.png">
            <p id="textoJustificado">McAfee® Total Protection</p>
            <br>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>licenciamiento/sophos_gris.png">
            <p id="textoJustificado">
                Cloud Optix, Intercept X, Sophos Central, XG Firewall.
            </p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6"> 
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>licenciamiento/corel_2019_gris.png">
            <p id="textoJustificado">
                Corel Draw Graphic Suite.
            </p>
            <br>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" id="centrarImagen" style="margin-top: 2em; margin-bottom: 2em;"src="<?php echo RUTA_IMG ?>licenciamiento/BitTitan_gris.png">
            <p id="textoJustificado">
                Migrationwiz Mailbox, Migrationwiz Public folder Migration,
                Deploymentpro, Migrationwiz & Deploymentpro Bundle.
            </p>
        </div>
    </div>
</div>
<br><br>
<!-- Mas informacion -->
<div class="container"> 
    <div class="row">        
        <div class="col-md-6 col-sm-6"> 
            <hr id="lineaHorizontal">
            <p style="color: #b61e6a; text-align: center;font-size: 1.3em;">
                Más información sobre licenciamiento de seguridad
            </p>  
            <div id="contenedorMas">
                <a href="<?php echo RUTA_LICENCIAMIENTO_SEGURIDAD ?>">
                    <img class="img-responsive img-rounded" id="imgMas" src="<?php echo RUTA_IMG ?>masInfo.jpg">
                </a>
            </div>
            <br>
        </div>         

        <div class="col-md-6 col-sm-6"> 
            <hr id="lineaHorizontal">
            <p style="color: #b61e6a; text-align: center; font-size: 1.3em;">
                Más información sobre licenciamiento de productividad
            </p>        
            <div id="contenedorMas">
                <a href="<?php echo RUTA_LICENCIAMIENTO_PRODUCTIVIDAD ?>">
                    <img class="img-responsive img-rounded" id="imgMas" src="<?php echo RUTA_IMG ?>masInfo.jpg">
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
