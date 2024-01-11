<div class="bg-primary py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-white">
        Email: <?= webSetting('email1') ?? ''; ?> • 
        Telefono: <?= webSetting('phone1') ?? ''; ?>
      </div>
      <div class="col-md-6 text-white">
        Social Media: <a href="<?= webSetting('slug') ?? ''; ?>" target="_blank" class="text-white">www.jorgeluis.com.co</a>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><?= webSetting('title') ?? 'Portafolio de Servicios'; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.php">Acerca de mi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contactanos</a>
        </li>
      </ul>
      &nbsp;&nbsp;
      <form class="d-flex" role="search">
        <a href="login.php" class="btn btn-outline-primary">Log In</a>
      </form>
    </div>
  </div>
</nav>