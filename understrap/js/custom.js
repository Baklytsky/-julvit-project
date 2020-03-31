jQuery(function ($) {
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            lazyLoad: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            loop: true,
            smartSpeed: 1000,
            margin: 40,
            itemElement: 'li',
            stageElement: 'ul',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                800: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });

        $('#searchsubmit').attr('disabled', true);

        $(':text').on('keyup',function(){
            let $this = $(this),
                val = $this.val();

            if(val.length >= 1){
                $('#searchsubmit').removeAttr('disabled');
            }else {
                $('#searchsubmit').attr('disabled', true);
            }
        });
    });
});


document.addEventListener('DOMContentLoaded', function(){

let servicesPeopleBtn = document.querySelector('.people-btn'),
    servicesPeople = document.querySelector('.services-people'),
    servicesCompanyBtn = document.querySelector('.company-btn'),
    servicesCompany = document.querySelector('.services-company');

if (servicesPeopleBtn) {
    servicesCompanyBtn.addEventListener('click', function () {
        servicesPeople.style.display = 'none';
        servicesCompany.style.display = 'block';
        servicesPeopleBtn.classList.remove('active');
        servicesCompanyBtn.classList.add('active');
    });
}

if (servicesPeopleBtn) {
    servicesPeopleBtn.addEventListener('click', function () {
        servicesCompany.style.display = 'none';
        servicesPeople.style.display = 'block';
        servicesCompanyBtn.classList.remove('active');
        servicesPeopleBtn.classList.add('active');
    });
}
});



