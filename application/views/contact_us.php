<?php echo $head; ?>
    <section id="merchant">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTACT US</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <form method="post" action="">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                                </div>
                                 <div class="form-group">
                                    <label>E-Mail Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="E-Mail Address" id="name">
                                </div>
                                 <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" pattern="\d{10}" maxlength="10" class="form-control" name="mobile" placeholder="Mobile Number" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" placeholder="Message" id="name"></textarea>
                                </div>
                                <div class="form-group">
                                   <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                                   <button type="submit" name="submit" value="submit" class="btn btn-xl1" style="float:right;">Send Message</button>
                                </div>
                              
                            </div>
                        </form>
                            <div class="col-md-6" style="text-align: center;">
                                    <img src="/assets/img/contactUs.jpg">
                                    <p>Reach us at <strong>contactus@discountsdekho.com</strong></p>
                                    <p>For sales related queries drop us a mail at <strong>sales@discountsdekho.com</strong> and for advertisement on our webiste mail us at <strong>advertise@discountsdekho.com</strong></p>
                                <br><h4>We are socially active</h4>
                                <a href="https://www.facebook.com/discountsdekho"><img src="/assets/img/social/fb.png" width="35px" style="padding: 2px;"></a>
                                <a href="https://twitter.com/Discountsdekho"><img src="/assets/img/social/twitter.png" width="35px" style="padding: 2px;"></a>
                                <a href="http://ink361.com/app/users/ig-1374254392/meetdiscounts/photos"><img src="/assets/img/social/insta.png" width="35px" style="padding: 2px;"></a>
                                <a href="/linkedin"><img src="/assets/img/social/linkedin.png" width="35px" style="padding: 2px;"></a>
                                <a href="http://www.pinterest.com/meetdiscounts"><img src="/assets/img/social/pinterest.png" width="35px" style="padding: 2px;"></a>
                            </div>
                           </div>
                           <div class="row">
                           </div> 
                            <div class="clearfix"></div>
                        
                </div>
            </div>
        </div>
    </section>

    <?php
        echo $foot;
    ?>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

  
    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/assets/js/classie.js"></script>
    <script src="/assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/js/jqBootstrapValidation.js"></script>
    <script src="/assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/agency.js"></script>

</body>

</html>
