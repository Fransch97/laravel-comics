<div class="socialsBar">
    <div class="container">
       <div class="signup">
       <a class="sign tbn">sign-up now!</a>
     </div>
     <div class="socials">
       <span>follow us</span>

       @foreach ( $socials as $social)
       <img v-for="(img,index) in images" src="{{$social}}" alt="">
       @endforeach

     </div>
    </div>
 </div>
