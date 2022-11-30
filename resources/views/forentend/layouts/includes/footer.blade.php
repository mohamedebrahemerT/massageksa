
 

<footer>

    
</footer>

<!-- Script -->
<script src="{{url('landing')}}/assets/js/jquery.min.js"></script>
<script src="{{url('landing')}}/assets/js/bootstrap.min.js"></script>
<script src="{{url('landing')}}/assets/js/jquery.nav.js"></script>
<script src="{{url('landing')}}/assets/js/wow.min.js"></script>
<script src="{{url('landing')}}/assets/js/jquery.localScroll.min.js"></script>
<script src="{{url('landing')}}/assets/js/owl.carousel.js"></script>
<script src="{{url('landing')}}/assets/js/jquery.stellar.min.js"></script>
<script src="{{url('landing')}}/js/jquery.ripples-min.js"></script>
<script src="{{url('landing')}}/js/custom.js"></script>

<script src="{{url('/')}}/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script>
    $( document ).ready(function() {
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-bottom-left",
        };
    });
</script>

 
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id={{settings()->facebook_pixel }}&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->




<!-- Twitter universal website tag code -->
<script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
        a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init','{{ settings()->twitter_pixel }}');
    twq('track','PageView');
</script>



@if(session()->has('success') || session()->has('error') || session()->has('errors'))
    <script>
        $( document ).ready(function() {
            @if(session()->has('success'))
            toastr.success("{{session()->get('success')}}");
            @elseif(session()->has('error'))
            toastr.error("{{session()->get('error')}}");
            @else
            @foreach($errors->all() as $session_error)
            toastr.error("{{$session_error}}");
            @endforeach
            @endif
        });
    </script>
    @endif


       <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{settings()->phone}}", // WhatsApp number
            call_to_action: " للدعم او للاستفسارات", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

  @yield('javascript')

          @stack('js')
        <script src="{{url('/')}}/js/myAudio.js" type="text/javascript"></script>

</body>

</html>
