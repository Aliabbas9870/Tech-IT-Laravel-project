@extends('frontend.layouts.main')
@section('title', 'FAQs')
@section('main-container')

<div class="breadcrumb-area bg-cover shadow dark text-center text-light"
    style="background-image: url(frontend/img/banner/10.jpg);">
    <div class="breadcrum-shape">
        <img src="frontend/img/shape/50.png" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Frequently Asked Question</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="faq-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-md-30 mb-xs-30">
                <div class="faq-sidebar">
                    <div class="faq-sidebar-item bg-theme text-light"
                        style="background-image: url(frontend/img/shape/map-light.png);">
                        <h4>Need Help?</h4>
                        <ul>
                            <!-- You can optionally add links here if needed -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 faq-style-one dark pl-50 pl-md-15 pl-xs-15">
                <h2 class="title mb-40">You need to know <br> before begin everything.</h2>

                <div class="accordion" id="faqAccordion">

                    @foreach($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$faq->id}}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$faq->id}}" aria-expanded="true"
                                aria-controls="collapse{{$faq->id}}">
                                {{$faq->question}}
                            </button>
                        </h2>
                        <div id="collapse{{$faq->id}}" class="accordion-collapse collapse"
                            aria-labelledby="heading{{$faq->id}}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>
                                    {{$faq->answer}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
