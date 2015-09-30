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
                <form>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Deal Title</label>
                        <select class="form-control">
                            <option>Get off of INR 500 on purchase of 3 or more apparels</option>
                            <option>Get 15% off. Terms and Conditions Apply</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Coupon Type</label>
                        <select class="form-control" nmae="couponType" id="couponType">
                            <option value="variable">Variable</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                </div>
                <div id="couponCode" class="col-md-6" style="display:none">
                    <div class="form-group">
                        <label>Coupon Code</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Coupon Details</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                
               

                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn" style="background: #C80237; color: #fff; float: right;">Add Coupon</button>
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
