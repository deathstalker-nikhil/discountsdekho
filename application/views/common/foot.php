<footer class="container-fluid">
        <div class="row section1">
            <div class="col-sm-3 col-sm-offset-1">
                <i class="fa fa-eye"> Shopping se pehle DiscountsDekho</i>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-envelope"> contact@discountsdekho.com</i>
            </div>
            <div class="col-sm-3">
               <i class="fa fa-shopping-cart"> Shop More to Save More</i>
            </div>
        </div>
        <div class="row section2">
            <div class="col-sm-4 col-sm-offset-1">
                <p>Connect with us on social media</p>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/discountsdekho"><img src="/assets/img/social/fb.png" width="35px;"></a></li>
                    <li><a target="_blank" href="https://twitter.com/Discountsdekho"><img src="/assets/img/social/twitter.png" width="35px;"></a></li>
                    <li><a target="_blank" href="http://www.pinterest.com/meetdiscounts"><img src="/assets/img/social/pinterest.png" width="35px;"></a></li>
                    <li><a target="_blank" href="http://ink361.com/app/users/ig-1374254392/meetdiscounts/photos"><img src="/assets/img/social/insta.png" width="35px;"></a></li>
                    <li><a target="_blank" href="/linkedin"><img src="/assets/img/social/linkedin.png" width="35px;"></a></li>
                </ul>
            </div>
           <div class="col-sm-3">
            <br>
            <img src="/assets/img/coming-soon-google-play.png">
           </div>
            <div class="col-sm-4">
                <p>Subscribe to our newsletter and save more</p>

                <form action="/Home/subscribe" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your E-Mail Address" required class="form-control">
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <input type="submit" value="Go" style="color: #fff;" class="btn">
                    </div>
                </form> 
                <br><br>
                    
            </div>
        </div>
        <div class="row section3">
            <div class="col-sm-2 col-sm-offset-1">
                <div class="sub_list">
                    <a href="/category/Apparels"><p>Apparels</p></a>
                    <ul>
                      <?php foreach ($subCategory as $key => $value) {
                            if ($key == 'Apparels') {?>
                             <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            <?php   }
                        } ?>
                    </ul>
                </div>
                <div class="sub_list">
                    <a href="/category/Home and Living"><p>Home and Living</p></a>
                    <ul>
                     <?php foreach ($subCategory as $key => $value) {
                            if ($key == 'Home and Living') {?>
                             <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            <?php   }
                        } ?>
                    </ul>
                </div>
                
            </div>
            <div class="col-sm-2">
                <div class="sub_list">
                    <a href="/category/Beauty and Grooming"><p>Beauty &amp; Grooming</p></a>
                    <ul>
                     <?php foreach ($subCategory as $key => $value) {
                            if ($key == 'Beauty and Grooming') {?>
                             <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            <?php   }
                        } ?>
                    </ul>
                </div>
               
            </div>
            <div class="col-sm-2">
                <div class="sub_list">
                    <a href="/category/Fitness and Sports"><p>Fitness and Sports</p></a>
                    <ul>
                      <?php foreach ($subCategory as $key => $value) {
                            if ($key == 'Fitness and Sports') {?>
                             <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            <?php   }
                        } ?>
                    </ul>
                </div>
                     
            </div>
            <div class="col-sm-2">
               <div class="sub_list">
                    <a href="/category/Miscellaneous"><p>Miscellaneous</p></a>
                    <ul>
                       <?php foreach ($subCategory as $key => $value) {
                            if ($key == 'Miscellaneous') {?>
                             <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            <?php   }
                        } ?>
                    </ul>
                </div>           
               
                      
            </div>
            <div class="col-sm-2">
                <div class="sub_list">
                    <p>SUPPORT</p>
                    <ul>
                        <li><a href="/privacy_policy">Privacy Policy</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/disclaimer">Disclaimer</a></li>
                        <li><a href="/listoffers">List your Offer</a></li>
                        <li><a href="/contact_us">Contact Us</a></li>
                    </ul>
                </div> 
                <div class="sub_list">
                    <p>Company Info</p>
                    <ul>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="/testimonials">Testimonials</a></li>
                        <li><a href="/media">Media</a></li>
                        <li><a href="/merchant_account">Merchant Account</a></li>
                        <li><a href="http://www.discountsdekho.com/blog" target="_blank">Blog</a></li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="section4 row">
            <div class="col-sm-12">
                <p> &copy; 2015 DiscountsDekho </p>
            </div>
        </div>
    </footer>
    <input type="hidden" id="message" value="<?=$message?>">
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    
    <script>
    $(document).ready(function(){
        
        if($('#message').val()!=''){
            $('#msgModal').find('.modal-body').html($('#message').val());
            $('#msgModal').modal('toggle');
        }
    });
    
</script>
