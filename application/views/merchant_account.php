<?php echo $head; ?>
    <section id="merchant">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MERCHANT ACCOUNT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-Mail Address" id="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password" id="name">
                                </div>
                                <div class="form-group">
                                    <a data-toggle="modal" href="#merchant_forgot_password">Forgot your password?</a>
                                   <button class="btn btn-xl1" style="float:right;">Login</button>
                                </div>
                                <a style="float: right; top-margin: 10px;" href="/merchant_register">Don't have a account, signup here!</a>
                            </div>
                           </div>
                           <div class="row">
                           </div> 
                            <div class="clearfix"></div>
                        
                </div>
            </div>
        </div>
    </section>

                         <div class="modal fade" id="merchant_forgot_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="" method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Forgot your Password?</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-12">
                                                <div class="col-lg-5">
                                           <img src="/assets/img/forget_Password.png" width="100%" style="text-align: center;">
                                                </div>
 <div class="col-lg-7">
                                                 <div class="form-group" style="margin-top: 50px;">

                                            <label>Registered E-Mail Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter E-Mail Address">
                                            <button type="submit" class="btn btn-primary" style="float:right; margin:5px; 0px;">Send</button>
                                           </div>
                                          
</div>

                                    

                                      


                                        </div></div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                           </form>
                            </div>

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
