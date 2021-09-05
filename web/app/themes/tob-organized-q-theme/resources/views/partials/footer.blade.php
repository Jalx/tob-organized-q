<footer class="content-info organized-q-footer">
    <div class="front-page-section">
        <div class="grid grid-cols-12">
            <div class="col-start-2 col-span-10 md:col-span-4 mb-8">
                <img class="organized-q-footer-logo mb-5" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/organized-q-logo.svg" alt="">
                <h3 class="organized-q-footer-header">About Us</h3>
                <p class="organized-q-footer-copy">In addition to helping individuals grow their own businesses, Organized Q is dedicated to providing flexible professional opportunities for other military spouses and family members who would like to work as virtual executive assistants while they support their military service member.</p>
            </div>
            <div class="col-start-2 col-span-5 md:col-span-2">
                <h3 class="organized-q-footer-header">More Links</h3>
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(
                        [
                            'theme_location' => 'more-links-footer-menu',
                            'menu_class' => 'nav relative organized-q-footer-menu'
                        ]
                    ) 
                    !!}
                @endif
            </div>
            <div class="col-span-5 md:col-span-2 mb-12 mb:mb-12">
                <h3 class="organized-q-footer-header">Services</h3>
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(
                        [
                            'theme_location' => 'services-footer-menu',
                            'menu_class' => 'nav relative organized-q-footer-menu'
                            ]
                    ) 
                    !!}
                @endif
            </div>
            <div class="col-start-2 col-span-5">
                <h3 class="organized-q-footer-header">Contact</h3>
                <p class="organized-q-footer-copy">Washington, D.C.</p>
                <div class="flex mb-6">
                    <img class="mr-3" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/Facebook.svg" alt="">
                    <img class="mr-3" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/Twitter.svg" alt="">
                    <img class="mr-3" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/Linkedin.svg" alt="">
                    <img class="mr-3" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/Instagram.svg" alt="">
                </div>
                <a href="#" class="btn-cta-white">Government Contracting</a>
            </div>
        </div>
    </div>
</footer>
