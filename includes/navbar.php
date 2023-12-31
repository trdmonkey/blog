<div class="sticky-top">
  <div class="bg-primary py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-white">
          Email: <?= webSetting('email1') ?? ''; ?>
          Telefono: <?= webSetting('phone1') ?? ''; ?>
        </div>
        <div class="col-md-6 text-white">
          Social Media: 
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-white shadow sticky-top">

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

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="services.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">Contactanos</a>
          </li>
        </ul>

        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->

      </div>
    </div>
  </nav>
</div>