document.getElementById('button').addEventListener('click',
function() {
    document.querySelector('.bg-model').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click',
function() {
    document.querySelector('.bg-model').style.display='none';
}
);

document.getElementById('button1').addEventListener('click',
function() {
    document.querySelector('.bg-model2').style.display = 'flex';
});

document.querySelector('.close2').addEventListener('click',
function() {
    document.querySelector('.bg-model2').style.display='none';
}
);

$(document).ready(function() {
	$('.menu-toggle').on('click', function() {
		$('.nav').toggleClass('showing');
		$('.nav ul').toggleClass('showing');
	});

	$('.post-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),

        responsive: [
        {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
            }
        },
        {
            breakpoint: 750,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 2
            }
        },
        {
            breakpoint: 500,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
        }
    
        ]
    });
});

