<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="footer-heading"><?= webSetting('title') ?? 'Meta Desc'; ?></h4>
                <hr>
                <p>
                    <?= webSetting('small_description') ?? 'Meta Desc'; ?>
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="footer-heading">Información de Contacto</h4>
                <hr>
                <p>Dirección: <?= webSetting('address') ?? ''; ?></p>
                <p>Email: <?= webSetting('email1') ?? ''; ?>, <?= webSetting('email2') ?? ''; ?></p>
                <p>Telefono: <?= webSetting('phone1') ?? ''; ?>, <?= webSetting('phone2') ?? ''; ?></p>
            </div>
        </div>
    </div>
</div>