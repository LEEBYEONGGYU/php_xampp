$(function () {
    $('.slideshow').each(function () {
        var $container = $(this),
            $slideGroup = $container.find('.slideshow-slides'),
            $slides = $slideGroup.find('.slide'),
            $nav = $container.find('.slideshow-nnn'),
            $indicator = $container.find('.slideshow-indicator'),
            slideCount = $slides.length,
            indicatorHTML = '', 
            currentIndex = 0, 
            duration = 500, 
            easing = 'easeInOutExpo',
            interval = 2000,
            timer;

        $slides.each(function (i) {
            $(this).css({ left: 100 * i + '%' });
            indicatorHTML += '<a href="#">' + (i + 1) + '</a>';
        });

        $indicator.html(indicatorHTML);

        function goToSlide (index) {
            $slideGroup.animate({ left: - 100 * index + '%' }, duration, easing);
            currentIndex = index;
            updateNav();
        }

        function updateNav () {
			$indicator.find('a').removeClass('active')
                .eq(currentIndex).addClass('active');
        }

        function startTimer () {
            timer = setInterval(function () {
                var nextIndex = (currentIndex + 1) % slideCount;
                goToSlide(nextIndex);
            }, interval);
        }

        function stopTimer () {
            clearInterval(timer);
        }


        $nav.on('click', 'a', function (event) {
            event.preventDefault();
            if ($(this).hasClass('prev')) {
                goToSlide(currentIndex - 1);
            } else {
                goToSlide(currentIndex + 1);
            }
        });

        $indicator.on('click', 'a', function (event) {
            event.preventDefault();
            if (!$(this).hasClass('active')) {
                goToSlide($(this).index());
            }
        });

        $('.hate > p:nth-child(1)').on({
            click: startTimer
        });
		
		 $('.hate > p:nth-child(2)').on({
            click: stopTimer
        });

        goToSlide(currentIndex);
        startTimer();

    });

});