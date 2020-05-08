<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>Biblioteca</b>&nbsp;&nbsp;&nbsp; TESH</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Recopilacion los enlaces de navegación, formularios y otro contenido para alternar -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['student'])){
              echo "
                <li><a href='index.php'>INICIO</a></li>
                <li><a href='transaction.php'>TRANSACCION</a></li>

              ";
            } 
          ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Menú derecho de la barra de navegación -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['student'])){
              $photo = (!empty($student['photo'])) ? 'images/'.$student['photo'] : 'images/profile.jpg';
              echo "
                <li class='user user-menu'>
                  <a href='#'>
                    <img src='".$photo."' class='user-image' alt='User Image'>
                    <span class='hidden-xs'>".$student['firstname'].' '.$student['lastname']."</span>
                  </a>
                </li>
                <li><a href='logout.php'><i class='fa fa-sign-out'></i> CERRAR SESIÓN</a></li>
              ";
            }
            else{
              echo "
                <li><a href='#login' data-toggle='modal'><i class='fa fa-sign-in'></i>&nbsp;&nbsp;&nbsp; LOGIN</a></li>
                <li><a href='admin/index.php' data-toggle='modal'><i class='fa fa-key'></i> INGRESO DE ADMIN</a></li>
              ";
            } 
          ?>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
<?php include 'includes/login_modal.php'; ?>