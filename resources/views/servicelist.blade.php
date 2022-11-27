@extends('layouts.main.master')
@section('title')
Dịch vụ báo giá 
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<main id="w-cate" class="">
<section id="banner-cate">
    <div class="avarta"><img src="{{url('frontend/images/breadcrumb-lienhe.jpg')}}" class="img-fluid" width="100%" alt="">
    </div>
</section>
<section id="breadcrumbs">
    <div class="container">
        <div class="content">
            <ul class="list-inline">
            <li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{$setting->company}}"></a></li>
            <li>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item"><a href="{{url()->current()}}">Báo giá </a></li>
            </ul>
        </div>
    </div>
</section>
<section id="service">
    <div class="container">
        <div class="content">
            <div class="title">
                <h2><span>Dịch vụ báo giá</span></h2>
            </div>
            <div class="row">
                @foreach ($list_service as $service)
                <div class="col-lg-6 col-md-6">
                    <div class="item-service item-hvr">
                        <div class="inner-item-service">
                            <div class="img-ser img-hvr">
                                <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}"><img class="lazy entered loaded" data-src="{{$service->image}}" alt="{{$service->name}}" data-ll-status="loaded" src="{{$service->image}}"></a>
                            </div>
                            <div class="content-item-service">
                                <h3 class="name-item-service"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></h3>
                                <div class="intro-item-service desc">
                                    {!!languageName($service->description)!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
</main>
@endsection