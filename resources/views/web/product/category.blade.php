@extends('web.layout.app')
@section('content')
<div class="container">
	<div class="site-main__menu">
        <ul>
            <li><a href="">Trang chủ</a><i class="far fa-angle-right"></i></li>
            <li><a href="">Dụng cụ dùng điện</a><i class="far fa-angle-right"></i></li>
            <li>Máy khoan vặn vít động lực dùng pin Dewalt DCD778D2 18V </li>
        </ul>
    </div>
    <div class="site-main__top">
    	<div class="container">
    		<div class="content">
    			<x-slick-product></x-slick-product>
                <x-describe></x-describe>
    		</div>
    	</div>
    </div>
    <div class="site-main__body">
    	<div class="left">
    		<x-table-category></x-table-category>
    		<x-post-category></x-post-category>
            <x-evaluate-category></x-evaluate-category>
    	</div>
    	<x-sidebar-category></x-sidebar-category>
    </div>
    <div class="site-main__slide">
		<h3>Phụ kiện đi kèm</h3>
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
            <x-slide></x-slide>
            <x-slide></x-slide>
            <x-slide></x-slide>
        </div>
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
	        <x-slide></x-slide>
            <x-slide></x-slide>   
        </div>
    </div>
</div>
@endsection
