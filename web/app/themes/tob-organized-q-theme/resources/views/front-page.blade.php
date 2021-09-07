@extends('layouts.app')

@section('content')

    <div class="section front-page-section mt-32 md:-mt-16" >
        <div class="grid grid-cols-12 gap-5">
            <div class="col-start-2 col-span-10 md:col-span-3">
                <div class="flex justify-items-center perks">
                    <div class="w-full my-auto">
                        <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/daily-tasks.png"
                        class="mx-auto"
                        >
                        <p class="text-center">Stay on top of your daily tasks</p>
                    </div>
                </div>
            </div>
            <div class="col-start-2 col-span-10 md:col-span-3">
                <div class="flex justify-items-center perks">
                    <div class="w-full my-auto">
                        <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/what-you-love.png"
                        class="mx-auto"
                        >
                        <p class="text-center">Focus on what you love</p>
                    </div>
                </div>
            </div>
            <div class="col-start-2 col-span-10 md:col-span-3">
                <div class="flex justify-items-center perks">
                    <div class="w-full my-auto">
                        <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/stress-levels.png"
                        class="mx-auto"
                        >
                        <p class="text-center">Reduce stress levels</p>
                    </div>
                </div>
            </div>
            <div class="col-start-2 col-span-10 md:col-span-3">
                <div class="flex justify-items-center perks">
                    <div class="w-full my-auto">
                        <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/lower-costs.png"
                        class="mx-auto"
                        >
                        <p class="text-center">Lower your costs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-start-3 md:col-span-3">
                <div class="flex content-center h-full">
                    <div class="my-auto text-left">
                        <div class="front-page-section-tag ml-auto mr-auto md:ml-0 md:mr-0">
                            <span>Who We Help?</span>
                        </div>
                        <h2 class="front-page-section-header text-center md:text-left">Government Services<span class="front-page-section-header-tomato">.</span> </h2>
                        <p class="front-page-section-subtitle text-center md:text-left  ">Planning for the future:</p>
                        <p class="front-page-section-copy text-center md:text-left  ">Landmark reforms to speed up and modernise the planning system and get the country building.</p>
                        <a href="#" class="btn-cta ml-auto mr-auto md:ml-0 md:mr-0 mt-7 mb-5 md:mt-1 md:mb-1">Call To Action</a>
                    </div>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-5">
                <div class="flex justify-center">
                    <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/government-services.png"
                        class="mx-auto object-none front-page-section-img-noclip"
                    >
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-start-2 md:col-span-4">
                <div class="flex justify-center">
                    <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/executives-smb.png"
                        class="w-full md:w-auto front-page-section-img-noclip"
                    >
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-5">
                <div class="flex content-center h-full">
                    <div class="my-auto text-left">
                        <div class="front-page-section-tag mt-3 md:mt-0 ml-auto mr-auto md:ml-0"">
                            <span>Who We Help?</span>
                        </div>
                        <h2 class="front-page-section-header text-center md:text-left">Bring order to chaos<span class="front-page-section-header-tomato">.</span></h2>
                        <p class="front-page-section-subtitle text-center md:text-left">Executives & Small Business Owners, Government Agencies</p>
                        <p class="front-page-section-copy text-center md:text-left">We are a growing team of Military Spouses & Veterans dedicated to providing Quality Virtual Executive Assistant Services to Small Business Owners, Executives, and Entrepreneurs. Our goal is to help you get organized so that you can focus on growing your own business.</p>
                        <p class="front-page-section-copy text-center md:text-left">Our goal is to help you get organized so that you can fous on growing your own business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section bg-grey-blue md:bg-white">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 text-center">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/q.png" class="mx-auto my-2.5">
                <div class="front-page-section-tag mx-auto">
                    <span>Our Services</span>
                </div>
                <h2 class="front-page-section-header">Top-notch virtual executive assistant services tailored to your needs.</h2>
                <p class="front-page-section-subtitle hidden md:block">Organized Q provides the following services:</p>
            </div>
            <div class="flex col-span-8 col-start-3">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 gap-y-6 w-full">
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Calendar Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/email-management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Email Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/scheduling.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Scheduling</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/social-media-management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Social Media Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/digital-file-organization.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Digital File Organization</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/quickbooks-setup.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Quickbooks Setup</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                            src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/editing.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Editing</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/blog-writing.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Blog Writing</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/crm-setup.svg"
                                class="mx-auto mb-1"
                            >
                            <span>CRM Setup</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/project-management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Project Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/subject-matter-experts.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Subject Matter Experts</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/ad-hoc-project-work.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Ad-Hoc Project Work</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section">
        <div class="grid grid-cols-12 md:gap-5">
            <div class="col-span-10 col-start-2 text-center">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/q.png" class="mx-auto my-2.5">
                <div class="front-page-section-tag mx-auto">
                    <span>Social Proof</span>
                </div>
                <h2 class="front-page-section-header">Don’t just take our word for it.</h2>
                <p class="front-page-section-subtitle mb-5">See what the results say</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-span-6 xl:col-span-5 xl:col-start-2 text-center">
                <div class="card-customer-result-img relative">
                    <img class="object-cover" src="@php echo get_template_directory_uri(); @endphp/assets/images/gordon-smith.png;">
                    <div class="absolute top-0 h-full flex items-end" style="background: rgba(0, 0, 0, 0.31);">
                        <div class="h-2/4 md:h-3/4 lg:h-2/4 px-5 md:px-10 flex flex-col items-center">
                            <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-long-bar.svg;"
                            class="mx-auto">
                            <p class="text-white my-1 md:my-4">“They’re change my life and brought balance, freedom and some sanity to may business.”</p>
                            <span class="text-white my-4">GORDON SMITH - CEO AT BUSINES NAME</span>
                            <div class="flex justify-center mt-2 md:mt-4">
                                <img class="mx-1" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-circle-active-gallery.svg;">
                                <img class="mx-1" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-circle-gallery.svg;">
                                <img class="mx-1" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-circle-gallery.svg;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-span-6 xl:col-span-5 xl-center">
                <div class="card-customer-result card-customer-result-info px-3 md:px-4 xl:px-5">
                    <p
                        style="border-bottom: 3px solid white; padding-bottom: 14px;">We are dedicated to providing flexible professional opportunities for other military spouses and family members
                    </p>
                    <div class="flex flex-col">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-5/12 text-center md:text-right">
                                <span class="card-customer-result-info-number">+1000</span>
                            </div>
                            <div class="w-full md:w-7/12 md:ml-5 flex items-center justify-center md:justify-start">
                                <span class="card-customer-result-info-label">Military Families Impacted</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-5/12 text-center md:text-right">
                                <span class="card-customer-result-info-number">+1000</span>
                            </div>
                            <div class="w-full md:w-7/12 md:ml-5 flex items-center justify-center md:justify-start">
                                <span class="card-customer-result-info-label">Projects</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-5/12 text-center md:text-right">
                                <span class="card-customer-result-info-number">%100</span>
                            </div>
                            <div class="w-full md:w-7/12 md:ml-5 flex items-center justify-center md:justify-start">
                                <span class="card-customer-result-info-label">ROI Recovered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section-wide lg:fp-ml">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-span-4 md:col-start-2 lg:col-span-5 text-left">
                <div>
                    <div class="front-page-section-tag ml-auto mr-auto md:ml-0 md:mr-0">
                        <span>Who we help?</span>
                    </div>
                    <h2 class="front-page-section-header pt-4 pb-6 text-center md:text-left">Working with us could be for you!<span class="front-page-section-header-tomato">.</span></h2>
                    <p class="front-page-section-subtitle pb-8 text-center md:text-left">Organized Q was founded and created by a highly educated and experienced Military Spouse who found a need to utilize her skills to help others organize and manage their business tasks.</p>
                    <a href="#" class="btn-cta ml-auto mr-auto md:ml-0 md:mr-0 mt-7 mb-5 md:mt-1 md:mb-1">Request Information</a>
                </div>
            </div>
            <div class="col-span-12 md:col-start-6 md:col-span-7 text-center">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/paige-cody-working-for-us.png"
                    class="front-page-section-img"
                >
            </div>
        </div>
    </div>

    <div class="section front-page-section-wide fp-bg-grey lg:fp-pl lg:fp-pr flex flex-wrap content-center bg-q-img-mobile"
        
    >
        <div class="grid grid-cols-12 gap-5 mt-12 md:mt-24 mb-24">
            <div class="col-span-10 col-start-2 md:col-span-4 md:col-start-2     lg:col-span-4 flex items-center">
                <div class="text-white">
                    <div class="front-page-section-tag ml-auto mr-auto md:ml-0 md:mr-0">
                        <span>Our Process</span>
                    </div>
                    <h2 class="front-page-section-header text-white text-center md:text-left">Getting started is very easy.</h2>
                    <a href="#" class="btn-cta-white hidden md:block">Request Assessment</a>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-6 text-center">
                <div>
                    <div class="flex mb-11">
                        <div class="w-3/12 md:w-2/12 flex justify-between">
                            <span class="bullet-number">1.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-9/12 md:w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-11">
                        <div class="w-3/12 md:w-2/12 flex justify-between">
                            <span class="bullet-number">2.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-9/12 md:w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-11">
                        <div class="w-3/12 md:w-2/12 flex justify-between">
                            <span class="bullet-number">3.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-9/12 md:w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <a href="#" class="btn-cta-white block md:hidden mx-auto">Request Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section mt-24 mb-24 md:mb-0">
        <div class="grid grid-cols-12 md:grid-cols-8 md:gap-5">
            <div class="text-left col-span-10 col-start-2 md:col-span-2 md:col-start-3 lg:col-start-3 xl:col-start-3 xxl:col-span-2 mb-10">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/building.png"
                    class="w-full md:mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Based in the US</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left col-span-10 col-start-2 md:col-span-2 mb-10">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/remote.png"
                    class="w-full md:mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Completely Remote</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left col-span-10 col-start-2 md:col-span-2 md:col-start-3 lg:col-start-3 xl:col-start-3 xxl:col-span-2 mb-10">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/spouses.png"
                    class="w-full md:mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Support Military Spouses</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left col-span-10 col-start-2 md:col-span-2 mb-10">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/award-winning.png"
                    class="w-full md:mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Award-winning Agency</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
        </div>
    </div>

    <div class="section front-page-section-wide lg:fp-pr bg-pale pb-10 md:pb-0">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-span-8 text-left">            
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/military-family.png"
                    class="front-page-section-img-r-clip image-tall mb-16 md:mb-0"
                >
            </div>
            <div class="col-span-10 col-start-2 md:col-start-9 md:col-span-4 text-left flex items-center">
                <div>
                    <div class="front-page-section-tag ml-auto mr-auto md:ml-0 md:mr-0">
                        <span>Who We Help?</span>
                    </div>
                    <h2 class="front-page-section-header pt-4 pb-6 text-center md:text-left">Supports Military Spouses & Veterans<span class="front-page-section-header-tomato">.</span></h2>
                    <a class="btn-cta mt-10 ml-auto mr-auto md:ml-0 md:mr-0 mt-7 mb-5 md:mt-1 md:mb-1" href="#">Support Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section front-page-section">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-5 pt-28 pb-4">
            <div class="m-auto">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/dvsv3-logo 1.png');" alt="">
            </div>
            <div class="m-auto hidden md:block">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/image 5.png');" alt="">
            </div>
            <div class="m-auto hidden md:block">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/image 6.png');" alt="">
            </div>
            <div class="m-auto hidden md:block">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/image 7.png');" alt="">
            </div>
            <div class="m-auto hidden md:block">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/image 8.png');" alt="">
            </div>
            <div class="m-auto hidden md:block">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/partners/image 9.png');" alt="">
            </div>
        </div>
    </div>

    <div class="section front-page-section-wide fp-bg-grey-to-transparent flex flex-wrap content-center "
        style="
        background-image:
        linear-gradient(80deg, #000000 0% 40%, transparent 40% 100%)
        "
    >
        <div class="lg:fp-pr bg-q-img-center fp-bg-orange-to-grey"
            
        >
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 md:col-span-6 xl:col-span-7 flex items-center">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/your-time.png"
                    class="front-page-section-img-r-clip-bottom image-tall"
                >
            </div>
            <div class="col-span-10 col-start-2 md:col-start-8 md:col-span-4 xl:col-start-9 xl:col-span-4 text-left flex items-center my-24 md:my-0">
                <div>
                    <h2 class="front-page-section-header text-white text-center md:text-left">Ready to get back the time you deserve<span class="text-black">?</span> </h2>
                    <p class="bullet-title text-center md:text-left">Let us help you to reduce the volume of work left undone in your organization. Use our virtual team members to help your organization climb higher.</p>
                    <a href="#" class="btn-cta hidden md:block">Get Started</a>
                    <a href="#" class="btn-cta-white block md:hidden ml-auto mr-auto md:ml-0 md:mr-0 mt-16">Get Started</a>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
