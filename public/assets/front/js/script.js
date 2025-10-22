$(function(){

	$('.header__burger').click(function(event){
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});

	// $('.header .header__body .header__menu .header__list li a.header__link').click(function(){
	// 	$('body').removeClass('lock');
	// 	$('.header__burger,.header__menu').removeClass('active');
	// })

    // $('.has__submenu').click(function(event){
    //     event.preventDefault();
	// 	$('.submenu').slideToggle();
	// });

    $('.header .header__body .header__menu .header__list li a.header__link').click(function(event){
        // Проверяем, был ли клик совершен на элементе .has__submenu
        if ($(event.target).is('.has__submenu')) {
            event.preventDefault();
            $('.submenu').slideToggle();
        }else{
            $('body').removeClass('lock');
		    $('.header__burger,.header__menu').removeClass('active');
        }
    });

	// Рабочий якорь с переходом по страницам
	$("body").on('click', '[href*="#"]', function(e){
		var fixed_offset = 100;
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
		e.preventDefault();
	});

	if($('.datetimepicker').length > 0 ){
		$('.datetimepicker').datetimepicker({
			format: 'DD-MM-YYYY',
			icons: {
				up: "fas fa-angle-up",
				down: "fas fa-angle-down",
				next: 'fas fa-angle-right',
				previous: 'fas fa-angle-left'
			},
            minDate: new Date()
		});
	}

	$('#regForm').submit(function(e){
        e.preventDefault();
        var $this = $(this);

        $.ajax({
            url: $this.prop('action'),
            method: 'POST',
            data: $this.serialize(),
            success:function(data){
                $('#result_form').html('Your application has been accepted. Our specialists will contact you').show();
                $('#finishModal').modal('show');
                $("#regForm")[0].reset();
                document.getElementById("nextBtn").setAttribute("disabled", "");
                setTimeout(function(){
                    window.location.reload();
                }, 5000);
            },error:function(data){
                $('#result_form').html('Error!').show();
                $('#finishModal').modal('show');
                document.getElementById("nextBtn").setAttribute("disabled", "");
                setTimeout(function(){
                    window.location.reload();
                }, 5000);
            }
        })
    });

    $('#callBackForm').submit(function(e){
        e.preventDefault();
        var $this = $(this);

        $.ajax({
            url: $this.prop('action'),
            method: 'POST',
            data: $this.serialize(),
            success:function(data){
                $('#result_form').html('Your application has been accepted. Our specialists will contact you').show();
                $('#finishModal').modal('show');
            },error:function(data){
                $('#result_form').html('Error!').show();
                $('#finishModal').modal('show');
            }
        })
    });

	const inputElements = document.querySelectorAll('.inputElement');

    inputElements.forEach(function(inputElement) {
        const dropdownOptions = inputElement.parentNode.querySelectorAll('.dropdown-options .option');
        let selectedIndex = -1;
        let searchText = '';

        inputElement.addEventListener('click', function() {
            const dropdown = this.parentNode;
            dropdown.classList.toggle('open');
            this.value = '';
            resetDropdownOptions(dropdown);
            searchText = '';
        });

        inputElement.addEventListener('input', function() {
            searchText = this.value.trim().toLowerCase();
            const dropdown = this.parentNode;
            const options = dropdown.querySelectorAll('.option');

            options.forEach(function(option) {
                const optionText = option.textContent.toLowerCase();
                if (optionText.includes(searchText)) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });

            dropdown.classList.add('open');
        });

        inputElement.addEventListener('keydown', function(event) {
            const dropdown = this.parentNode;
            const visibleOptions = dropdown.querySelectorAll('.option:not([style*="display: none"])');
            const dropdownOptionsCount = visibleOptions.length;

            if (dropdownOptionsCount > 0) {
                if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {
                    event.preventDefault();
                    dropdown.classList.add('open'); // Open the dropdown

                    if (event.key === 'ArrowUp') {
                        selectedIndex = (selectedIndex - 1 + dropdownOptionsCount) % dropdownOptionsCount;
                    } else {
                        selectedIndex = (selectedIndex + 1) % dropdownOptionsCount;
                    }

                    resetDropdownOptions(dropdown);
                    visibleOptions[selectedIndex].classList.add('highlight');
                } else if (event.key === 'Enter') {
                    event.preventDefault();

                    if (selectedIndex === -1) {
                        return ;
                    }

                    const selectedOption = visibleOptions[selectedIndex];
                    const selectedValue = selectedOption.getAttribute('data-value');
                    const selectedText = selectedOption.textContent;
                    this.value = selectedText;
                    dropdown.classList.remove('open');
                    selectedIndex = -1;
                }
            }
        });

        dropdownOptions.forEach(function(option) {
            option.addEventListener('click', function() {
                const dropdown = this.parentNode.parentNode;
                const selectedValue = this.getAttribute('data-value');
                const selectedText = this.textContent;
                inputElement.value = selectedText;
                dropdown.classList.remove('open');
                selectedIndex = -1;

                var selectedOptionParts = inputElement.value.split(', ');
                if (inputElement.id == 'originalLocation'){
                    var pickupStateInput = document.getElementById('pickup_state');
                    pickupStateInput.value = selectedOptionParts[1];
                    var pickupCityInput = document.getElementById('pickup_city');
                    pickupCityInput.value = selectedOptionParts[0];
                    var pickupZipInput = document.getElementById('pickup_zip');
                    pickupZipInput.value = selectedOptionParts[2];
                }
                if(inputElement.id == 'destinationLocation'){
                    var dropoffStateInput = document.getElementById('dropoff_state');
                    dropoffStateInput.value = selectedOptionParts[1]; // Штат
                    var dropoffCityInput = document.getElementById('dropoff_city');
                    dropoffCityInput.value = selectedOptionParts[0]; // Город
                    var dropoffZipInput = document.getElementById('dropoff_zip');
                    dropoffZipInput.value = selectedOptionParts[2]; // Почтовый индекс
                }
            });
        });

        function resetDropdownOptions(dropdown) {
            const options = dropdown.querySelectorAll('.option');
            options.forEach(function(option) {
                const optionText = option.textContent.toLowerCase();
                if (optionText.includes(searchText)) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
                option.classList.remove('highlight');
            });
        }
    });

    // ++ счётчик
	function calcCount() {
		for (var i = 0; i < $('.numeric').length; i++) {
			var end = $('.numeric').eq(i).text();
			countStart(end, i);
		}
	}

	function countStart(end, i) {
		var start = 0;
		var interval = setInterval(function () {
			$('.numeric').eq(i).text(++start);
			if (start == end) {
				clearInterval(interval);
			}
		}, 1);//скорость менять вот-тут
	}
	calcCount();

    // accordion
	const accordionItemHeaders = document.querySelectorAll(
		".accordion-item-header"
	);

	accordionItemHeaders.forEach((accordionItemHeader) => {
		accordionItemHeader.addEventListener("click", (event) => {
			// Uncomment in case you only want to allow for the display of only one collapsed item at a time!

			const currentlyActiveAccordionItemHeader = document.querySelector(
				".accordion-item-header.active"
			);
			if (
				currentlyActiveAccordionItemHeader &&
				currentlyActiveAccordionItemHeader !== accordionItemHeader
			) {
				currentlyActiveAccordionItemHeader.classList.toggle("active");
				currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
			}
			accordionItemHeader.classList.toggle("active");
			const accordionItemBody = accordionItemHeader.nextElementSibling;
			if (accordionItemHeader.classList.contains("active")) {
				accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
			} else {
				accordionItemBody.style.maxHeight = 0;
			}
		});
	});

	$('.accordion-item').click(function(){
		$(this).toggleClass('active');
		$('.accordion-item').not(this).removeClass('active');
	})

    if(window.innerWidth < 768){
        $('.reason-block .heading').click(function(){
            var $reasonBlock = $(this).closest('.reason-block');

            // Убираем класс active у всех .reason-block, кроме текущего
            $('.reason-block').not($reasonBlock).removeClass('active');

            // Свернуть .content у всех .reason-block, кроме текущего
            $('.reason-block .content').not($reasonBlock.find('.content')).slideUp();

            // Добавляем/удаляем класс active и выполняем slideToggle только в текущем .reason-block
            $reasonBlock.toggleClass('active');
            $reasonBlock.find('.content').slideToggle();
        });


        $('.step .step-title').click(function(){
            var $stepBlock = $(this).closest('.step');

            // Убираем класс active у всех .reason-block, кроме текущего
            $('.step').not($stepBlock).removeClass('active');

            // Свернуть .content у всех .reason-block, кроме текущего
            $('.step .step-list').not($stepBlock.find('.step-list')).slideUp();

            // Добавляем/удаляем класс active и выполняем slideToggle только в текущем .reason-block
            $stepBlock.toggleClass('active');
            $stepBlock.find('.step-list').slideToggle();
        });

        // destinations
        let numberOfDestinationsToShow = 20; // количество .destination для показа по умолчанию
        let destinations = document.querySelectorAll('.destination'); // все элементы с классом .destination
        let showMoreBtn = document.querySelector('.show-more');

        // Скрываем все .destination, кроме первых numberOfDestinationsToShow
        destinations.forEach((destination, index) => {
            if (index >= numberOfDestinationsToShow) {
                destination.style.display = 'none';
            }
        });

        showMoreBtn.addEventListener('click', () => {
            destinations.forEach((destination) => {
                if (destination.style.display === 'none') {
                    destination.style.display = 'block';
                    destination.style.animation = 'fade-in 0.5s';
                }
                showMoreBtn.style.display = 'none';
            });
        });
    }

});
