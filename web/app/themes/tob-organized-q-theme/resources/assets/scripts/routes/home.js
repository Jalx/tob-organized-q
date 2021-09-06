export default {
    init() {
        // JavaScript to be fired on the home page
        var sections = document.querySelectorAll('.section');
        const observer = new IntersectionObserver((sections) => {
            sections.forEach(section => {
                if (section.isIntersecting) {
                    section.target.classList.add('section-animation');
                } else {
                    
                    console.log(section);
                    console.log('no');
                }
            });
        });
        sections.forEach(section => {
            observer.observe(section);
        });
    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};
