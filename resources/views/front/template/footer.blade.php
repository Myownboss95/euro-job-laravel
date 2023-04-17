<!-- Start Footer Area -->
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="single-footer-widget">
          <div class="logo">
            <a href="/" class="black-logo"><img src="{{asset('logo.png')}}" alt="logo" style="max-width: 250px"></a>
            <a href="/" class="white-logo"><img src="{{asset('logo-light.png')}}"style="max-width: 250px" alt="logo"></a>
                            <p>Experience the convenience and security of online banking with our bank. Manage your finances, track your transaction history and access your account from anywhere. Enjoy advanced security features and dedicated support for your business needs..</p>
          </div>
                        
          <ul class="social-links">
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="single-footer-widget">
                        <h3 style="margin-bottom: 55px">Company</h3>
                        
          <ul class="list">
            <li><a href="{{route('front.about')}}">About Us</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="single-footer-widget">
                        <h3 style="margin-bottom: 55px">Support</h3>
                        
          <ul class="list">
            <li><a href="{{route('front.help')}}">FAQ's</a></li>
            <li><a href="{{route('front.contact')}}">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="single-footer-widget">
          <h3 style="margin-bottom: 55px">Address</h3>
          
          <ul class="footer-contact-info">
            <li><span>Location:</span> 11353 12 Oaks Way, North Palm Beach, FL 33408, United States</li>
            <li><span>Email:</span> <a href="mailto:{{'hello@'.front_domain()}}"><span class="__cf_email__" >{{'hello@'.front_domain()}}</span></a></li>
            <li><span>Phone:</span> <a href="tel:+14232814506"> +1 423 281 4506</a></li>
                        </ul>
        </div>
      </div>
    </div>

            <div class="copyright-area">
                <p>Copyright @<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Powered by  <a href="#" target="_blank"> Twelve Oaks Corporation</a></p>
            </div>
        </div>
        
        <div class="map-image"><img src="{{asset('luvion/img/map.png')}}" alt="map"></div>
</footer>
    <!-- End Footer Area -->