<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/libs/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/general.min.css">
    <link rel="stylesheet" href="./assets/css/home.min.css">
    <link rel="stylesheet" href="./assets/css/category.min.css">
    <link rel="stylesheet" href="./assets/font/stylesheet.css">
    <link rel="stylesheet" href="./assets/css/responsive.min.css">
</head>
<body>
	<div class="site">  
        @include('web.layout.header')  
        <main class="site-main">
            @yield('content')
        </main>
        @include('web.layout.footer')
    </div>
	<script src="./assets/libs/jquery/jquery.min.js"></script>   
    <script src="./assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="./assets/js/main.min.js"></script>
</body>
</html>