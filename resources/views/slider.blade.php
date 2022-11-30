
 <style>
.mySlides {display:none;}
</style>

@foreach(App\Maincategories::get() as $key => $Slider)
    
  <a href="{{$Slider->url}}">

    <img class="mySlides" src="{{$Slider->slider}}" style="width:100%">
   </a>
   
                        @endforeach

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

