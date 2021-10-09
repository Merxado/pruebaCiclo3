<?php
//Activamos el almacenamiento en el buffer
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
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
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
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                      <h4>Proyecto: </h4> 
                      <p>Biblioteca virtual</p>
                      <h4>Desarrollado por: </h4>
                      <P>Estudiantes de programación</P>
                      <p>Gabriela Cordoba</p>
                      <p>Email: </p>
                      <p>Grace Güette</p>
                      <p>Email: </p>
                      <p>Juan Guillermo Rios</p>
                      <p>Email: </p>
                      <p>Miguel Amaya</p>
                      <p>Email: </p>
                      <p>Norberto Diaz</p>
                      <p>Email: </p>
                      <p>David Prada</p>
                      <p>Email: </p>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
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


