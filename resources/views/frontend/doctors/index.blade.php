@extends('frontend.layouts.app')
@push('styles')
<style>
.site-header{
    position: relative;
    padding: 18px 0 140px;
    background-color: #f0f4f8;

    font-size: 60px;
    font-weight: 600;
    color: #404040;
}
.header-img{
    width: 100%
}
}
</style>
@endpush
@section('content')

    </header><!-- .site-header -->
    <div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Doctors</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Elit mir congue ligula et efficitur pellentesqu<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="professional-box">
                                <h2 class="d-flex align-items-center">Professional</h2>

                                <img src="images/cardiogram-2.png" alt="">

                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="quality-box">
                                <h2 class="d-flex align-items-center">Quality</h2>

                                <img src="{{asset('images/hospital.png')}}" alt="">

                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="the-news">
                    <div class="row">
                     @foreach ($doctors as $doctor)
                        <div class="col-12 col-md-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{$doctor->image}}" alt="{{$doctor->name}}"></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>{{$doctor->name}}</h3>

                                </header>

                                <div class="entry-content">
                                    <p>{{$doctor->personal_statement}}</p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="/our-doctors/{{$doctor->id}}">Pick An Appointment</a>
                                </footer>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
</div>
</div>




  @endsection
