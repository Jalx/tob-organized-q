<header class="banner">
    <div class="container absolute">
        <nav class="nav-primary z-50">
            <div class="flex justify-between">
                <div class="z-50">
                    <a class="brand" href="{{ home_url('/') }}"
                    aria-label="{{ get_bloginfo('name', 'display') }}">
                        @php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }  
                        @endphp
                    </a>
                </div>
                <div class="z-50">
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
    <div>
        {{-- <div class="flex flex-col text-white relative z-50">
            
        </div> --}}
        @if (get_header_image())
        <div id="site-header" class="site-header flex justify-end w-full bg-front-page flex items-center">
            <div id="site-header-title" class="flex flex-col text-white relative z-50">
                <span>Virtual Executive Assistant services</span>
                <span>small business owners and executives</span>
                <h1>Welcome to Organized Q!</h1>
            </div>
            <img src="<?php header_image(); ?>"
            {{-- width="<?php echo absint( get_custom_header()->width ); ?>" --}}
            {{-- height="<?php echo absint( get_custom_header()->height ); ?>" --}}
            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
            class="w-7/12"
            >
        </div>
        @endif
    </div>
</header>
