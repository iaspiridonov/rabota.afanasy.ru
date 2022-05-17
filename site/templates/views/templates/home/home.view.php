<?php namespace ProcessWire; ?>

<section class="section section--bg-vacancy">
    <div class="container u-position-relative">
        <div class="bg-word">VACANCY</div>
        <div class="row">
            <div class="col-lg-4">
                <div class="u-h2">Вакансии</div>
            </div>
            <div class="col-lg-8 u-my-4">
                <form action="/vacancies/" method="GET">
                    <div class="find">
                        <input type="submit">
                        <input type="text" name="search" placeholder="Поиск по вакансиям" value="<?= $input->get('search') ?>">
                    </div>
                </form>
            </div>
            
            <?php $i = 0; ?>
            <?php foreach ($page->find('template=basic-page') as $p): ?>
                <?php $i++ ?>
                <div class="col-lg-4 col-sm-6 u-mb-4 <?= $i % 2 == 1 ? 'offset-lg-4' : '' ?>">
                    <a href="/vacancies/?sort=<?= $p ?>" class="card">
                        <div class="card__title">
                            <?= $p->title ?>
                        </div>
                        <div class="card__vacancies">
                            Вакансий: <?= $p->children->count ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            
        </div>
        
    </div>
</section>

<section class="section section--bg-bonuses section--bg-gray">
    <div class="container u-position-relative">
        <div class="bg-word">Bonuses</div>
        <div class="row">
            <div class="col-lg-4 u-mb-lg-0 u-mb-4">
                <div class="u-h2">Почему Афанасий</div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-1.svg" alt="popular">
                    <div class="bonus__title">
                        Известный бренд с 45-летней историей
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-4.svg" alt="popular">
                    <div class="bonus__title">
                        Заработные платы выше рынка
                    </div>
                </div>
            </div>
            <div class="offset-lg-4 col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-2.svg" alt="popular">
                    <div class="bonus__title">
                        Полный социальный пакет
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-5.svg" alt="popular">
                    <div class="bonus__title">
                        Реальные возможности профессионального и карьерного роста
                    </div>
                </div>
            </div>
            <div class="offset-lg-4 col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-3.svg" alt="popular">
                    <div class="bonus__title">
                        Мультипродуктовый холдинг с возможностью развития в самых разных направлениях
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="bonus">
                    <img src="/site/templates/static/img/icon/ico-advantages-6.svg" alt="popular">
                    <div class="bonus__title">
                        Программа лояльности для сотрудников по всем продуктам экосистемы холдинга: сеть экобутиков, клиника, базы отдыха в Ордино и Весьегонске, клиника, аквачистка
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--bg-agitation u-pb-0">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-4 u-mb-lg-0 u-mb-4">
                <div class="u-h2">Нам нужны люди, разделяющие наши ценности</div>
            </div>
        </div>
        <div class="swiper swiper-agitation">
            <div class="swiper-wrapper">
                <?php foreach ($page->employers as $p): ?>
                
                    <div class="swiper-slide swiper-agitation-slide">
                        <div class="swiper-agitation-slide__wrapper">
                            <div class="swiper-agitation-slide__wrapper-title">
                                <?= $p->title ?>
                            </div>
                            <div class="swiper-agitation-slide__wrapper-position">
                                <?= $p->position ?>
                            </div>
                            <div class="swiper-agitation-slide__wrapper-description">
                                <?= $p->body ?>
                            </div>
                        </div>
                        
                        <?php if ($p->first): ?>
                            <img src="/site/templates/static/img/gal-agitation-1.png" alt="1" class="swiper-agitation-slide__img u-d-lg-inline-block u-d-none">
                            <img src="/site/templates/static/img/gal-agitation-1--horizontal.png" alt="1" class="swiper-agitation-slide__img u-d-lg-none u-d-inline-block">
                        <?php else: ?>
                            <img src="<?= $p->image->url ?>" alt="<?= $p->image->description ?>" class="swiper-agitation-slide__img">
                        <?php endif; ?>
                    </div>
                    
                <?php endforeach; ?>
            </div>
            <div class="agitation__pagination-item--prev swiper-button-prev"></div>
            <div class="agitation__pagination-item--next swiper-button-next"></div>
        </div>
    </div>
</section>

<section class="section section--bg-gray">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-4 u-mb-lg-5 u-mb-4">
                <div class="u-h2">Галерея</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 u-position-relative">
                <div class="swiper swiper-gallery">
                    <div class="swiper-wrapper">
                        <?php foreach ($page->gallery as $image): ?>
                        
                            <div class="swiper-slide swiper-gallery-slide">
                                <img src="<?= $image->url ?>" alt="<?= $image->description ?>">
                            </div>
                        
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="agitation__pagination-item--prev swiper-button-prev"></div>
                <div class="agitation__pagination-item--next swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>