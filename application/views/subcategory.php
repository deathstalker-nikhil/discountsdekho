<!DOCTYPE html>
<!-- Team Section -->
<?php echo $head; ?>
    
    <div class="container">
        <div class="row">
            <h3 style="color:#C80237">Home/Apparels/Men Wear</h3>
            <div class="col-lg-3">
                <h4 style="text-align: center;">FILTER BY</h4>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                          
                                                Locations
                                           
                                        </h4>
                                    </div>
                                   
                                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;North Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;South Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;East Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;West Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Gurgaon</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Noida</li>
                                               
                                            </ul>
                                        </div>
                                    
                                </div>

                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           
                                                Malls
                                          
                                        </h4>
                                    </div>
                                   
                                        <div class="panel-body" style="overflow-y: scroll; height:208px;">
                                           <form> <input type="text" class="form-control" placeholder="Malls in Delhi NCR"></form>
                                           <br>
                                           <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Aditya City Center, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shipra Mall, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Great India Palace, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Wave, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Spice Mall, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shopprix Mall, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shopprix Mall, Noida</li>
                                               
                                            </ul>
                                        </div>
                                    
                                </div>



                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           
                                                Coupons
                                          
                                        </h4>
                                    </div>
                                   
                                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Offers with coupons</li>
                                            </ul>
                                        </div>
                                    
                                </div>
                               
                                
                                
                            
                                
                                
             
                            </div>
            </div>
            <div class="col-lg-9">
            
            <?php foreach ($subcategorydeals as $key => $value) { ?>
                    <div class="col-lg-4">
                 <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo $value['images']['Image1'] ?>">
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
                        <a href="javascript:">View Deal</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
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

</body>

</html>
