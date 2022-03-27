@extends('pages.layout.main')
@section('content')

<!-- Product Detail -->

<section class="sec-product-detail bg0 p-t-65 p-b-60" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                        <div class="slick3 gallery-lb">

                            <div class="item-slick3" data-thumb="{{asset($meals->image)}}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{asset($meals->image)}}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($meals->image)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{$meals->name}}
                    </h4>

                    <span class="mtext-106 cl2" style="color:red;">
                        {{$meals->price}} JD
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        {{$meals->description}}
                    </p>

                    <p class="stext-102 cl3 p-t-23">
                        FAT: {{$meals->fats}}
                    </p>

                    <p class="stext-102 cl3 p-t-23">
                        PROTEINS: {{$meals->proteins}}
                    </p>
                    <p class="stext-102 cl3 p-t-23">
                        CARBOHYDRATES: {{$meals->carbohydrates}}
                    </p>

                    <!--  -->
                    <div class="p-t-33">
                   

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                
                                 
                                    <form action="{{route('addToCart', $meals->id)}}" method="POST"> 
                                        @csrf
                                    <input type="number" value="1" min="1" class="form-control" name="quantity" style="width:100px"><br>
                                    <input class="btn btn-primary" type="submit" value="Add to cart">
                                    
                                    <!-- <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1"> -->
                                    </form>
                                    
                              

                                
                            </div>
                        </div>
                    </div>

                    <!--  -->
                </div>
            </div>
        </div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-adismiss="alert" aria-label="Close" style="color:red;"> <span aria-hidden="true">&times;</span></button>
            {{session()->get('message')}}
        </div>
        @endif

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="how-pos2 p-lr-15-md">
                            <p class="stext-102 cl6">
                                {{$meals->name}} is amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
</section>

<!-- Related -->
<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Related products
				</h3>
			</div>
<div class="row isotope-grid">
			@foreach($related as $rel)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{asset($rel->image)}}" alt="IMG-PRODUCT">

							<a href="{{ route('single-meal', ['id' => $rel->id]) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="font-weight:600; color:black;">
									{{$rel->name}} 
								</a>
                                
                                <span class="stext-105 cl3">
                                    {{$rel->description}}
								</span>

								<span class="stext-105 cl3" style="color: red;">
									{{$rel->price}} JD
								</span>
							</div>
	
						</div>
					</div>
				
				</div>
				@endforeach
			</div>
		</div>
	</section>

<!--end Related -->





@endsection