export default {
    // JavaScript to be fired on all pages
    init() {

        var navbar = document.getElementById('organized-q-header');
        // Change navbar when scrolling
        document.addEventListener(
            'scroll',
            function () {
                if (document.documentElement.scrollTop > 90) {
                    navbar.classList.remove('absolute', 'pt-6')
                    navbar.classList.add('fixed-navbar', 'bg-black', 'pb-4', 'fixed', 'pt-3')
                    navbar.style.marginTop = '0px';
                } else {
                    navbar.classList.remove('fixed-navbar', 'bg-black', 'pb-4', 'fixed', 'pt-3')
                    navbar.classList.add('absolute', 'pt-6')
                    navbar.style.marginTop = 'unset';
                }
            }
        );
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
