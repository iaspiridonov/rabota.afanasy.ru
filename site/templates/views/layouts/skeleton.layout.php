<?php namespace ProcessWire; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/site/templates/static/img/icon/favicon.png">

    <meta name="description" content="Работа в холдинге Афанасий. Подбор вакансий. Тверь">
    <title>Афанасий | Работа</title>

    <link rel="stylesheet" href="/site/templates/static/vendor/u-bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/u-bootstrap/u-bootstrap5.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/mmenu/dist/mmenu.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/mburger-css/dist/mburger.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/fancybox4/dist/fancybox.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/site/templates/static/css/main.min.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G5QE5N0F91"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-G5QE5N0F91');
    </script>
</head>

<body>
    <div id="js-page" class="page">
    
	<section class="section <?= $page->id === 1 ? 'section--promo' : 'u-pt-0' ?> <?= $page->id !== 1 ? 'u-bg-gradient-green' : ''?> ">
        <header>
            <div class="container">
                <div class="navbar">
                    <!-- <a class="u-d-xl-none u-d-lg-block u-d-none u-w-100 u-text-center u-mb-4" href="#"><img src="/site/templates/static/img/logo.svg" alt="logo"></a> -->
                    <a class="u-pe-4" href="/"><img src="/site/templates/static/img/logo.svg" alt="logo"></a>
                    <div class="u-d-flex u-align-items-baseline">
                        <nav id="js-main-menu">
                            <ul class="navbar__list">
                                <li class="navbar__item"><a href="/" class="navbar__link">Главная</a></li>
                                <li class="navbar__item"><a href="/vacancies" class="navbar__link">Вакансии</a></li>
                                <li class="navbar__item"><a href="/histories" class="navbar__link">Истории успеха</a></li>
                                <li class="navbar__item"><a href="/contacts" class="navbar__link">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <a class="mburger u-d-block u-d-lg-none" href="#js-main-menu">
                        <span>Меню</span>
                        <b></b>
                        <b></b>
                        <b></b>
                    </a>
                    <div class="navbar__socials u-d-lg-flex u-d-none">
                        <!-- <a href="#">
                            <img src="/site/templates/static/img/icon/ico-fb.svg" alt="fb">                            
                        </a> -->
                        <a target="_blank" href="https://vk.com/afanasyholding">
                            <img src="/site/templates/static/img/icon/ico-vk.svg" alt="fb">                            
                        </a>
                        <!-- <a href="#">
                            <img src="/site/templates/static/img/icon/ico-inst.svg" alt="fb">                            
                        </a> -->
                        <a target="_blank" href="https://www.youtube.com/channel/UCx52nuO1qz1vLpXy6sHsJ3Q">
                            <img src="/site/templates/static/img/icon/ico-youtube.svg" alt="fb">                            
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        <?php if ($page->id === 1): ?>
            <div class="promo">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="promo__title promo__title--first promo__title--big u-text-lg-start u-text-center">Хочу работать</div>
                            <div class="promo__title promo__title--second promo__title--small u-text-center">Менеджмент и продажи</div>
                            <div class="promo__title promo__title--third promo__title--big u-text-center">В холдинге Афанасий</div>
                            <div class="u-text-center">
                                <button class="button button--promo open-popup">
                                    Отправить резюме
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="promo__scroll">
                <img src="/site/templates/static/img/icon/ico-scroll.svg" alt="scroll down">
            </div>
        
        <?php else: ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="u-h1 u-text-white"><?= $page->title ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
    </section>
	
		<?= region('out'); ?>
		
		<footer class="footer section section--bg-gray u-pt-4 u-position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer__wrapper">
                            <a href="/"><img src="/site/templates/static/img/logo-gray.svg" alt="logo" class="footer__logo"></a>
                            <button class="button button--small button--primary open-popup">Отправить резюме</button>
                            <div class="footer__list">
                                <a target="_blank" href="https://www.afanasy.ru/novosti/nashi-novosti/" class="footer__list-item">Читать блог холдинга</a>
                                <a target="_blank" href="https://www.afanasy.ru/company/presentation/" class="footer__list-item">Все об экосистеме Афанасий</a>
                                <a target="_blank" href="https://www.afanasy.ru/" class="footer__list-item">Сайт холдинга Афанасий</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer__copy">
                            © ООО «Афанасий» <?= date('Y') ?>. Политика о данных пользователей.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        <div class="popup__bg"> 
            <div class="popup">
                <div class="close-popup">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4099 8.99994L16.7099 2.70994C16.8982 2.52164 17.004 2.26624 17.004 1.99994C17.004 1.73364 16.8982 1.47825 16.7099 1.28994C16.5216 1.10164 16.2662 0.99585 15.9999 0.99585C15.7336 0.99585 15.4782 1.10164 15.2899 1.28994L8.99994 7.58994L2.70994 1.28994C2.52164 1.10164 2.26624 0.99585 1.99994 0.99585C1.73364 0.99585 1.47824 1.10164 1.28994 1.28994C1.10164 1.47825 0.995847 1.73364 0.995847 1.99994C0.995847 2.26624 1.10164 2.52164 1.28994 2.70994L7.58994 8.99994L1.28994 15.2899C1.19621 15.3829 1.12182 15.4935 1.07105 15.6154C1.02028 15.7372 0.994141 15.8679 0.994141 15.9999C0.994141 16.132 1.02028 16.2627 1.07105 16.3845C1.12182 16.5064 1.19621 16.617 1.28994 16.7099C1.3829 16.8037 1.4935 16.8781 1.61536 16.9288C1.73722 16.9796 1.86793 17.0057 1.99994 17.0057C2.13195 17.0057 2.26266 16.9796 2.38452 16.9288C2.50638 16.8781 2.61698 16.8037 2.70994 16.7099L8.99994 10.4099L15.2899 16.7099C15.3829 16.8037 15.4935 16.8781 15.6154 16.9288C15.7372 16.9796 15.8679 17.0057 15.9999 17.0057C16.132 17.0057 16.2627 16.9796 16.3845 16.9288C16.5064 16.8781 16.617 16.8037 16.7099 16.7099C16.8037 16.617 16.8781 16.5064 16.9288 16.3845C16.9796 16.2627 17.0057 16.132 17.0057 15.9999C17.0057 15.8679 16.9796 15.7372 16.9288 15.6154C16.8781 15.4935 16.8037 15.3829 16.7099 15.2899L10.4099 8.99994Z" fill="#919399"/>
                    </svg>
                </div>

                <div class="u-font-size-24 u-mb-3"><b>Откликнуться на вакансию</b></div>
                <form action="#" class="offer-form js-form-popup" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $page->title ?>" name="page">
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
                        <label for="file">Резюме</label>
                        <input name="file" id="file" type="file" placeholder="Ваша электронная почта">
                    </div>
                    <div class="offer-form__input u-mb-2">
                        <textarea name="msg" id="msg" type="text" rows="5" placeholder="Дополнительная информация"></textarea>
                    </div>
                    <div class="offer-form__copy u-mb-3">Отправляя данные, вы соглашаетесь с условиями передачи персональных данных и принимаете <a href="#">политику конфиденциальности.</a></div>
                    <div class="u-text-center">
                        <button type="submit" class="button button--small button--primary-inverted">Отправить резюме</button>
                    </div>
                </form>
            </div>
        </div> 
                
	</div>
	
    <script src="/site/templates/static/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/site/templates/static/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/site/templates/static/vendor/mmenu/dist/mmenu.js"></script>
    <script src="/site/templates/static/vendor/mburger-css/dist/mburger.js"></script>
    <script src="/site/templates/static/vendor/fancybox4/dist/fancybox.umd.js"></script>
    <script src="/site/templates/static/vendor/bootstrap5/bootstrap.bundle.min.js"></script>
    <script src="/site/templates/static/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="/site/templates/static/js/main.js"></script>
	<?php //region('jsbottom'); ?>
</body>
</html>
