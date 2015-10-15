  <!DOCTYPE html>
  <!-- Team Section -->
  <?php echo $head; ?>
      
      <div class="container">
          <div class="row">
              <h3 style="color:#C80237">Home/<?php echo $dealData['category'] ?>/<?php echo $dealData['subcategory'] ?></h3>
                             <div class="row">
                              <div class="col-md-4 col-md-offset-1">
                                    <ul id="etalage">

                                 
                                 <?php 
                                 $i = 0;
                                 foreach ($dealData['images'] as $key => $value) {
                  if ($value != '') { $i++; ?>
                  <li>                
                    <img class="etalage_thumb_image" src="<?php echo $value ?>" />
                    <img class="etalage_source_image" src="<?php echo $value ?>" />
                   
                    <a style="float:right;" href="<?php echo $value; ?>" onclick="window.open('<?php echo $value; ?>', 'newwindow', 'width=600, height=650'); return false;"><i class="fa fa-arrows-alt"></i> View Full Screen</a>

                  </li>
        
  <?php } 
                } ?>
  </ul>
                          </div>
                           <div class="col-md-6">
                          
                                  <h4 style="color: #C80237"><?php echo $dealData['title'] ?></h4>
    
                                  <label>About Brand</label>
                                  <p class="text-muted"><?php echo $dealData['brand_details'] ?></p>
                                  
                               <p class="help-block text-danger"><b>
                                <?php if ($dealData['coupons'] == 1) { echo "COUPON AVAILABLE"; echo "<br> <button data-toggle='modal' data-target='#coupon' class='btn btn-xl'>Coupon Details</button>"; } else { echo "NO COUPON AVAILABLE"; } ?></b></p>
                                 
                                 
                             
                                  <p><label>Share this deal:</label><i class="fa fa-facebook" style="border-radius: 100%; margin: 0.15em; background: #3B5998; color: #FFFFFF; font-size: 2em; padding: 10px 15px;"></i><i class="fa fa-twitter" style="border-radius: 100%; margin: 0.15em; background: #4099FF; color: #FFFFFF; font-size: 2em; padding: 10px;"></i><i class="fa fa-commenting"><a href="#review"><label>Write a review</label></a></i></p>
                                    <hr style="border-width: 2px;">
                                 <p><label>Offer Start's On: </label> <?php echo $dealData['start_date'] ?></p>
                                  <p><label>Offer End's On: </label> <?php echo $dealData['end_date'] ?></p>
                                     
                              
                           </div>




                           <div class="col-md-10 col-md-offset-1">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a data-toggle="tab" href="#offer">Offer Details</a></li>
    <li><a data-toggle="tab" href="#locations">Location(s)</a></li>
    <li><a data-toggle="tab" href="#malls">Mall(s)</a></li>
  </ul>

  <div class="tab-content">
        <div id="offer" class="tab-pane fade in active"style="overflow-y: scroll; height:250px;">
      <br>
      <label>Offer details:</label>
      <?php echo $dealData['details'] ?>
    </div>
    <div id="locations" class="tab-pane fade" style="overflow-y: scroll; height:250px;">
      <br>
      <label>Offer available at following locations:</label>
      <?php 
         // $locations = explode('#', $dealData['locations']);
      $locations = json_decode($dealData['locations']);

          foreach ($locations as $key => $value) {?>
            <p><?php echo ($key+1).'. '.$value ?>         </p>
          <?php } ?>
    </div>
    <div id="malls" class="tab-pane fade"style="overflow-y: scroll; height:250px;">
      <br>
      <label>Offer available at following malls across <?php echo $dealData['region']; ?>:</label>
      <?php foreach ($dealData['malls'] as $key => $value) {?>
          <p><?php echo ($key+1).'. '.$value ?></p>
        <?php } ?>
    </div>
  </div>

                           </div>

<div class="col-md-4 col-md-offset-1" id="review">
       <h4 style="color: #C80237">Write a Review</h4>  
        <?php if($this->session->userdata('userLoggedIn')){?> 
      <form method="post" action="/Home/review">
      
          <div class="form-group">
              <label>Review</label>
              
              <textarea name="review" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
            <input type="hidden" name="url" value="<?php echo preg_replace('/\s+/','-',$dealData['title'])."-".$dealData['id']; ?>">
            <input type="hidden" name="dealId" value="<?php echo $dealData['id']; ?>">
              <button type="submit" name="submit" class="btn" style="float: right; background: #C80237; color: #fff;">Submit</button>
          </div>
      </form>
      <?php } else { ?>
      <form>
      
          <div class="form-group">
              <label>Review</label>
              
              <textarea disabled class="form-control"></textarea>
          </div>
          <div class="form-group">
           
              <button type="submit" class="btn" style="float: right; background: #C80237; color: #fff;">Submit</button>
          </div>
          <p style="color: #C80237">Please login to write review</p>
      </form>

      <?php } ?>

  </div>
  <div class="col-md-6 col-md-offset-1">
        <h4 style="color: #C80237">Reviews</h4>  
         <?php $count=0; foreach ($review as $key => $value) { $count++; ?>                          
  <b><?php echo $value['user_name']; ?></b> says
                          <blockquote class="testimonial">
  <p><?php echo $value['review']; ?></p>
  </blockquote>
  <?php } if ($count==0) {
?>
    <p>No reviews yet</p>
    <?php
  } ?>

  
                           </div>
  

                             </div>
              
          </div>
      </div>
    
<div class="container">
    <div class="row">
        <h3 style="color:#C80237">RELEVANT OFFERS</h3>
        <?php if (count($categorydeals) > 0){
         
            $i = 0;
            foreach ($categorydeals as $key => $value) {
            if($i == 4){
                break;
            }
           
            $i++;
            ?>
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
                    <a href="/deal/<?php echo preg_replace('/[\s%]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                </div>
            </div>
        </div>
        <?php }}
        ?>
    </div>
</div>

     <div class="modal fade" id="coupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            
              <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Coupon Details</h4>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row" style="margin: 10px; padding: 10px;">
                                              <p class="text-muted"><?php echo $couponData[0]['coupon_details']; ?></p>
                                             
                                               <?php if($this->session->userdata('userLoggedIn')){?>
                                              <form method="post" action="/Home/getCouponForUser">
                                              <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_data']['id']; ?>">
                                              <input type="hidden" name="coupon_type" value="<?php echo $couponData[0]['coupon_type']; ?>">
                                              <input type="hidden" name="coupon_code" value="<?php echo $couponData[0]['coupon_code']; ?>">
                                               <input type="hidden" name="coupon_id" value="<?php echo $couponData[0]['id']; ?>">
                                              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                                              <button type="submit" class="btn btn-xl" style="float:right;">Get Coupon</button>
                                            </form>
                                            <?php } 
                                            else
                                            {
                                              ?>
                                               <p><strong>Please sign in to DiscountsDekho to get this deal.</strong></p>
                                              <?php
                                            }
                                            ?>

                                                </div></div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
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
        <script src="/assets/js/jquery.etalage.min.js"</script>
       <script src="/assets/js/easing.js"></script>
      <script type="text/javascript">

          jQuery(document).ready(function($){
              
              $('#etalage').etalage({
                  thumb_image_width: 300,
                  thumb_image_height: 400,

                  show_hint: true,
                  click_callback: function(image_anchor, instance_id){
                      alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                  }
              });
              // This is for the dropdown list example:
              $('.dropdownlist').change(function(){
                  etalage_show( $(this).find('option:selected').attr('class') );
              });

          });
     
  </script>

  </body>

  </html>
