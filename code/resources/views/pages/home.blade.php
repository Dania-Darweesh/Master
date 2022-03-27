@extends('pages.layout.main')
@section('content')


  
<div style="width:100vw; height:60vh;">
<div class="hero-image" style="background-image: url(images/keto.jpg); width:100%; height:60vh;  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;height: 75vh;" >
  <div class="hero-text" style=" text-align: center;
  position: absolute;
  top: 40%;
  left: 15%;
  transform: translate(-50%, -50%);
  color: black;">
    <h1>I am John Doe</h1>
    <p>And I'm a Photographer</p>
    <button  style=" 
  margin-top:50px;
  background-color: #86BC3D;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;">SHOP NOW</button>
  </div>
</div>
</div>
				

    <!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50 " style="margin-top:100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('images/ketoz.jpg')}}" alt="IMG-BANNER"  height="250">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									KETO
								</span>

								<span class="block1-info stext-102 trans-04">
								keto dishes
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{asset('images/ve.jpg')}}" alt="IMG-BANNER" width="220" height="250">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									VEGETARIAN
								</span>

								<span class="block1-info stext-102 trans-04">
									vegetarian dishes
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src= "{{asset('images/diet.jpeg')}}"  alt="IMG-BANNER" width="220" height="250">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									DIET
								</span>

								<span class="block1-info stext-102 trans-04">
								 diet dishes
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



    
	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>
			<div style="margin-top:60px">

			</div>

			<div class="row isotope-grid">
			@foreach($meals as $meal)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{asset($meal->image)}}" alt="IMG-PRODUCT">

							<a href="{{ route('single-meal', ['id' => $meal->id]) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="font-weight:600; color:black;">
									{{$meal->name}}
								</a>
                                
								<span class="stext-105 cl3">
									{{$meal->description}}
								</span>
								<span class="stext-105 cl3" style="color: red;">
									{{$meal->price}} JD
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
						
					</div>
				
				</div>
				@endforeach
			</div>
		</div>
	</section>
                    <!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>

            
            </div>
        </div>
    </section>
@endsection