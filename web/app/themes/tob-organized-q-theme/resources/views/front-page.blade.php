@extends('layouts.app')

@section('content')

    <div class="front-page-section" style="margin-top: -4rem;">
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
                        <span>Who We Help</span>
                        <h2>Government Services</h2>
                        <p>Planning for the future</p>
                        <p>Landmark reforms to speed up and modernise the planning system and get the country building.</p>
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
                        <span>Who We Help</span>
                        <h2>Government Services</h2>
                        <p>Planning for the future</p>
                        <p>Landmark reforms to speed up and modernise the planning system and get the country building.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="front-page-section">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 text-center">
                <span>Our Services</span>
                <h2>Top-notch virtual executive assistant services tailored to your needs.</h2>
                <p>Organized Q provides the following services:</p>
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
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 text-center">
                <span>Social Proof</span>
                <h2>Don't just take our work for it.</h2>
                <p>See what the results say</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-10 col-start-2 md:col-span-5 md:col-start-2 text-center">
                <div class="card-customer-result">

                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-span-5 text-center">
                <div class="card-customer-result card-customer-result-info">
                    <p
                        style="border-bottom: 3px solid white; padding-bottom: 14px;">We are dedicated to providing flexible professional opportunities for other military spouses and family members
                    </p>
                    <div class="flex flex-col px-5">
                        <div class="flex">
                            <div class="w-5/12 text-right">
                                <span class="card-customer-result-info-number">+1000</span>
                            </div>
                            <div class="w-7/12 ml-5 flex items-center">
                                <span class="card-customer-result-info-label">Military Families Impacted</span>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-5/12 text-right">
                                <span class="card-customer-result-info-number">+1000</span>
                            </div>
                            <div class="w-7/12 ml-5 flex items-center">
                                <span class="card-customer-result-info-label">Projects</span>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-5/12 text-right">
                                <span class="card-customer-result-info-number">%100</span>
                            </div>
                            <div class="w-7/12 ml-5 flex items-center">
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
                    <span>Who we help?</span>
                    <h2>Working with us could be for you!.</h2>
                    <p>Organized Q was founded and created by a highly educated and experienced Military Spouse who found a need to utilize her skills to help others organize and manage their business tasks.</p>
                    <a href="#">Request Information</a>
                </div>
            </div>
            <div class="col-span-10 col-start-2 md:col-span-7 text-center">
                <img
                    src="@php echo get_template_directory_uri(); @endphp/assets/images/paige-cody-working-for-us.png"
                    class="front-page-section-img"
                >
            </div>
        </div>
    </div>

    <div class="front-page-section-wide lg:fp-ml">
        <div class="grid grid-cols-12 gap-5">
        </div>
    </div>

        {{-- @if (!have_posts())
        <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif --}}

    {{-- @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile --}}

  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection
