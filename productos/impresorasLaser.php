<?php 
    include_once "app/config.inc.php";
    $titulo = "Impresoras Laser";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div align="center">
                <img src="<?php echo RUTA_IMG ?>impresoras/implaser1.jpg" width="80%" >
            </div>
        </div>
        <div class="col-md-7">
            <h2>Impresora Laser HP 107W</h2>
            <h3>Especificaciones</h3>
            <p> 
                <b>Marca:</b> HP <br>
                <b>Modelo:</b> 107W <br>
                <b>Tipo de impresora:</b> monofunción <br>
                <b>Resolución de impresión:</b> 1200x1200dpi<br>
                <b>Formato de papel maximo:</b> A4 <br>
                <b>Velocidad de Impresión ByN:</b> 20 ppm <br>
           
            </p>        
        </div>
        
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5">
            <div align="center">
                <img src="<?php echo RUTA_IMG ?>impresoras/implaser2.jpg" width="80%" >
            </div>
        </div>
        <div class="col-md-7">
            <h2>Impresora Láser HP Neverstop 1000W </h2>
            <h3>Especificaciones</h3>
            <p> 
                <b>Marca:</b> HP <br>
                <b>Modelo:</b> Neverstop 1000W <br>
                <b>Tipo de impresión:</b> monocromatica <br>
                <b>Resolución de impresión:</b> 600x600 dpi<br>
                <b>Formato de papel maximo:</b> A4 <br>
                <b>Velocidad de Impresión ByN:</b> 20 ppm <br>
             
            </p>        
        </div>
        
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5">
            <div align="center">
                <img src="<?php echo RUTA_IMG ?>impresoras/implaser3.jpg" width="80%" >
            </div>
        </div>
        <div class="col-md-7">
            <h2> Impresora Láser Brother hl-l2360dw </h2>
            <h3>Especificaciones</h3>
            <p> 
                <b>Marca:</b> Brother <br>
                <b>Modelo:</b> hl-l2360dw <br>
                <b>Resolución de impresión:</b> 2400x600 dpi<br>
                <b>Formato de papel maximo:</b> A4 <br>
                <b>Velocidad de Impresión ByN:</b> 32 ppm <br>                
            </p>        
        </div>
    </div>
</div>
<br><br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>