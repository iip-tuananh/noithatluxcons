@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<main>
   <section id="banner">
      <h1 style="display: none;">{{$setting->company}}</h1>
      <h4 style="display: none;">{{$setting->webname}}</h4>
      <div class="swiper-container slide-banner">
         <div class="swiper-wrapper">
            @foreach ($banner as $item)
            <div class="swiper-slide">
               <div class="item">
                  <div class="avarta">
                     <a href="{{$item->link}}" target="_blank">
                        <img
                     src="{{$item->image}}"
                     class="img-fluid"
                     width="100%"
                     alt="{{$item->image}}">
                  </a>
               </div>
               </div>
            </div>
            @endforeach
         </div>
         <div class="swiper-button-next"><a href="javascript:0"><img
            src="{{asset('frontend/images/right.png')}}"
            class="img-fluid"
            alt="Trang chủ"></a></div>
         <div class="swiper-button-prev"><a href="javascript:0"><img
            src="{{asset('frontend/images/left.png')}}"
            class="img-fluid"
            alt="Trang chủ"></a></div>
      </div>
   </section>
   {{-- <section id="list-banner-ads">
      <div class="container">
         <div class="content">
            <div class="swiper-container slide-bannerads">
               <div class="swiper-wrapper">
                  @foreach ($bannerqc as $item)
                  <div class="swiper-slide">
                     <div class="item wow fadeIn" data-wow-delay=".4s">
                        <div class="avarta">
                           <a
                           href="{{$item->name}}"
                           title="{{languageName($item->content)}}"><img
                           src="{{$item->image}}"
                           class="img-fluid"
                           width="100%"
                           alt="{{languageName($item->content)}}"></a></div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="swiper-button-next"><a href="javascript:0"><img
                  src="{{url('frontend/images/right1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
               <div class="swiper-button-prev"><a href="javascript:0"><img
                  src="{{url('frontend/images/left1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
            </div>
         </div>
      </div>
   </section>
   <section id="list-banner">
      <div class="container">
         <div class="content">
            <div class="row">
               @foreach ($typePro as $item)
               <div class="col-md-3">
                  <div class="item wow fadeIn wHighlight" data-wow-delay=".4s">
                     <div class="avarta"><a
                        href="{{route('allListType',['danhmuc'=>$item->category->slug,'loaidanhmuc'=>$item->slug])}}"><img
                        src="{{$item->avatar}}"
                        class="img-fluid"
                        width="100%" alt="{{languageName($item->name)}}"></a></div>
                     <div class="info">
                        <h2>
                           <a href="{{route('allListType',['danhmuc'=>$item->category->slug,'loaidanhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a>
                        </h2>
                        <div class="viewmore">
                           <a href="{{route('allListType',['danhmuc'=>$item->category->slug,'loaidanhmuc'=>$item->slug])}}"
                              class="box first">Xem thêm</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section> --}}
   <section class="w3l-newsletter showroom-home">
      <!-- /form-25-section -->
      <div class="form-25-mian" style="background: #ffffff;">
         <div class="subscription-grids">
            <div class="subscription-img">
               <img src="{{$aboutUs->image}}" class="img-responsive" alt="">
            </div>
            <div class="form-inner-cont">
               <div class="wrapper">
                  <div class="forms-25-info">
                     <div class="info-title">
                        <h4 class="text-uppercase">Giới thiệu</h4>
                        <h3>{{$setting->company}}</h3>
                     </div>
                     {!!$aboutUs->description!!}
                  </div>
                  <div class="form-right-inf mt-4">
                     <div class="row">
                        <div class="col-4">
                           <div class="item-w hvr-float text-center">
                              <div class="icon-w ih" style="height: 60px;">
                                 <div><img src="{{url('frontend/images/icon-guide-1.png')}}"></div>
                              </div>
                              <p class="title-w">Chuyên nghiệp</p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="item-w hvr-float text-center">
                              <div class="icon-w ih" style="height: 60px;">
                                 <div><img src="{{url('frontend/images/icon-guide-2.png')}}"></div>
                              </div>
                              <p class="title-w">Tận Tâm</p>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="item-w hvr-float text-center">
                              <div class="icon-w ih" style="height: 60px;">
                                 <div><img src="{{url('frontend/images/icon-guide-3.png')}}"></div>
                              </div>
                              <p class="title-w">Sáng tạo</p>
                           </div>
                        </div>
                     </div>
                     {{-- <div style="width: 100%; display: inline-block;">
                        <div class="button-6">
                           <div class="eff-6"></div>
                           <a href="{{route('aboutUs')}}" class="btn">Xem thêm</a>
                        </div>
                     </div> --}}
                  </div>
               </div>
            </div>
            
         </div>
         {{-- <div class="container">
            <div class="swiper-container slide-bannerads">
               <div class="swiper-wrapper">
                  @foreach ($album as $item)
                  <div class="swiper-slide">
                     <div class="item wow fadeIn" data-wow-delay=".4s">
                        <div class="avarta">
                           <a
                           href="javascript:;"
                           title=""><img
                           src="{{$item->image}}"
                           class="img-fluid"
                           width="100%"
                           alt=""></a></div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="swiper-button-next"><a href="javascript:0"><img
                  src="{{url('frontend/images/right1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
               <div class="swiper-button-prev"><a href="javascript:0"><img
                  src="{{url('frontend/images/left1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
            </div>
         </div> --}}
      </div><br>
   </section>
   <!-- /End Show Room-->
   {{-- <section class="w3l-feature-with-photo-1 xuong-sx-home">
      <div class="feature-with-photo-hny">
         <div class="wrapper">
            <div class="feature-with-photo-content">
               <div class="three-grids d-grid grid-columns-3">
                  <div class="grid">
                     <div class="icon">
                        <span class="fa fa-briefcase" aria-hidden="true"></span>
                     </div>
                     <div class="icon-info">
                        <h4>Tiến độ rõ ràng</h4>
                        <p>Tất cả các bước đều được tiến hành theo quy trình chuyên nghiệp, có tiến độ rõ ràng, có giám sát trực tiếp về chất lượng và đảm bảo hoàn thiện theo đúng thời gian cam kết.</p>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="icon">
                        <span class="fa fa-home" aria-hidden="true"></span>
                     </div>
                     <div class="icon-info">
                        <h4>Quy trình chuyên nghiệp</h4>
                        <p>Quy trình làm việc chuyên nghiệp sẽ giúp KTS trực tiếp phối hợp ăn ý cùng thợ thủ công để cho ra đời sản phẩm hoàn mỹ nhất.</p>
                     </div>
                  </div>
                  <div class="grid">
                     <div class="icon">
                        <span class="fa fa-building-o" aria-hidden="true"></span>
                     </div>
                     <div class="icon-info">
                        <h4>Sản phẩm hoàn hảo</h4>
                        <p>Trước khi gửi đến khách hàng, NaDu luôn kiểm tra sản phẩm một cách toàn diện.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!-- /End Nhà Xưởng-->
   @foreach ($categoryhome as $key => $cate)
   @if (count($cate->product) > 0)
   <section id="box-project" class="box-project-{{$key}}">
      <div class="container">
         <div class="content">
            <div class="title">
               <h2><span>{{languageName($cate->name)}}</span></h2>
            </div>
         </div>
      </div>
      <div class="list-project desktop-project">
         <div class="container-fluid">
            @foreach ($cate->product as $product)
            @php
               $imgs = json_decode($product->images);
            @endphp
            <div class="item">
               <div class="row">
                  <div class="col-md-6 col-small">
                     <div class="small">
                        <div class="row">
                           @foreach ($imgs as $key => $img)
                           @if ($key != 0 && $key < 5)
                           <div class="col-md-6 col-sm-6 col-6">
                              <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                 <div class="avarta box first">
                                    <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" >
                                    <img
                                    src="{{$img}}"
                                    class="img-fluid"
                                    width="100%"
                                    alt="{{languageName($product->name)}}">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-big">
                     <div class="big wow fadeIn" data-wow-delay="2s">
                        <div class="avarta">
                           <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                              <img
                              src="{{$imgs[0]}}"
                              class="img-fluid"
                              width="100%" alt="{{languageName($product->name)}}">
                           </a>
                        </div>
                        <div class="info box first">
                           <h3>
                              <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">{{languageName($product->name)}}</a>
                           </h3>
                           <div class="linea">{!!languageName($product->description)!!}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <div class="list-project mobile-project" data-pro="{{count($cate->product)}}" data-cate="{{count($categoryhome)}}"> 
         <div class="container">
            @foreach ($cate->product as $key=>$product)
            @php
               $imgs = json_decode($product->images);
            @endphp
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="project-album-image">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2{{$key}}" >
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                              <a class="swiper-slide" href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                                 <img src="{{$img}}" />
                              </a>
                              @endforeach
                           </div>
                           <div class="swiper-button-next"></div>
                           <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mySwiper{{$key}}">
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                              <div class="swiper-slide">
                                 <img src="{{$img}}" />
                              </div>
                              @endforeach
                           </div>
                        </div>
                        <div class="info">
                           <h3>
                              <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">{{languageName($product->name)}}</a>
                           </h3>
                           <div class="linea">{!!languageName($product->description)!!}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   @endif
   @endforeach
   
   <section id="box-news" class="aaa">
      <div class="container">
         <div class="content">
            <div class="title">
               <h2><span>Góc tư vấn</span></h2>
            </div>
            <div class="swiper-container slide-news">
               <div class="swiper-wrapper">
                  @foreach ($hotnews as $item)
                  <div class="swiper-slide">
                     <div class="item wow fadeIn" data-wow-delay=".4s" style="background-image: url({{url('frontend/images/bg_duan_home.jpg')}})">
                        <div class="avarta"><a
                           href="{{route('detailBlog',['slug'=>$item->slug])}}"
                           title="{{languageName($item->title)}}"><img
                           src="{{$item->image }}"
                           class="img-fluid"
                           width="100%"
                           alt="{{languageName($item->title)}}"></a></div>
                        <div class="info">
                           <h3>
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}"
                                 title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                           </h3>
                           <div class="date">
                              {{date_format($item->created_at,'d/m/Y')}}                                               
                           </div>
                           <div class="desc">{{languageName($item->description)}}
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="swiper-button-next"><a href="javascript:0"><img
                  src="{{url('frontend/images/right1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
               <div class="swiper-button-prev"><a href="javascript:0"><img
                  src="{{url('frontend/images/left1.png')}}"
                  class="img-fluid" alt="Trang chủ"></a></div>
            </div>
         </div>
      </div>
   </section>
   {{-- <section id="box-baochi">
      <div class="container">
         <div class="title">
            <h2><span>Đối tác</span></h2>
         </div>
         <div class="content row">
            @foreach ($partner as $item)
            <div class="col-md-3">
               <div class="item">
                  <div class="avarta">
                     <a rel="nofollow" target="_blank" href="{{$item->link}}" class="seoquake-nofollow">
                        <img src="{{$item->image}}" class="img-fluid" alt="{{$item->link}}">
                     </a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section> --}}
</main>
      
@endsection