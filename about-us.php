<?php 

$pageTitle = "Acerca De Mi";
include('includes/header.php'); 

?>

<div class="py-5 bg-secondary">
    <div class="container">
        <h4 class="text-white text-center">Acerca de mi</h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Acerca de <?= webSetting('title'); ?></h4>
                <div class="underline"></div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta earum fugiat ullam quidem molestiae iure possimus rem iusto? Laborum at eos architecto quos. Porro fugiat ullam natus ipsa, ducimus laborum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta earum fugiat ullam quidem molestiae iure possimus rem iusto? Laborum at eos architecto quos. Porro fugiat ullam natus ipsa, ducimus laborum.
                </p>
            </div>
        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>


