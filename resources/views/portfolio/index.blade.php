@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
        </ol>
        <h2>{{ $portfolio->name }}</h2>
    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/portfolio/' . $portfolio->image) }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                        <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                        <li><strong>Project date</strong>: {{ date('d F Y', strtotime($portfolio->date)) }}</li>
                        <li><strong>Project URL</strong>: <a href="#">{{ $portfolio->url }}</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                        {{ $portfolio->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
@endsection
