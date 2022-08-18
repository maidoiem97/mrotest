@extends('web.layout.app')
@section('content')
<div class="container">
	<div class="site-main__banner">
		<div class="owl-carousel owl-theme">
            <div class="item">
        		<a href="">
        			<img src="./assets/images/Bitmap.jpg" alt="">
        		</a>
            </div>
            <div class="item">
        		<a href="">
        			<img src="./assets/images/Bitmap.jpg" alt="">
        		</a>
            </div>
            <div class="item">
        		<a href="">
        			<img src="./assets/images/Bitmap.jpg" alt="">
        		</a>
            </div>
        </div>		
	</div>
	<div class="site-main__images">
		<x-images-main></x-images-main>
	</div>
	<div class="site-main__slide">
		<h3>SẢN PHẨM NỔI BẬT</h3>
        <div class="owl-carousel owl-theme">
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
        </div>
    </div>
    <div class="site-main__category">
    	<h3>DANH MỤC SẢN PHẨM</h3>
    	<div class="list">
    		<x-product-type></x-product-type>
    	</div>
    </div>
    <div class="site-main__producer">
    	<div class="top">
    		<div class="top-left">
        		<h3>CÁC HÃNG</h3>
        	</div>
        	<div class="top-right">
        		<span>Xem tất cả</span>
        		<i class="fas fa-caret-right"></i>
        	</div>
    	</div>
    	<x-brand></x-brand>
    </div>
</div>
<div class="site-main__center">
	<div class="container">
		<x-battery-products></x-battery-products>
        <x-battery-products></x-battery-products>
        <x-battery-products></x-battery-products>
        <x-battery-products></x-battery-products>
        <x-battery-products></x-battery-products>
	</div>
</div>
<div class="container">
	<div class="site-main__post">
    	<div class="title">
    		<div class="title-text">
    			<h3>KIẾN THỨC VÀ KĨ NĂNG</h3>
    		</div>
    		<div class="title-menu">
    			<ul>
    				<li><a href="">tư vấn sản phẩm</a></li>
    				<li class="in"><a href="">hướng dẫn sử dụng</a></li>
    				<li class="in"><a href="">chia sẻ kiến thức</a></li>
    				<li class="in"><a href=""><p>xem tất cả</p><i class="fas fa-caret-right"></i></a></li>
    			</ul>
    		</div>
    	</div>
    	<div class="content">
    		<x-post></x-post>
            <x-post></x-post>
            <x-post></x-post>            
            <x-post></x-post>
    	</div>
    </div>
</div>
@endsection