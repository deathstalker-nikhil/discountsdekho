<?php echo $head; ?>
    <section id="merchant">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MEDIA COVERAGE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                             <?php foreach ($media as $key => $value) { ?>
                            <div class="col-lg-4">
                <div class="dealBox">
                
                    <div class="body">
                        
                        <div class="img">
                            <a href="<?php echo $value['link']; ?>"><img src="<?php echo $value['image']; ?>"></a>
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p style="font-size: 20px;"><strong><?php echo $value['name'] ?></strong></p>
                            </div>
                        
                        </div>
                      
                    </div>
                   
                </div>
            </div>
                     <?php } ?>         
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
