    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?=base_url('home')?>">Wilson</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('aboutme')?>">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('contact')?>">Contact</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container col-md-5">
      <div class="card card-mn">
        <form id="formulariocontacto" action="" method="post">
          <h3 id="titulocontact">Contacto</h3>
          <div class="form-group">
            <input type="text" class="form-control" name="nombreContacto" id="nombreContacto" placeholder="Ingrese su nombre*" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="asuntoContacto" id="asuntoContacto" placeholder="Ingrese el asunto*" required>
          </div>
          <div class="form-group">
            <textarea name="mensajeContacto" class="form-control" rows="8" cols="80" placeholder="Ingrese su mensaje*" id="mensajeContacto" required></textarea>
          </div>
          <button type="submit" class="btn btn-success col-md-3" name="btn-enviar" id="btn-enviar">Enviar</button>
        </form>
      </div>
    </div>
    <br>
    <div class="col-md-6 offset-md-3 invisible" id="alerta">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h6>Su mensaje ha sido enviado, gracias por contactarse.</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> var base_url = '<?php echo base_url();?>'</script><!-- base_url -->
    <script type="text/javascript" src="<?=base_url('assets/js/email.js')?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
