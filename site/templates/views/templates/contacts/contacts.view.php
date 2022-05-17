<?php namespace ProcessWire; ?>

<section class="section section--bg-contacts">
    <div class="container u-position-relative">
        <div class="bg-word">CONTACTS</div>
        <div class="row">
            <div class="col-lg-4 u-mb-4 u-mb-lg-0">
                <div class="u-h2 u-mb-4">
                    <div class="u-h2">Центральный офис холдинга</div>
                </div>
                <div><b>Телефон:</b> <?= $g_settings->phone ?></div>
                <div><b>E-mail:</b> <?= $g_settings->email ?></div><br>
                <div><b>Адрес:</b> Тверь, ул. Коминтерна, д. 95</div>
            </div>
            <div class="col-lg-8">
                <iframe class="u-mb-5" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ada604a38de7312e55ffc3aa48eb775242272df09a8bf0b3fafed7c7bcf8484bc&amp;source=constructor" width="100%" height="350" frameborder="0"></iframe>
                <div>
                    Звоните: <a href="tel: <?= $g_settings->phone ?>" class="big-link u-ms-3">
                        <?= $g_settings->phone ?>
                    </a>
                </div>
                <div>
                    Пишите: <a href="mailto: <?= $g_settings->email ?>" class="big-link u-ms-3">
                        <?= $g_settings->email ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</section>