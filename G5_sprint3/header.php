<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biblioteca I. E Villa Nueva</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../public/css/font-awesome.css">
   
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
      
        <a href="index2.html" class="logo">
          <span class="logo-mini"><b>A</b>D</span>
          <span class="logo-lg"><b>Biblioteca I.E Villa Nueva</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header"></li>
             <li id="siEscritorio">
              <a href="prestamo.php">
                <i class="glyphicon glyphicon-barcode"></i>
                 <span>Prestamos/Devoluciones</span>
              </a>
            </li>
            <li>
            </li>
             <li id="siLibros">
              <a href="libro.php">
                <i class="glyphicon glyphicon-barcode"></i>
                 <span>Libros</span>
              </a>
            </li>
              <li id="siAutores">
              <a href="autor.php">
                <i class="glyphicon glyphicon-barcode"></i>
                 <span>Autores</span>
              </a>
            </li>
            <li id="siEditoriales">
              <a href="editorial.php">
                <i class="glyphicon glyphicon-tags"></i>
                <span>Editoriales</span>
              </a>
            </li>
            <li id="siMaterias">
              <a href="materia.php">
                <i class="glyphicon glyphicon-tags"></i>
                <span>Materias</span>
              </a>
            </li>
            <li id="siProfesor">
              <a href="profesor.php">
                <i class="glyphicon glyphicon-tags"></i>
                <span>Profesores</span>
              </a>
            </li>
            <li id="siEstudiantes">
              <a href="estudiante.php">
                <i class="glyphicon glyphicon-tags"></i>
                <span>Estudiantes</span>
              </a>
            </li>
            <li id="siUsuarios">
              <a href="usuario.php">
                <i class="glyphicon glyphicon-tags"></i>
                <span>Bibliotecario</span>
              </a>
            </li> 
             <li id="siAcercade">
              <a href="acercade.php">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>   
          </ul>
        </section>
      </aside>
