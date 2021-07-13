@extends('master')

@section('content')

        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($data as $item)
                        <div class="col-lg-4 col-sm-6">
                                <a class="portfolio-box" href="{{asset('assets/img/portfolio/fullsize/'.$item['image'])}}" title="{{$item['name']}}">
                                    <img class="img-fluid" src="{{asset('assets/img/portfolio/thumbnails/'.$item['image'])}}" alt="..." />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">{{$item['category']}}</div>
                                        <div class="project-name">{{$item['name']}}</div>
                                    </div>
                                </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
            </div>
        </section>
@stop
