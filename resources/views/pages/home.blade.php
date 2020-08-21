@extends('layouts.app')

@section('title')
Foundtravel
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br> As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br> place you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col section-popular-heading text-center">
                        <h2>Wisata Popular</h2>
                        <p>
                            The Hidden Place
                            <br> You Must Visited To Increase Your Experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel justify-content-center row">
                    @foreach($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                            <div class="travel-country">{{ Str::upper($item->location) }}</div>
                            <div class="travel-location">{{ Str::upper($item->title) }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 tengah">
                        <h2>Our Networks</h2>
                        <p>
                            Kami bekerja sama dengan berbagai
                            <br> agensi untuk kenyamanan anda
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/wrapper_logo_partner.jpg') }}" alt="partner1" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Mereka sudah merasakan perjalanan
                            <br> yang luar biasa
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/user_pic1.jpg') }}" alt="testimonial 1" class="mb-4 rounded-circle">
                                <h3 class="mb-4">James Crown</h3>
                                <p class="testimonial">
                                    " Foundtravel mempunyai fasilitas yang banyak sehingga liburan tak perlu pusing memikirkan ini itu "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bromo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/user_pic2.jpg') }}" alt="testimonial 1" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Tiffany Marga</h3>
                                <p class="testimonial">
                                    " Foundtravel mempunyai fasilitas yang banyak sehingga liburan tak perlu pusing memikirkan ini itu "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Raja Ampat
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/user_pic3.jpg') }}" alt="testimonial 1" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Collin Zirkav</h3>
                                <p class="testimonial">
                                    " Foundtravel mempunyai fasilitas yang banyak sehingga liburan tak perlu pusing memikirkan ini itu "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </section>

    </main>
@endsection