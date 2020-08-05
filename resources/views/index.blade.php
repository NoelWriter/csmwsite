@extends('default')

@section('content')
    <div class="position-ref full-height">
        <div class="flex-center page-links">
            <div class="content">
                <div class="navbar links">
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1100">osu!</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1400">projects</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1700">discord</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="2000">twitter</a>
                </div>
            </div>
        </div>
        <div class="flex-center page-title">
            <div class="content">
                <div class="title" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="700">
                    CSMW
                </div>
                <div class="m-b-md" data-aos="fade" data-aos-duration="1000" data-aos-delay="700">
                    A website by CosmicWolf
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();

        window.onload = function() {
            document.body.style.backgroundColor = '#ffffff';
        };
    </script>
@endsection
