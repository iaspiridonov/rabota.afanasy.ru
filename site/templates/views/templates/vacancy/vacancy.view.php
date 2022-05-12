<?php namespace ProcessWire; ?>
<?php $lead = $page->leader->first ?>

<section class="section">
    <div class="container u-position-relative">
        <div class="row">
            <div class="col-lg-4 u-mb-4 u-mb-lg-0">
                <img src="<?= $lead->image->url ?>" alt="offer" class="u-mw-100">
                <div><div class="offer-form__name"><?= $lead->title ?></div></div>
                <div class="u-font-size-14 u-color-gray"><?= $lead->headline ?></div>
            </div>
            <div class="col-lg-8">
                <div class="u-mb-5">
                    <div class="u-h2 u-color-purple"><?= $lead->plaintext ?></div>
                    <div class="u-color-gray"><?= $page->address ?></div>
                </div>
                <div>
                    <div class="u-mb-3">Доход: <b class="u-font-size-24 u-color-purple"><?= $page->salary ?></b></div>
                    <div class="u-mb-4">
                        <?= $page->short_description ?>
                    </div>
                    <div class="u-font-size-24 u-mb-3"><b>Откликнуться на вакансию</b></div>
                    <form action="#" class="offer-form">
                        <div class="offer-form__input">
                            <label for="name">Имя</label>
                            <input name="name" id="name" type="text" placeholder="Как вас зовут?">
                        </div>
                        <div class="offer-form__input">
                            <label for="phone">Номер телефона</label>
                            <input name="phone" id="phone" type="text" placeholder="+7 ___ ___-__-__">
                        </div>
                        <div class="offer-form__input">
                            <label for="email">Электронная почта</label>
                            <input name="email" id="email" type="text" placeholder="Ваша электронная почта">
                        </div>
                        <div class="offer-form__input">
                            <label for="doc">Резюме</label>
                            <input name="doc" id="doc" type="file" placeholder="Ваша электронная почта">
                        </div>
                        <div class="offer-form__input u-mb-2">
                            <textarea name="msg" id="msg" type="text" rows="5" placeholder="Дополнительная информация"></textarea>
                        </div>
                        <div class="offer-form__copy u-mb-3">Отправляя данные, вы соглашаетесь с условиями передачи персональных данных и принимаете <a href="#">политику конфиденциальности.</a></div>
                        <button type="submit" class="button button--small button--purple">Отправить резюме</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>