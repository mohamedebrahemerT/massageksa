

	<!-- Contact Us -->

	<div class="touch-line">

		<div class="container">

			<div class="row">

				<div class="col-md-8">

				   <p style="color: #fff">

           

            @if(session('lang')=='ar')
 
 إذا كانت لديك أي أسئلة أو استفسارات بخصوص  الحلول التقينية لشركة كوانتم  ، فيرجى الاتصال بنا مباشرة  
    @endif
    @if(session('lang')=='en')
If you have any questions or concerns regarding Our Solutions products, please contact us directly by attaching your name, email and the text of the message to be delivered to us.
    @endif

         </p>

				</div>

				<div class="col-md-4">

				   <a class="btn btn-lg btn-secondary btn-block" href="{{url('/')}}/contact"> {{trans('admin.contact')}}</a>

				</div>

			</div>

		</div>

	</div>



 

    <!-- /.container -->

    <!--footer starts from here-->

    <footer class="footer">

        <div class="container bottom_border">

            <div class="row">
 <br>
 <br>
 <br>
 <br>
					<div class="col-lg-3 col-md-6 col-sm-6 ">

					<div class="news-box">

						  <a href="{{url('/')}}">

				<img src="{{url('/')}}/Untitled-3.jpg" alt="logo"  style="margin-top: 33%;" />

            </a>

						<!--h5 class="headin5_amrc col_white_amrc pt2">{{trans('admin.Subscribe')}}</h5>

						<p>{{trans('admin.Subscribe2')}}</p>

						<form action="#">

							<div class="input-group">

								<input class="form-control" placeholder="{{trans('admin.email')}}" type="text">

								<span class="input-group-btn">

								  <button class="btn btn-secondary" type="button">{{trans('admin.Subscribe')}}</button>

								</span>

							</div>

						</form -->

					</div>

				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">

					<h5 class="headin5_amrc col_white_amrc pt2">{{trans('admin.Quicklinks')}} </h5>

					<!--headin5_amrc-->

					<ul class="footer_ul_amrc">

						<li><a href="{{url('/')}}">

                            @if(session('lang')=='en')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif
							{{trans('admin.Home')}}
					   @if(session('lang')=='ar')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif
						</a></li>

						<li><a href="{{url('/')}}/About">
							@if(session('lang')=='en')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif

						 {{trans('admin.About')}}

@if(session('lang')=='ar')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif
							  </a></li>

						<li><a href="{{url('/')}}/Services">
							@if(session('lang')=='en')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif

							{{trans('admin.services')}}
@if(session('lang')=='ar')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif
						 </a></li>
						 

						 

						<li><a href="{{url('/')}}/contact">
							@if(session('lang')=='en')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif

							{{trans('admin.Contact')}}
@if(session('lang')=='ar')
							<img src="{{url('/')}}/forentend/icon.png" width="20" height="20">
							@endif
						</a></li>

					</ul>

					<!--footer_ul_amrc ends here-->

				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col">

					<h5 class="headin5_amrc col_white_amrc pt2">{{trans('admin.Followus')}}</h5>

					<!--headin5_amrc ends here-->
                             
					<ul class="footer_ul2_amrc iconffooter" >


						 <li style="margin-bottom: 2px"> 
						 	   <li style="margin-bottom: 2px"> 
					<a href="{{settings()->TwitterLink}}">
						<img src="{{url('/')}}/forentend/icon/twitter.png" width="30" height="30">
						
					</a>
				</li>
				  <li style="margin-bottom: 2px">  
					<a href="{{settings()->instagramLink}}">
						<img src="{{url('/')}}/forentend/icon/instagram.png" width="30" height="30">
						
					</a>
					</li>

               <li style="margin-bottom: 2px"> 
					<a href="{{settings()->GmailLink}}" >
						<img src="{{url('/')}}/forentend/icon/youtube.png" width="30" height="30">
						
					</a>

					</li>

					<li style="margin-bottom: 2px">
					<a href="{{settings()->facebookLink}}">
						<img src="{{url('/')}}/forentend/icon/facebook.png" width="30" height="30" style="background-color:#fff;border-radius:5px">
					</a>
					</li>
		        </li>

					</ul>

					<!--footer_ul2_amrc ends here-->

				</div>



				<div class="col-lg-3 col-md-6 col-sm-6 col">

					<h5 class="headin5_amrc col_white_amrc pt2" style="color: #fff">

<div class="contact-details mb-lg">
                    <h4>{{trans('admin.Contact')}}</h4>
                    <ul class="contact">
                            @if(session('lang')=='ar')
                        <li>

<strong> &nbsp;:{{trans('admin.Address')}}</strong> &nbsp;<i class="fa fa-map-marker"></i>
                            <p>
                               
                   
        {{settings()->address_ar}}
         
                            </p>
                        </li>
                               @endif


                                  @if(session('lang')=='en')
                        <li>

                             <i class="fa fa-map-marker"></i><strong> &nbsp;{{trans('admin.Address')}}:</strong>
                            <p>
                               
                   
        {{settings()->address_en}}
         
                            </p>
                        </li>
                               @endif



   @if(session('lang')=='ar')
                        <li>
                            <p>
      
            <a href="tel:{{settings()->phone}}">{{settings()->phone}}</a> <strong>&nbsp;:{{trans('admin.phone')}}
                <i class="fa fa-phone"></i>

            </strong>
                                 
                            </p>
                        </li>
                               @endif



   @if(session('lang')=='en')
                        <li>
                            <p>
     <img src="{{url('/')}}/forentend/white-phone-icon-transparent-18.png" style="width: 20px;height: 20px">
                                <strong>&nbsp;{{trans('admin.phone')}}:</strong>
                                 <a href="tel:{{settings()->phone}}">{{settings()->phone}}</a>
                            </p>
                        </li>
                               @endif

                                  @if(session('lang')=='ar')
                        <li>
                            <p>
                                <strong> &nbsp; :{{trans('admin.Email')}}<i class="fa fa-envelope"></i></strong>
                                <a href="mailto:{{settings()->email}}">{{settings()->email}}</a>
                            </p>
                        </li>
                               @endif

                                @if(session('lang')=='en')
                        <li>
                            <p>
                                <i class="fa fa-envelope"></i>

                                <strong> &nbsp;{{trans('admin.Email')}}</strong>
                                <a href="mailto:{{settings()->email}}">{{settings()->email}}</a>
                            </p>
                        </li>
                               @endif


                      
                    </ul>
                </div>
            </div>

				</div>	
					

				</div>	



			





			</div>

		</div>

         

    </footer>

    

</div>

	  

<!-- Bootstrap core JavaScript -->

<script src="{{url('/')}}/forentend/vendor/jquery/jquery.min.js"></script>

<script src="{{url('/')}}/forentend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{url('/')}}/forentend/js/imagesloaded.pkgd.min.js"></script>

<script src="{{url('/')}}/forentend/js/isotope.pkgd.min.js"></script>

<script src="{{url('/')}}/forentend/js/filter.js"></script>

<script src="{{url('/')}}/forentend/js/jquery.appear.js"></script>

<script src="{{url('/')}}/forentend/js/owl.carousel.min.js"></script>

<script src="{{url('/')}}/forentend/js/jquery.fancybox.min.js"></script>

<script src="{{url('/')}}/forentend/js/script.js"></script>
<script src="{{url('/')}}/forentend/js/jquery.zoom.min.js"></script>

 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("xx");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
        
@stack('js')



</body>

</html>