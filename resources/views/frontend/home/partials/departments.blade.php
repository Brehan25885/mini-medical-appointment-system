<div class="our-departments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Our Departments</h2>

                        <div class="row">

                            @foreach($departments as $department)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{asset('images/stomach-2.png')}}" alt="">

                                        <h3>{{$department->name}}</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>{{$department->description}}</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <!-- <a href="#">read more</a> -->
                                    </footer>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
