<?php
  session_start();
  include "conexiones/conexion.php";
  if(!isset($_SESSION['usuario'])){
      echo '<script> window.location="2016/consejo_tecnico/index.php"</script>';
  }
	if($_SESSION['tipo'] == '1')
	{
		echo '<script> window.location="2016/consejo_tecnico/portal.php"</script>';
	}
?>
<div class="contenido2">
  <div class="row">
    <div class="col-xs-5">
      <p><b>Escuela Nacional de Estudios Superiores</b></br>
        Unidad Morelia</br></br>

      Antigua Carretera a Pátzcuaro No. 8701</br>
      Col. Ex Hacienda de San José de la Huerta</br>
      C.P. 58190 Morelia, Michoacán, México</br>
      Teléfonos:</br>
      Desde Morelia (443) 6-89-35-00</br>
      Desde Ciudad de México (55) 5623-73-00</p>
    </div>
    <div class="col-xs-2">
    </div>
    <div class="col-xs-5">
      <p>Hecho en México. Honorable Consejo Técnico ENES</br>
        / UNAM Campus Morelia. </br>
      Todos los Derechos Reservados. Este sitio puede ser </br>
      reproducido con fines no lucrativos, siempre y cuando</br>
      no se mutile, se cite la fuente completa y su dirección </br>
      electrónica; de otra forma, se requiere permiso de la </br>
      institución por escrito. La responsabilidad de los</br>
      contenidos publicados recae de manera exclusiva, en</br>
      sus autores.</p>
    </div>
  </div>
  <div class="row">
    <br><br>
    <div id="derechos">
      <center><h5><b>H. Consejo Técnico ENES Morelia</b></h5>
        <?php
        if($_SESSION['tipo'] == '0')
          {
            echo'<a href="PanelControl.php">Ir al Panel de Control</a>';
          }
          ?>
        </center>
    </div>
  </div>
</div>
