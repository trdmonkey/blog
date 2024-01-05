<?php 

$pageTitle = "Inicio";
include('includes/header.php'); 

?>


<div class="container">
    <?= alertMessage(); ?>
</div>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.xtrafondos.com/wallpapers/resized/ilustracion-lago-con-colinas-11804.jpg?s=large" class="d-block w-100 h-100" style="max-height: 300px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.xtrafondos.com/wallpapers/resized/ilustracion-atardecer-en-el-bosque-arido-11801.jpg?s=large" class="d-block w-100 h-100" style="max-height: 300px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.xtrafondos.com/wallpapers/resized/ilustracion-arrecife-con-peces-11802.jpg?s=large" class="d-block w-100 h-100" style="max-height: 300px;" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>Bienvenido a <?= webSetting('title'); ?></h4>
                <div class="underline mx-auto"></div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta earum fugiat ullam quidem molestiae iure possimus rem iusto? Laborum at eos architecto quos. Porro fugiat ullam natus ipsa, ducimus laborum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta earum fugiat ullam quidem molestiae iure possimus rem iusto? Laborum at eos architecto quos. Porro fugiat ullam natus ipsa, ducimus laborum.
                </p>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>


