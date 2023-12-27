<div class="py-5 bg-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="footer-heading"><?= webSetting('title') ?? 'Meta Desc'; ?></h4>
                <hr>
                <p>
                    <?= webSetting('small_description') ?? 'Meta Desc'; ?>
                </p>
            </div>
            <div class="col-md-4">
                <h4 class="footer-heading">Siguenos en</h4>
                <hr>
                <ul>
                    <?php

                    $socialMedia = getAll('social_medias');
                    if($socialMedia) {
                        if(mysqli_num_rows($socialMedia) > 0) {

                            foreach($socialMedia as $socialItem) {
                                ?>
                                <li>
                                    <a href="<?= $socialItem['url'] ?>"><?= $socialItem['name'] ?></a>
                                </li>
                                <?php
                            }

                        } else {
                            echo "<li>No se agregaron redes sociales.</li>";
                        }
                    } else {
                        echo "<li>Algo salio mal!</li>";
                    }

                    
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="footer-heading">Información de Contacto</h4>
                <hr>
                <p>Dirección: <?= webSetting('address') ?? ''; ?></p>
                <p>Email: <?= webSetting('email1') ?? ''; ?>, <?= webSetting('email2') ?? ''; ?></p>
                <p>Telefono: <?= webSetting('phone1') ?? ''; ?>, <?= webSetting('phone2') ?? ''; ?></p>
            </div>
        </div>
    </div>
</div>