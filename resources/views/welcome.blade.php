@extends('layouts.app')
@section('content')
    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">

        <div style="height: 800px;width:1500" class="w3-display-container w3-transparent">
            @foreach ($covers as $cover)
                <img class="w3-image header"
                    src="{{ asset(Str::contains($cover->path, ['placeholder.com']) ? $cover->path : asset('storage/' . $cover->path)) }}"
                    alt="Architecture" style="height: 100%;width:100%">
            @endforeach
            <div class="w3-display-middle w3-margin-top w3-center w3-hide">
                <p class="w3-xxlarge w3-text-white">
                    <span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span>
                    <span class="w3-hide-small w3-text-light-grey">Architects</span>
                </p>
            </div>
            <div class="w3-display-hover w3-display-left" style="height: 100%">
                <button style="height: 100%;" onclick="myHeader.previous()"
                    class="w3-jumbo hover-me w3-hover-none w3-animate-left">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
            </div>
            <div class="w3-display-hover w3-display-right" style="height: 100%">
                <button style="height: 100%;" onclick="myHeader.next()"
                    class="w3-jumbo hover-me w3-hover-none w3-animate-right">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>


    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-64" id="projects">
            <a href="{{ route('our_projects') }}" target="_blank">
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">المشاريع</h3>
            </a>
        </div>

        <div class="w3-row-padding">
            @foreach ($projects as $project)
                <div class="w3-col l3 m6 w3-margin-bottom w3-right">
                    <style>
                        #project-card:hover #project-desc {
                            display: block !important;
                        }
                    </style>
                    <div class="w3-display-container" id="project-card">
                        <div class="w3-display-topright w3-black w3-padding">{{ Str::limit($project->alt, 25, '...') }}
                        </div>
                        <img src="{{ asset(Str::contains($project->path, ['placeholder.com']) ? $project->path : asset('storage/' . $project->path)) }}"
                            alt="{{ $project->alt }}" style="width:100%">
                        <div class="w3-container w3-card-2" style="margin: 0!important;display:none" id="project-desc">
                            <p>
                                {{ $project->alt }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- About Section -->
        <div class="w3-container w3-padding-64" id="about">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">عنا</h3>
            <p class="w3-justify">
                @foreach ($about as $item)
                    {{ $item->description }} <br>
                @endforeach
            </p>
        </div>
        <!-- Contact Container -->
        <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
            <div class="w3-row">
                <div class="w3-col m12 w3-center">
                    <div class="w3-padding-16 w3-text-black"><span class="w3-xlarge w3-border-black w3-bottombar">اتصل
                            بنا</span></div>
                    @foreach ($communications as $communication)
                        <p class="w3-large">
                            {{ $communication->welcome }}
                        </p>
                        <p class="w3-large">
                            <i class="fa fa-map-marker w3-text-black w3-xlarge"></i>
                            <a href="https://goo.gl/maps/b2bVvTmCLVqfQht36">{{ $communication->city->name }} ,
                                {{ $communication->country->name }}</a>{{-- - <small><i>انقر للحصول على
                                    الإتجاهات</i></small> --}}
                        </p>
                        <p class="w3-large"><i class="fa-brands fa-whatsapp w3-text-black w3-xxlarge"></i><i
                                class=""></i>
                            <a dir="ltr"
                                href="https://wa.me/{{ $communication->phone }}/?text='السلام عليكم كيف يمكنكم خدمتي؟'">0{{ $communication->phone }}</a>{{-- - <small><i>انقر
                                للإتصال</i></small> --}}
                        </p>
                        <p class="w3-large"><i class="fa-regular fa-envelope w3-text-black w3-xlarge"></i>
                            <a
                                href="mailto:{{ $communication->email }}">{{ $communication->email }}</a>{{-- - <small><i>انقر لإرسال بريد
                                إلكتروني</i></small> --}}
                        </p>
                    @endforeach
                </div>
                <div class="w3-col m7 w3-right w3-hide">
                    <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                        <div class="w3-section">
                            <label>Name</label>
                            <input class="w3-input" type="text" name="Name" required>
                        </div>
                        <div class="w3-section">
                            <label>Email</label>
                            <input class="w3-input" type="text" name="Email" required>
                        </div>
                        <div class="w3-section">
                            <label>Message</label>
                            <input class="w3-input" type="text" name="Message" required>
                        </div>
                        <input class="w3-check" type="checkbox" checked name="Like">
                        <label>I Like it!</label>
                        <button type="submit" class="w3-button w3-right w3-theme">Send</button>
                    </form>
                </div>
            </div>
            <!--time lines-->
            <div class="w3-row-padding w3-hide">
                <div class="w3-col l4">
                    <a class="twitter-timeline" data-lang="ar" data-theme="dark"
                        href="https://twitter.com/sayye4elevators?ref_src=twsrc%5Etfw">Tweets by sayye4elevators</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="w3-col l4 w3-red w3-padding" style="height: 200px">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsayye4elevators&tabs=timeline&width=333&height=333&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId"
                        width="333" height="333" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
        <!-- Image of location/map -->
        <div class="w3-container w3-center w3-row">
            <iframe class="w3-col l12"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3715.3402136622876!2d39.8317912!3d21.3765048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c205f75bc50201%3A0x771673e0fef7b2c!2z2YXYpNiz2LPYqSDYp9it2YXYryDYp9mE2LPZitivINmE2YTZhdi12KfYudiv!5e0!3m2!1sar!2ssa!4v1659113472206!5m2!1sar!2ssa"
                height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End page content -->
    </div>
@endsection
