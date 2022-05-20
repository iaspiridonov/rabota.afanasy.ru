$(document).ready(function () {
	
	// Init mmenu
    menu = new Mmenu("#js-main-menu", {
		"navbars": [
			{
				"position": "bottom",
				"content": [
					"<a target='_blank' href='https://vk.com/afanasyholding'><svg class='mx-3' width='36px' height='100%' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M12 24.1979C18.6274 24.1979 24 18.8253 24 12.1979C24 5.57046 18.6274 0.197876 12 0.197876C5.37258 0.197876 0 5.57046 0 12.1979C0 18.8253 5.37258 24.1979 12 24.1979ZM17.2981 8.51883C17.8869 8.44857 17.9817 8.70408 17.9817 8.70408C18.0832 8.96599 17.7651 9.57922 16.9664 10.5821C16.209 11.5328 15.8412 11.884 15.8734 12.1938C15.897 12.421 16.1359 12.6259 16.5942 13.0287C17.5809 13.8934 17.8276 14.3346 17.8799 14.4279C17.8828 14.4332 17.8851 14.4373 17.8869 14.4404C17.8869 14.4404 18.3201 15.1558 17.4064 15.1622L15.6736 15.1878C15.3014 15.258 14.8073 14.9386 14.8073 14.9386C14.5494 14.7713 14.2978 14.4982 14.0586 14.2386C13.6952 13.8441 13.3603 13.4805 13.0746 13.5653C13.0746 13.5653 12.5872 13.7122 12.6008 14.6959C12.6075 14.9067 12.4992 15.0217 12.4992 15.0217C12.4992 15.0217 12.3774 15.1431 12.1405 15.1622H11.3622C9.64974 15.2644 8.14037 13.7761 8.14037 13.7761C8.14037 13.7761 6.48887 12.1663 5.04043 8.95321C4.94567 8.74241 5.0472 8.6402 5.0472 8.6402C5.0472 8.6402 5.14872 8.51883 5.433 8.51883L7.28755 8.50606C7.46353 8.53161 7.58536 8.62104 7.58536 8.62104C7.58536 8.62104 7.69366 8.69131 7.7478 8.82545C8.05238 9.54089 8.44495 10.1925 8.44495 10.1925C9.1218 11.5084 9.58205 11.7319 9.84602 11.5978C9.84602 11.5978 10.1912 11.3998 10.1168 9.80919C10.0897 9.23428 9.92047 8.97237 9.92047 8.97237C9.7648 8.77435 9.47376 8.71686 9.34516 8.69769C9.24363 8.68492 9.41284 8.45496 9.6362 8.35275C9.96785 8.19944 10.5567 8.19305 11.2539 8.19944C11.8021 8.20583 11.9578 8.23777 12.1676 8.28248C12.6634 8.39576 12.6481 8.75586 12.6152 9.53553C12.6054 9.76709 12.594 10.0357 12.594 10.3458C12.594 10.419 12.5915 10.4972 12.5889 10.5775C12.5763 10.9732 12.5619 11.4204 12.8377 11.585C12.9798 11.6744 13.3318 11.5978 14.1981 10.2052C14.1981 10.2052 14.6042 9.54089 14.9223 8.76796C14.9765 8.62743 15.0916 8.56994 15.0916 8.56994C15.0916 8.56994 15.1999 8.51245 15.3488 8.53161L17.2981 8.51883Z' fill='white'/></svg></a><a href='https://www.youtube.com/channel/UCx52nuO1qz1vLpXy6sHsJ3Q' target='_blank'><svg class='mx-3' width='36px' height='100%' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M12 24.1979C18.6274 24.1979 24 18.8253 24 12.1979C24 5.57046 18.6274 0.197876 12 0.197876C5.37258 0.197876 0 5.57046 0 12.1979C0 18.8253 5.37258 24.1979 12 24.1979ZM16.4629 8.81902C16.9104 8.94063 17.2628 9.299 17.3824 9.75404C17.5997 10.5788 17.5997 12.2996 17.5997 12.2996C17.5997 12.2996 17.5997 14.0204 17.3824 14.8452C17.2628 15.3003 16.9104 15.6437 16.4629 15.7653C15.6519 15.9863 12.3997 15.9863 12.3997 15.9863C12.3997 15.9863 9.14755 15.9863 8.33649 15.7653C7.88904 15.6437 7.53663 15.3003 7.41703 14.8452C7.19971 14.0204 7.19971 12.2996 7.19971 12.2996C7.19971 12.2996 7.19971 10.5788 7.41703 9.75404C7.53663 9.299 7.88904 8.94065 8.33649 8.81902C9.14755 8.59802 12.3997 8.59802 12.3997 8.59802C12.3997 8.59802 15.6519 8.59802 16.4629 8.81902ZM11.3361 10.7373V13.862L14.0542 12.2997L11.3361 10.7373Z' fill='white'/></svg></a>"
				]
			},
			"close"
		],
		extensions: [
			"pagedim-black",
			"fullscreen"
		],
		navbar: {
			title: "<img src='/site/templates/static/img/logo.svg' alt='logo'><a href='#js-page' class='mmenu-close'><img src='/site/templates/static/img/icon/ico-close.svg' alt='close'></a>"
		},
	},
	{
		offCanvas: {
			clone: true
		}
	});

	// Init swiper-agitation
	const swiperAgitation = new Swiper('.swiper-agitation', {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 'auto',
        centeredSlides: true,
	  
		navigation: {
			nextEl: '.agitation__pagination-item--next',
			prevEl: '.agitation__pagination-item--prev',
		},
	});

	// Init swiper-gallery
	const swiperGallery = new Swiper('.swiper-gallery', {
		loop: true,
		spaceBetween: 20,
		slidesPerView: 1,
	  
		navigation: {
			nextEl: '.agitation__pagination-item--next',
			prevEl: '.agitation__pagination-item--prev',
		},
		breakpoints: {
			576: {
			  slidesPerView: 2,
			  spaceBetween: 20
			},
			768: {
			  slidesPerView: 3,
			  spaceBetween: 30
			}
		}
	});
	
	// Accordion
	$('.accordion__title').click(function (e) { 
		e.preventDefault();
		let accordion = $(this).parent('.accordion');
		accordion.toggleClass('accordion--active');
	});
	
	let popupBg = document.querySelector('.popup__bg'); // Фон попап окна
	let popup = document.querySelector('.popup'); // Само окно
	let openPopupButtons = document.querySelectorAll('.open-popup'); // Кнопки для показа окна
	let closePopupButton = document.querySelector('.close-popup'); // Кнопка для скрытия окна
	
	// POPUP
	openPopupButtons.forEach((button) => { // Перебираем все кнопки
		
		button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
			e.preventDefault(); // Предотвращаем дефолтное поведение браузера
			popupBg.classList.add('active'); // Добавляем класс 'active' для фона
			popup.classList.add('active'); // И для самого окна
		})
	});
	
	document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
		if(e.target === popupBg) { // Если цель клика - фот, то:
			popupBg.classList.remove('active'); // Убираем активный класс с фона
			popup.classList.remove('active'); // И с окна
		}
	});
	
	closePopupButton.addEventListener('click',() => { // Вешаем обработчик на крестик
		popupBg.classList.remove('active'); // Убираем активный класс с фона
		popup.classList.remove('active'); // И с окна
	});
	// END popup
	$.ajaxSetup({
		url: "/mail-send/", 
		type: 'POST',
		dataType: 'json',
		beforeSend: function(){
			console.debug();
		},
		error: function(req, text, error){
		},
		complete: function(){
			alert('Заявка отправлена');
		}
	});
	
	
	
	$(".js-form-popup").submit(function(e){
		var $that = $(this),
		formData = new FormData($that.get(0));
		e.preventDefault();
		$.ajax({
            contentType: false, 
            processData: false, 
            data: formData,
            success: function (json) {
				alert('Заявка отправлена');
        	}
		});
	});
	
	$(".js-form-vacancies").submit(function(e){
		e.preventDefault();
		
		let idsArr = [];
		$(this).find('.custom-checkbox__input:checked').each(function() {
			idsArr.push(this.value);
		});
		
		location.href = "/vacancies/?sort=" + idsArr.join('|');
	});
	
});
