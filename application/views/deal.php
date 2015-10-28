 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DiscountsDekho.com</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/agency.css" rel="stylesheet">
    <link href="/assets/css/etalage.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-social.css" rel="stylesheet">
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/css/dealBox.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "3e8a7408-39c1-4a4a-826d-461709853454", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<meta property="og:title" content="<?php echo $dealData['title']; ?>" />
<meta property="og:description" content="<?php echo $dealData['details']; ?>" />
<meta property="og:image" content="https://www.facebook.com/sharer/sharer.php?u=http://www.discountsdekho.com/deal/<?php echo preg_replace('/[\s%]+/','-',$dealData['title']).'-'.$dealData['id'] ?>" />

<meta name="twitter:card" content="Deal">
<meta name="twitter:url" content="https://www.facebook.com/sharer/sharer.php?u=http://www.discountsdekho.com/deal/<?php echo preg_replace('/[\s%]+/','-',$dealData['title']).'-'.$dealData['id'] ?>">
<meta name="twitter:title" content="<?php echo $dealData['title'] ?>">
<meta name="twitter:description" content="<?php echo $dealData['details'] ?>">
<meta name="twitter:image" content="http://www.discountsdekho.com<?php echo $dealData['images']['Image1'] ?>" />


</head>
<body id="page-top" class="index">
 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div style="float:right;">
          <label>Select Region</label>                         
          <select class="btn" name="location">
          <?php foreach ($regions as $key => $value) {?>
            <option <?= ($region == $value['region'])? 'selected':''; ?> ><?= $value['region'] ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="col-md-4">
        <a href="/"><img src="/assets/img/logos/web-logo.png" width="100%" style="margin-top:20px;"></a>
        </div>
        <div class="col-md-5">
          <div style="margin-top:35px;">
            <form onsubmit="window.location='/search?query='+$('#topSearchBar').val();return false;">
              <input type="text" class="form-control" required style="border:1px solid #ccc;width: 85%;display:inline-block" id="topSearchBar" placeholder="Search DiscountsDekho for deals, coupons, etc">
              <input type="submit" class="btn"  value="Go">
            </form>
          </div>
        </div>
        <div class="col-md-3">
          <div style="float:right;">
          <?php if($isLoggedIn){
            $name = explode(' ',trim($_SESSION['user_data']['name']));?>
            <span style="display: inline-block; padding: 10px; margin-top: 5px; float: left;">Welcome <label><?php echo $name[0];  ?></label></span>
            <a class="btn btn-default" style="margin-bottom: 4px; margin-top:15px;" href="/home/logout"><i class="fa fa-sign-out"> Logout</i></a>
            <br>
            <label style="float:right;"><a href="<?php if($this->session->userdata('merchantLoggedIn')){ echo "/merchant_settings"; } else if($this->session->userdata('userLoggedIn')){ echo "/user_profile"; } ?>">My Account</a></label>
            <?php } else{?>
            <button class="btn" data-toggle="modal" data-target="#myModal" style="margin-bottom: 4px; margin-top:15px;"><i class="fa fa-user"> Login</i></button>
            <button class="btn" data-toggle="modal" data-target="#myModal1" style="margin-bottom: 4px; margin-top:15px;"><i class="fa fa-users"> Register</i></button>
            <br>
          <?php } ?>
          <div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Forgot your Password?</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="col-lg-5">
                          <img src="/assets/img/forget_Password.png" width="100%" style="text-align: center;">
                        </div>
                        <div class="col-lg-7">
                          <div class="form-group" style="margin-top: 50px;">
                            <form class="forgotPasswordForm" onsubmit="return false;" method="post">
                              <label>Registered E-Mail Address</label>
                              <input type="email" class="form-control" required name="email" placeholder="Enter E-Mail Address">
                              <input type="hidden" name="type" value="user">
                              <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                              <button type="submit" class="btn btn-primary" style="float:right; margin:5px; 0px;">Send</button>
                            </form>
                          </div>                                    
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
                            </div>
                         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="/home/login" method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Signin into DiscountsDekho.com</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="col-md-6">
                                           <img src="/assets/img/login.png" width="100%">
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter E-Mail Address" required autocomplete="on">
                                           </div>
                                           <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <a data-dismiss="modal" data-toggle="modal" href="#forgot_password">Forgot your password?</a>
                                            <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                                            <button type="submit" class="btn btn-primary" style="float:right; margin:3px; 0px;">Login</button>
                                           </div>


                                        <div class="form-group">
                                           <button class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</button>
                                       </div>
                                        
                                       </div>


                                        </div></div></div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                           </form>
                            </div>

                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Register with DiscountsDekho.com</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="col-md-6">
                                    <form method="post" action="/home/signup">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Full Name" required autocomplete="on">
                                           </div>
                                          <div class="form-group">
                                            <label>E-Mail Address</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter E-Mail Address" required autocomplete="on">
                                           </div>
                                           <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                           </div>
                                           <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="city" placeholder="City" required>
                                           </div>
                                           <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" required autocomplete>
                                           </div>
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" placeholder="City" required autocomplete>
                                           </div>
                                            <div class="form-group">
                                            <label>Sex</label>
                                            <select type="text" class="form-control" name="gender">
                                                <option value="Male">Male</option>
                                                 <option value="Female">Female</option>
                                                  <option value="Prefer not to say">Prefer not to say</option>
                                            </select>
                                           </div>
                                           <input type="hidden" name="<?=$csrf_token_name ?>" value="<?=$csrf_token?>">
                                            <input type="submit" class="btn btn-primary" style="float:right; margin:3px; 0px;" value="Register">

                                       </div>
                                   </form>
                                                <div class="col-md-6">
                                           <img src="/assets/img/register.png" width="100%">
                                           <br>
                                            <div class="form-group">
                                           <button class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Register using Facebook</button>
                                       </div>
                                      
                                       </div>



                                        </div></div></div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                         
                            </div>

                    </div>      </div>

                </div>
            </div>

        </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu">
                    <?php foreach ($subCategory as $key => $value) {?>
                        <li>
                            <a class="page-scroll" href="/category/<?php echo $key; ?>"><?php echo $key ?></a>
                            <div class="subMenu">
                            <p><?php echo $key ?></p>
                            <ul>
                                <?php foreach ($value as $key2 => $value2) {?>                                
                                    <li>
                                        <a href="/subcategory/<?php echo $value2; ?>" data-id=""><?php echo $value2 ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


      <div class="container">
          <div class="row">
              <h4 style="color:#C80237"><a href="http://www.discountsdekho.com">Home</a>/<a href="/category/<?php echo $dealData['category']; ?>"><?php echo $dealData['category'] ?></a>
                <?php
                $subcategory = explode(',', $dealData['subcategory']);
                foreach ($subcategory as $key => $value) {
                 echo "/<a href='/subcategory/$value'>$value</a>";
                }
                
                ?>
              </h4>
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
                           <div class="col-md-5">
                          
                                  <h4 style="color: #C80237"><?php echo $dealData['title'] ?></h4>
    
                                  <label>About Brand</label>
                                  <p class="text-muted"><?php echo $dealData['brand_details'] ?></p>
                                  
                               <p class="help-block text-danger"><b>
                                <?php if ($dealData['coupons'] == 1) { echo "COUPON AVAILABLE"; echo "<br> <button data-toggle='modal' data-target='#coupon' class='btn btn-xl'>Coupon Details</button>"; } else { echo "NO COUPON AVAILABLE"; } ?></b></p>
                                 
                                 
                             
                                  <p><label>Share this deal:</label>
                                 <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://www.discountsdekho.com/deal/<?php echo preg_replace('/[\s%]+/','-',$dealData['title']).'-'.$dealData['id'] ?>" target="_blank"><i class="fa fa-facebook" style="border-radius: 100%; margin: 0.15em; background: #3B5998; color: #FFFFFF; font-size: 2em; padding: 10px 15px;"></i></a>

                                  <a class="twitter" href="https://twitter.com/intent/tweet?url=http://www.discountsdekho.com/deal/<?php echo preg_replace('/[\s%]+/','-',$dealData['title']).'-'.$dealData['id'] ?>" target="_blank"><i class="fa fa-twitter" style="border-radius: 100%; margin: 0.15em; background: #4099FF; color: #FFFFFF; font-size: 2em; padding: 10px;"></i></a>
<i class="fa fa-commenting"><a href="#review"><label>Write a review</label></a></i></p>
                                    <hr style="border-width: 2px;">
                                 <p><label>Offer Start's On: </label> <?php echo $dealData['start_date'] ?></p>
                                  <p><label>Offer End's On: </label> <?php echo $dealData['end_date'] ?></p>
                                     
                              
                           </div>


 <div class="col-md-2">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DiscountsDekho -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:400px"
     data-ad-client="ca-pub-9437348672435268"
     data-ad-slot="2725844433"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
      <?php if(empty($dealData['malls'])) { echo "<p>Offer not valid in any malls</p>";} else { ?>
      <?php foreach ($dealData['malls'] as $key => $value) {?>
          <p><?php echo ($key+1).'. '.$value ?></p>
        <?php }} ?>
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
        <h3 style="color:#C80237">RELATED OFFERS</h3>
        <?php if (count($categorydeals) > 0){
         
            $i = 0;
            foreach ($categorydeals as $key => $value) {
            if($i == 4){
                break;
            }
           
          
            if($value['id']!=$dealData['id']){
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
        <?php }
      }}
     
      if ($i==0){

        echo "No relevant offers found";
      }
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
                                               <p><strong>Please sign in to DiscountsDekho to get this deal.</strong>
                                                <button class="btn" data-toggle="modal" data-target="#myModal">LoginNow</button> 
                                               </p>
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
