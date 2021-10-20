<?php
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: index.php");
}
else
{
require 'header.php';
?>
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Contactenos</h1>
                          <div class="box-tools pull-right">
                          </div>
                    </div>
                    <div class="panel-body">
                      <h4>Proyecto: </h4> 
                      <p>Biblioteca virtual</p>
                      <h4>Desarrollado por: </h4>
                      <P>Estudiantes de programación</P>
                      <p>Gabriela Cordoba</p>
                      <p><a href="mailto:gcordobag2016@gmail.com">Enviar correo</a></p>
                      <p>Grace Güette</p>
                      <p><a href="#">Enviar correo</a></p>
                      <p>Juan Guillermo Rios</p>
                      <p><a href="#">Enviar correo</a></p>
                      <p>Miguel Amaya</p>
                      <p><a href="mailto:miguelangelamaya31@gmail.com">Enviar correo</a></p>
                      <p>Norberto Diaz Granados L</p>
                      <p><a href="mailto:info@norbertodiaz.live">Enviar correo</a></p>
                      <p>David Prada</p>
                      <p><a href="mailto:daviyimer1345@outlook.com">Enviar correo</a></p>
                    </div>
                  </div>
              </div>
          </div>
      </section>

    </div>
<?php
require 'footer.php';
?>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siAcercade').addClass("active");
</script>


