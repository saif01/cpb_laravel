        <footer class="footer page-section-pt black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 sm-mb-30">
                        <div class="footer-useful-link footer-hedding">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 sm-mb-30">
                        <div class="footer-useful-link footer-hedding">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                            <ul>
                                <li><a href="#">Create Account</a></li>
                                <li><a href="business-operations">All Operations</a></li>
                                <li><a href="our-history">History</a></li>
                                <li><a href="our-headquarters">Headquarters</a></li>
                                <li><a href="#">Client Management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 xs-mb-30">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                        <ul class="addresss-info">
                            <li><i class="fa fa-map-marker"></i>
                                <p>Address: Holding No : E-236, Ward No : 007, Chandra, Kaliakoir, Gazipur</p>
                            </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:8801707080401"> <span>8801707080401</span> </a> </li>
                            <li><i class="fa fa-envelope-o"></i>Email: info@cpbangladesh.com</li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
                        <p class="mb-30">Sign Up to our Newsletter to get the latest news and offers.</p>
                        <div class="footer-Newsletter">
                            <div id="mc_embed_signup_scroll">
                                <form action="job/action/notifyMailStore.php" method="POST">

                                    <div id="mc_embed_signup_scroll_2">
                                        <input class="form-control" type="email" placeholder="Email address" name="email" required="required">
                                    </div>

                                    <div class="clear">
                                        <button type="submit" name="submit" class="button button-border mt-20 form-button"> Get notified </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer-widget mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <p class="mt-15"> &copy;Copyright <span id="copyright">
                                    <script>
                                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                    </script>
                                </span> <a href="#"> C.P. Bangladesh </a> All Rights Reserved </p>
                        </div>
                        <div class="col-lg-6 col-md-6 text-left text-md-right">
                            <div class="social-icons color-hover mt-10">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
        <!--=================================
 footer -->

    </div>
    <!-- End wrapper  -->






    <!--=================================jquery -->

    <!-- jquery -->
    <script type="text/javascript" src="{{ asset('front-end/js/jquery-1.12.4.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script type="text/javascript" src="{{ asset('front-end/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script type="text/javascript">
        var loc = "{{ asset('front-end') }}"
        var plugin_path = loc + "/js/";
        // var plugin_path = "http://localhost/cpb-l/front-end/js/";
    </script>


    <!-- custom -->
    <script type="text/javascript" src="{{ asset('front-end/js/custom.js') }}"></script>
    {{-- Page js --}}
    @yield('page-js')


    <!-- tostar js -->
    <script type="text/javascript" src="{{ asset('front-end/coustom/tostar/toastr.min.js') }}"></script>
    <script>
            @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>
</body>

</html>
