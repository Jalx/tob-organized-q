export default {
    init() {
        // JavaScript to be fired on the home page
        var sections = document.querySelectorAll('.section');
        const observer = new IntersectionObserver((sections) => {
            sections.forEach(section => {
                if (section.isIntersecting) {
                    section.target.classList.add('section-animation');
                }
            });
        });
        sections.forEach(section => {
            observer.observe(section);
        });

        $('.services-slider-control').click(
            function() {
                $('.services-slider-control').removeClass('services-slider-control-active');
                $(this).addClass('services-slider-control-active');
            }
        )


    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};
