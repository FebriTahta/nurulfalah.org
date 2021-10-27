<footer >
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                {{-- <img src="{{asset('img/logo_footer.png')}}" width="141" height="40" alt="" id="logo_footer" data-retina="true"> --}}
                <ul id="contact_details_footer">
                      <li>Route de Sablet 1023, Marseille<br>France 01923</li>
                    <li><a href="tel://004542344599">+45 423 445 99</a> / <a href="#0">beta..</a></li>
                </ul>  
            </div>
            <div class="col-md-2 col-sm-4">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Contact us</a></li>
                     <li><a href="#">Gallery</a></li>
                </ul>
            </div>                
            <div class="col-md-3 col-sm-4">
                <h3>Change language</h3>
               <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">Spanish</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-4"  id="newsletter">
                <h3>Newsletter</h3>
                <p>Join our newsletter to keep be informed about offers and news.</p>
                <div id="message-newsletter_2"></div>
                    <form method="post" action="{{asset('assets/newsletter.php')}}" name="newsletter_2" id="newsletter_2">
                    <div class="form-group">
                        <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                      </div>
                        <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    </form>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Beta 2019</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
    
<!-- COMMON SCRIPTS -->
{{-- <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script> --}}
<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/common_scripts_min.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('layerslider/js/greensock.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    $('#layerslider').layerSlider({
        autoStart: true,
        responsive: true,
        responsiveUnder: 1280,
        layersContainer: 1170,
        navButtons:false,
        showCircleTimer:true,
        navStartStop:false,
        skinsPath: 'layerslider/skins/'
        // Please make sure that you didn't forget to add a comma to the line endings
        // except the last line!
    });
</script>

<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- <script src="assets/js/wow.min.js"></script> -->
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('script')
</body>
</html>