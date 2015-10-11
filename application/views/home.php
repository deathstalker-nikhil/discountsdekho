<!DOCTYPE html>
<!-- Team Section -->
<?php echo $head; ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select type="text" class="form-control" placeholder="Your Name *" id="name">
                                        <option>Delhi NCR</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                             <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search Query" id="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select type="text" class="form-control" placeholder="Your Name *" id="name">
                                        <option>Apparels</option>
                                        <option>Electronics</option>
                                        <option>Home & Living</option>
                                        <option>Others</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <select type="text" class="form-control" placeholder="Your Name *" id="name">
                                        <option>Men Wear</option>
                                          <option>Women Wear</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select type="text" class="form-control" placeholder="Your Name *" id="name">
                                        <option>Lajpat Nagar</option>
                                          <option>Sarojini</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                                      
                            <div class="col-md-2 col-md-offset-5">
                                <div class="form-group">
                                      <button type="submit" class="btn btn-xl" style="width: 100%;">Search</button>
                                </div>
                            </div>
                           </div>
                           <div class="row">
                           </div>
                            <div class="clearfix"></div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <h3 style="color:#C80237">BEAUTY AND GROOMING</h3>
                       <?php if (count($deals['Beauty and Grooming']) > 0) {?>
                            <?php foreach ($deals['Beauty and Grooming'] as $key => $value) {?>
             <div class="col-lg-3">
                <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p><strong><?php echo $value['title']; ?></strong></p>
                            </div>
                            <div class="detailBody">
                                <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                                <p><strong>Offer Ends on:</strong> <span><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="viewButton">
                        <a href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                    </div>
                </div>
            </div>
                   
          <?php }} ?>
                   
           
                    
            <a style="float: right;">View All</a>
        </div>
    </div>
    
     
     <div class="container">
        <div class="row">
            <h3 style="color:#C80237">FITNESS AND SPORTS</h3>

              <?php if (count($deals['Fitness and Sports']) > 0) {?>
                            <?php foreach ($deals['Fitness and Sports'] as $key => $value) {?>
             <div class="col-lg-3">
                <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p><strong><?php echo $value['title']; ?></strong></p>
                            </div>
                            <div class="detailBody">
                                <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                                <p><strong>Offer Ends on:</strong> <span><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="viewButton">
                        <a href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                    </div>
                </div>
            </div>
                   
          <?php }} ?>
                   
           
            <a style="float: right;">View All</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 style="color:#C80237">APPARELS</h3>
            <?php if (count($deals['Apparels']) > 0) {?>
                            <?php foreach ($deals['Apparels'] as $key => $value) {?>
             <div class="col-lg-3">
                <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p><strong><?php echo $value['title']; ?></strong></p>
                            </div>
                            <div class="detailBody">
                                <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                                <p><strong>Offer Ends on:</strong> <span><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="viewButton">
                        <a href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                    </div>
                </div>
            </div>
                   
          <?php }} ?>
                  
           
        </div>
    </div>
    


     <div class="container">
        <div class="row">
            <h3 style="color:#C80237">MISCELLANEOUS</h3>
             <?php if (count($deals['Miscellaneous']) > 0) {?>
                            <?php foreach ($deals['Miscellaneous'] as $key => $value) {?>
             <div class="col-lg-3">
                <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p><strong><?php echo $value['title']; ?></strong></p>
                            </div>
                            <div class="detailBody">
                                <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                                <p><strong>Offer Ends on:</strong> <span><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="viewButton">
                        <a href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                    </div>
                </div>
            </div><?php }} ?>
        </div>   
    </div>            
          
    <?php
        echo $foot;
    ?>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->

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
    <script src="/assets/js/custom.js"></script>
</body>

</html>
