<?php echo $head; ?>
    <section id="merchant">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LIST YOUR OFFERS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <form method="post" action="">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text" class="form-control" name="brand_name" placeholder="Brand Name" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Company Name (if any)</label>
                                    <input type="text" class="form-control" name="company_name" placeholder="Comapany Name" id="name">
                                </div>
                                 <div class="form-group">
                                    <label>E-Mail Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="E-Mail Address" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" id="name">
                                </div>
                                 <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" pattern="\d{10}" maxlength="10" name="mobile" class="form-control" placeholder="Mobile Number" id="name">
                                </div>
                                <div class="form-group">
                                    <label>Link (if any)</label>
                                    <input type="text" name="link" class="form-control" placeholder="Link" id="name">
                                </div>
                                <div class="form-group">
                                   <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                                   <button type="submit" name="submit" value="submit" class="btn btn-xl1" style="float:right;">Send Enquiry</button>
                                </div>
                              
                            </div>
                        </form>
                            <div class="col-md-6" style="text-align: center;">
                                    <img src="/assets/img/offers.png">
                                    <p>You can also drop us a mail at <strong>sales@discountsdekho.com</strong></p>
                                
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
