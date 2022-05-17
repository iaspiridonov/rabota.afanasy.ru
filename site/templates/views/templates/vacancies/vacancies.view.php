<?php namespace ProcessWire; ?>

<section class="section">
    <div class="container u-position-relative">
        <div class="row">
            <div class="col-lg-4">
                <div class="u-h2 u-mb-4">Все вакансии <span class="u-color-gray u-font-light">(<?= $vacancies->count ?>)</span></div>
                <div class="offers-list">
                    <form action="" method="GET" class="js-form-vacancies">
                        <?php foreach ($page->children as $p): ?>
                        
                            <div class="custom-checkbox u-mb-4">
                                <input <?= stripos($input->get('sort'), "$p->id") !== false ? 'checked' : '' ?> class="custom-checkbox__input" type="checkbox" id="<?= $p->id ?>" name="sort" value="<?= $p->id ?>">
                                <label for="<?= $p->id ?>"><?= $p->title ?></label>
                                <div class="text-secondary">Вакансий: <?= $p->children->count ?></div>
                            </div>
                            
                        <?php endforeach; ?>
                        <button class="button button--small button--purple" type="submit">Показать</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 u-my-4">
                <form action="#" class="u-mb-4">
                    <div class="find">
                        <input type="submit">
                        <input type="text" name="search" placeholder="Поиск по вакансиям" value="<?= $input->get('search') ?>">
                    </div>
                </form>
                
                <?php $i = 0; ?>
                <?php if ($vacancies->count > 0): ?>
                
                    <?php foreach ($vacancies as $item): ?>
                        <div class="accordion <?= ($i === 0) ? 'accordion--active' : '' ?>">
                            <div class="accordion__title">
                                <?= $item->title ?>
                                
                                <svg class="accordion__ico" width="25" height="25" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="accordion__plus" d="M12.027 11.9676L20.9295 11.9746C21.1958 11.9746 21.4512 11.8689 21.6395 11.6806C21.8278 11.4923 21.9336 11.2369 21.9336 10.9706C21.9336 10.7043 21.8278 10.4489 21.6395 10.2606C21.4512 10.0723 21.1958 9.96647 20.9295 9.96647L12.027 9.97354L12.0341 1.07106C12.0341 0.804762 11.9283 0.549367 11.74 0.361064C11.5517 0.17276 11.2963 0.0669718 11.03 0.0669718C10.7637 0.0669718 10.5083 0.17276 10.32 0.361064C10.1317 0.549367 10.0259 0.804762 10.0259 1.07106L10.033 9.97354L1.13052 9.96647C0.998509 9.96593 0.867699 9.99153 0.745633 10.0418C0.623566 10.0921 0.512661 10.166 0.419314 10.2594C0.325968 10.3527 0.252027 10.4636 0.201759 10.5857C0.15149 10.7077 0.125889 10.8385 0.12643 10.9706C0.125889 11.1026 0.15149 11.2334 0.201758 11.3554C0.252027 11.4775 0.325968 11.5884 0.419314 11.6818C0.512661 11.7751 0.623565 11.8491 0.745632 11.8993C0.867698 11.9496 0.998511 11.9752 1.13052 11.9746L10.033 11.9676L10.0259 20.8701C10.0254 21.0021 10.051 21.1329 10.1013 21.2549C10.1515 21.377 10.2255 21.4879 10.3188 21.5813C10.4122 21.6746 10.5231 21.7485 10.6451 21.7988C10.7672 21.8491 10.898 21.8747 11.03 21.8741C11.162 21.8747 11.2928 21.8491 11.4149 21.7988C11.537 21.7485 11.6479 21.6746 11.7412 21.5813C11.8346 21.4879 11.9085 21.377 11.9588 21.2549C12.009 21.1329 12.0346 21.0021 12.0341 20.8701L12.027 11.9676Z"/>
                                    <path class="accordion__minus" d="M8.99981 10.2922L15.2898 16.5922C15.4781 16.7806 15.7335 16.8863 15.9998 16.8863C16.2661 16.8863 16.5215 16.7806 16.7098 16.5922C16.8981 16.4039 17.0039 16.1486 17.0039 15.8822C17.0039 15.6159 16.8981 15.3606 16.7098 15.1722L10.4098 8.88225L16.7098 2.59225C16.8981 2.40394 17.0039 2.14855 17.0039 1.88225C17.0039 1.61595 16.8981 1.36055 16.7098 1.17225C16.5215 0.983944 16.2661 0.878156 15.9998 0.878156C15.7335 0.878156 15.4781 0.983944 15.2898 1.17225L8.99981 7.47225L2.70981 1.17225C2.61685 1.07852 2.50625 1.00412 2.38439 0.953356C2.26253 0.902587 2.13183 0.876449 1.99981 0.876449C1.8678 0.876449 1.7371 0.902587 1.61524 0.953356C1.49338 1.00412 1.38278 1.07852 1.28982 1.17225C1.19609 1.26521 1.12169 1.37581 1.07092 1.49767C1.02015 1.61953 0.994017 1.75024 0.994017 1.88225C0.994017 2.01426 1.02015 2.14496 1.07092 2.26682C1.12169 2.38868 1.19609 2.49928 1.28982 2.59225L7.58981 8.88225L1.28982 15.1722C1.19609 15.2652 1.12169 15.3758 1.07092 15.4977C1.02015 15.6195 0.994016 15.7502 0.994016 15.8822C0.994016 16.0143 1.02015 16.145 1.07092 16.2668C1.12169 16.3887 1.19609 16.4993 1.28982 16.5922C1.38278 16.686 1.49338 16.7604 1.61524 16.8111C1.7371 16.8619 1.8678 16.888 1.99981 16.888C2.13183 16.888 2.26253 16.8619 2.38439 16.8111C2.50625 16.7604 2.61685 16.686 2.70981 16.5922L8.99981 10.2922Z"/>
                                </svg>

                            </div>
                            <div class="accordion__content">
                                <div>
                                    <?= $item->short_description ?>
                                </div>
                                <a href="<?= $item->url ?>" class="u-font-size-14 u-color-link u-d-flex u-align-items-center">
                                    Откликнуться на вакансию
                                    <svg class="u-ms-2" width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.35355 4.17692C8.54882 3.98166 8.54882 3.66507 8.35355 3.46981L5.17157 0.28783C4.97631 0.0925682 4.65973 0.0925682 4.46447 0.28783C4.2692 0.483093 4.2692 0.799675 4.46447 0.994937L7.29289 3.82336L4.46447 6.65179C4.2692 6.84705 4.2692 7.16364 4.46447 7.3589C4.65973 7.55416 4.97631 7.55416 5.17157 7.3589L8.35355 4.17692ZM0 4.32336L8 4.32336V3.32336L0 3.32336L0 4.32336Z" fill="#005BD1"/>
                                    </svg>
                                        
                                </a>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    
                    <?php else: ?>
                        <div class="u-font-size-18">Вакансии с указанным фильтром не найдены :(</div>
                
                <?php endif; ?>
                
            </div>
        </div>
        
    </div>
</section>