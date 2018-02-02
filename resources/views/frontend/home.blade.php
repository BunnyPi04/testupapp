@section('title', 'Trang chủ')
@extends('frontend.master')
@section('main')
	<div id="wrap-inner">
		<div class="products">
			<h3>sản phẩm nổi bật</h3>
			<div class="product-list row">
				@if (isset($featured))
				@foreach ($featured as $item)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img style="height: 150px;" src="{{ asset('lib/storage/app/avatar/'.$item->prod_img) }}" class="img-thumbnail"></a>
					<p><a href="#">{{ $item->prod_name }}</a></p>
					<p class="price">{{ number_format($item->prod_price, 0, ',', '.') }}</p>	  
					<div class="marsk">
						<a href="{{ asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">Xem chi tiết</a>
					</div>                                    
				</div>
				@endforeach
				@endif
			</div>                	                	
		</div>

		<div class="products">
			<h3>sản phẩm mới</h3>
			<div class="product-list row">
				@if (isset($news))
				@foreach ($news as $item)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img style="height: 150px;" src="{{ asset('lib/storage/app/avatar/'.$item->prod_img) }}" class="img-thumbnail"></a>
					<p><a href="#">{{ $item->prod_name }}</a></p>
					<p class="price">{{ number_format($item->prod_price, 0, ',', '.') }}</p>	  
					<div class="marsk">
						<a href="#">Xem chi tiết</a>
					</div>                                    
				</div>
				@endforeach
				@endif
			</div>      
		</div>
	</div>
@endsection