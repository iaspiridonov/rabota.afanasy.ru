<?php namespace ProcessWire; ?>

<section class="section section--bg-history">
    <div class="container u-position-relative">
        <div class="bg-word">Success stories</div>
        <div class="row">
            <div class="col-lg-4 u-mb-4 u-mb-lg-0">
                <div class="u-h2 u-mb-4">
                    <div class="u-h2">Опыт взаимодействия</div>
                </div>
                <div>
                    Отзывы людей трудящихся или трудившихся в холдинге Афанасий
                </div>
            </div>
            <div class="col-lg-8">
                <?php foreach ($page->histories as $p): ?>
                
                    <div class="comment">
                        <div class="comment__head">
                            <img src="<?= $p->image->url ?>" alt="comment">
                            <div>
                                <div class="comment__name"><?= $p->title ?></div>
                                <div class="comment__date"><?= $p->date ?></div>
                            </div>
                        </div>
                        <div class="comment__content">
                            <?= $p->body ?>
                        </div>
                    </div>
                
                <?php endforeach; ?>
            </div>
        </div>
        
    </div>
</section>