 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{settings()->sitemeta}}">
 
	<title>
				@if(session('lang')=='ar')
				{{settings()->namear}}
				@endif
				@if(session('lang')=='en')
				{{settings()->nameaen}}
				@endif  
	</title>

	 <meta name="description" content="acefuture">
  <meta name="keywords" content="Recycling - Environmental - Clean Energy - Solar - Rubber Tires - Smart Cities - Smart Homes - Advanced - Investor - Investment - Ministry - Municipal - Affairs - Environment - Industry- garbage- bin - tiers- Consultancy- GCC- Europe union">
  <meta name="author" content="acefuture">

	<link rel="icon" type="image/ico" href="{{url('/')}}/forentend/icon.png" />
 
  
	<!-- Bootstrap core CSS -->
	<link href="{{url('/')}}/forentend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{url('/')}}/forentend/css/all.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('/')}}/forentend/css/owl.carousel.min.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('/')}}/forentend/css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="{{url('/')}}/forentend/css/style.css" rel="stylesheet">
	<!-- Custom styles for this template -->


 
       @if(session('lang') == 'ar')
 

	<link href="{{url('/')}}/forentend/css/droidarabickufi.css" rel="stylesheet">

	<link href="{{url('/')}}/forentend/css/AR.css" rel="stylesheet">
    

       @endif

          @if(session('lang') == 'en')
       
	<link href="{{url('/')}}/forentend/css/EN.css" rel="stylesheet">
    
	 <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
       @endif
<!-- end .rev_slider_wrapper -->
      
    <style type="text/css">
    	.xx
    	{
    		display: none;
    	}
    </style>
</head>
<body>