<?php echo $head; ?>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>MERCHANT ACCOUNT</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                   <a href="/merchant_offers_added" class="list-group-item">Offers Added</a>
                    <a href="/merchant_add_offer" class="list-group-item">Add Offer</a>
                    <a href="/merchant_add_coupon" class="list-group-item active">Add New Coupon</a>
                    <a href="/merchant_coupons_issued" class="list-group-item">Coupons Issued</a>
                    <a href="/merchant_settings" class="list-group-item">Settings</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>ADD COUPON</h3>
                <form method="post" action="/home/addCoupon">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Deal Title</label>
                        <select class="form-control" name="deal_id">
                            <?php foreach ($deals_without_coupons as $key => $value) {?>
                            <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Coupon Type</label>
                        <select class="form-control" name="couponType" id="couponType">
                            <option value="variable">Variable</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                </div>
                <div id="couponCode" class="col-md-6" style="display:none">
                    <div class="form-group">
                        <label>Coupon Code</label>
                        <input type="text" name="coupon_code" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Coupon Details</label>
                        <textarea name="coupon_details" class="form-control"></textarea>
                    </div>
                </div>
                
               

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="merchant_id" value="<?php echo $_SESSION['user_data']['merchant_id']; ?>">
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Coupon</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
</div>
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
     <script type="text/javascript">
$('#couponType').on('change',function(){
    if( $(this).val()==="fixed"){
    $("#couponCode").show()
    }
    else{
    $("#couponCode").hide()
    }
});
                </script>
</body>

</html>
