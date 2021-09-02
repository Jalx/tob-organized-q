@extends('layouts.app')

@section('content')

    <div class="front-page-section md:-mt-16" >
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

    <div class="front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-start-3 md:col-span-3">
                <div class="flex content-center h-full">
                    <div class="my-auto text-left">
                        <div class="front-page-section-tag">
                            <span>Who We Help?</span>
                        </div>
                        <h2 class="front-page-section-header">Government Services<span class="front-page-section-header-tomato">.</span> </h2>
                        <p class="front-page-section-subtitle">Planning for the future:</p>
                        <p class="front-page-section-copy">Landmark reforms to speed up and modernise the planning system and get the country building.</p>
                        <a href="#" class="btn-cta">Call To Action</a>
                    </div>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-5">
                <div class="flex justify-center">
                    <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/government-services.png"
                        class="mx-auto object-none"
                    >
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-start-2 md:col-span-4">
                <div class="flex justify-center">
                    <img
                        src="@php echo get_template_directory_uri(); @endphp/assets/images/executives-smb.png"
                        class="mx-auto"
                    >
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-5">
                <div class="flex content-center h-full">
                    <div class="my-auto text-left">
                        <div class="front-page-section-tag">
                            <span>Who We Help?</span>
                        </div>
                        <h2 class="front-page-section-header">Bring order to chaos<span class="front-page-section-header-tomato">.</span></h2>
                        <p class="front-page-section-subtitle">Executives & Small Business Owners, Government Agencies</p>
                        <p class="front-page-section-copy">We are a growing team of Military Spouses & Veterans dedicated to providing Quality Virtual Executive Assistant Services to Small Business Owners, Executives, and Entrepreneurs. Our goal is to help you get organized so that you can focus on growing your own business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 text-center">
                <img src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/q.png" class="mx-auto my-2.5">
                <div class="front-page-section-tag mx-auto">
                    <span>Our Services</span>
                </div>
                <h2 class="front-page-section-header">Top-notch virtual executive assistant services tailored to your needs.</h2>
                <p class="front-page-section-subtitle">Organized Q provides the following services:</p>
            </div>
            <div class="flex col-span-8 col-start-3">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 gap-y-6 w-full">
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                    <div class="card-services">
                        <div>
                            <img
                                src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/management.svg"
                                class="mx-auto mb-1"
                            >
                            <span>Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section">
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
            <div class="col-span-10 col-start-2 md:col-span-5 md:col-start-2 text-center">
                <div class="card-customer-result">

                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-span-5 text-center">
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

    <div class="front-page-section-wide lg:fp-ml">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-span-5 text-left">
                <div>
                    <div class="front-page-section-tag">
                        <span>Who we help?</span>
                    </div>
                    <h2 class="front-page-section-header pt-4 pb-6">Working with us could be for you!<span class="front-page-section-header-tomato">.</span></h2>
                    <p class="front-page-section-subtitle pb-8">Organized Q was founded and created by a highly educated and experienced Military Spouse who found a need to utilize her skills to help others organize and manage their business tasks.</p>
                    <a class="btn-cta mt-10" href="#" class="btn-cta">Request Information</a>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-6 md:col-span-7 text-center">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/paige-cody-working-for-us.png"
                    class="front-page-section-img"
                >
            </div>
        </div>
    </div>

    <div class="front-page-section-wide fp-bg-grey lg:fp-pl lg:fp-pr flex flex-wrap content-center bg-q-img"
        style="
        background-image:
        linear-gradient(80deg, transparent 0% 16%, #000000 16% 100%),
        url('@php echo get_template_directory_uri(); @endphp/assets/images/icons/big-Q.svg');"
    >
        <div class="grid grid-cols-12 gap-5 my-24">
            <div class="col-span-10 col-start-2 md:col-span-4 flex items-center">
                <div class="text-white">
                    <div class="front-page-section-tag">
                        <span>Our Process</span>
                    </div>
                    <h2 class="front-page-section-header text-white">Getting started is very easy.</h2>
                    <a href="#" class="btn-cta-white">Request Assessment</a>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-start-7 md:col-span-6 text-center">
                <div>
                    <div class="flex mb-11">
                        <div class="w-2/12 flex justify-between">
                            <span class="bullet-number">1.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-11">
                        <div class="w-2/12 flex justify-between">
                            <span class="bullet-number">2.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-11">
                        <div class="w-2/12 flex justify-between">
                            <span class="bullet-number">3.</span>
                            <img class="pr-5 my-1" style="height: 30px" src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/orange-bar.svg">
                        </div>
                        <div class="w-10/12 flex flex-col justify-left">
                            <span class="bullet-title text-left">
                                Click Get Started
                            </span>
                            <p class="bullet-copy text-left">
                                Schedule a time to talk with someone on our team. They’ll discover your unique needs so we understand how to help you be more successful.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section my-24">
        <div class="grid grid-cols-1 lg:grid-cols-4 md:gap-5">
            <div class="text-left">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/building.png"
                    class="mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Based in the US</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/remote.png"
                    class="mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Completely Remote</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/spouses.png"
                    class="mx-auto mb-5"
                >
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/icons/horizontal-orange-bar.svg"
                    class="my-2"
                >
                <h3 class="my-3 front-page-section-subtitle">Support Military Spouses</h3>
                <p class="copy">To provide high-level virtual executive assistance to executives</p>
            </div>
            <div class="text-left">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/award-winning.png"
                    class="mx-auto mb-5"
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

    <div class="front-page-section-wide lg:fp-mr">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 md:col-span-8 text-left">            
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/military-family.png"
                    class="front-page-section-img-r-clip"
                >
            </div>
            <div class="col-span-10 col-start-2 md:col-start-9 md:col-span-4 text-left flex items-center">
                <div>
                    <div class="front-page-section-tag">
                        <span>Who We Help?</span>
                    </div>
                    <h2 class="front-page-section-header pt-4 pb-6">Supports Military Spouses & Veterans<span class="front-page-section-header-tomato">.</span></h2>
                    <a class="btn-cta mt-10" href="#" class="btn-cta">Support Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section-wide fp-bg-grey-to-transparent flex flex-wrap content-center "
        style="
        background-image:
        linear-gradient(80deg, #000000 0% 40%, transparent 40% 100%)
        "
    >
        <div class="lg:fp-pr bg-q-img-center fp-bg-grey"
            style="background-image: url('@php echo get_template_directory_uri(); @endphp/assets/images/icons/big-Q.svg');"
        >
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 md:col-span-7 flex items-center">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/your-time.png"
                    class="front-page-section-img-r-clip-bottom"
                >
            </div>
            <div class="col-span-10 col-start-2 md:col-start-9 md:col-span-4 text-left flex items-center">
                <div>
                    <h2 class="front-page-section-header text-white">Ready to get back the time you deserve<span class="front-page-section-header-tomato">?</span> </h2>
                    <p class="bullet-title">Let us help you to reduce the volume of work left undone in your organization. Use our virtual team members to help your organization climb higher.</p>
                    <a href="#" class="btn-cta">Get Started</a>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
