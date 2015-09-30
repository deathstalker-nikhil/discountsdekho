<?php echo $head; ?>
    <section id="merchant">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MERCHANT SIGNUP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-lg-12">
                                    <div class="col-md-6">
                                <form method="post" action="/home/registerMerchant">
                                <label>Region</label>
                                <div class="form-group">
                                    <select class="form-control" name="region">
                                        <option>Delhi NCR</option>
                                        <option>Pune</option>
                                    </select>
                                </div></div>
                                 <div class="col-md-6">
                                    <label>Contact Number</label>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Contact Number" name="contact" required autocomplete="on">
                                </div>
                            </div>
                            <div class="col-md-12">
                                    <label>Business Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Business Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label>E-Mail Address</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-Mail Address" name="email" required autocomplete="on">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label>Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                                    <a href="/merchant_account">Already have a account? Login here!</a>
                                   <button type="submit" class="btn btn-xl1" style="float:right;">Register</button>
                                </div>
                            </div>
                            </form>
                        </div>
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
