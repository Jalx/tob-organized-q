<header class="banner">
    <div class="container absolute">
        <nav class="nav-primary z-50 mt-6">
            <div class="flex justify-between mx-7 md:mx-1">
                <div class="z-50 the-logo">
                    <a class="brand" href="{{ home_url('/') }}"
                    aria-label="{{ get_bloginfo('name', 'display') }}">
                    @php
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                            @endphp
                    </a>
                    <a class="brand" href="{{ home_url('/') }}"
                    aria-label="{{ get_bloginfo('name', 'display') }}">
                        <img class="mobile-custom-logo" src="{{get_theme_mod( 'custom-mobile-logo' )}}" alt="Organized Q">
                    </a>
                </div>
                <button class="z-50 block md:hidden">
                    <img class="" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/menu.svg" alt="menu">
                </button>
                <div class="z-50 hidden md:flex">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(
                            [
                                'theme_location' => 'primary_navigation', 'menu_class' => 'nav relative'
                            ]
                        ) 
                        !!}
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <div class="">
        {{-- <div class="flex flex-col text-white relative z-50">
            
        </div> --}}
        @if (get_header_image())
        <div id="site-header" class="site-header flex flex-col md:flex-row justify-end items-center w-full bg-front-page">
            <div id="site-header-title" class="w-full md:w-5/12 flex flex-col text-white relative z-50 order-2 md:order-1 place-content-center">
                <div class="text-center">
                    <span class="uppercase">Virtual Executive Assistant services small business owners and executives</span>
                    <h1 class="py-6">Welcome to Organized Q!</h1>
                </div>
            </div>
            <img src="<?php header_image(); ?>"
            {{-- width="<?php echo absint( get_custom_header()->width ); ?>" --}}
            {{-- height="<?php echo absint( get_custom_header()->height ); ?>" --}}
            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
            class="w-full md:w-7/12 order-1 md:order-2"
            >
        </div>
        @endif
    </div>
</header>
