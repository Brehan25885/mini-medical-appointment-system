@extends('frontend.layouts.app')
@push('styles')
<style>
.site-header{
    position: relative;
    padding: 220px 0 140px;
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
<div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="header-img" src="images/index.jpg" alt="">

                </div>
            </div>
        </div>

    </header><!-- .site-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="the-news">
                    <div class="row">
                     @foreach ($doctors as $doctor)
                        <div class="col-12 col-md-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{$doctor->image}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>{{$doctor->name}}</h3>
                                   
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Pick An Appointment</a>
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