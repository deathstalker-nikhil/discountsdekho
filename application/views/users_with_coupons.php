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
                    <a href="/merchant_add_coupon" class="list-group-item">Add New Coupon</a>
                    <a href="/merchant_coupons_issued" class="list-group-item">Coupons Issued</a>
                    <a href="/users_with_coupons" class="list-group-item active">Users With Coupons</a>
                    <a href="/merchant_settings" class="list-group-item">Settings</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>OFFERS ADDED</h3>
<div class="panel-body">
                 <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Deal ID</th>
                                            <th>Coupon Code</th>
                                            <th>Name</th>
                                            <th>E-Mail</th>
                                            <th>Mobile</th>
                                            <th>Redeem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <?php foreach ($users_with_coupons as $key => $value) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value['deal_id'] ?></td>
                                            <td><?php echo $value['coupon_code']; ?></td>
                                            <td><?php echo $value['userData']['name']; ?></td>
                                            <td><?php echo $value['userData']['email']; ?></td>
                                            <td><?php echo $value['userData']['mobile']; ?></td>
                                            <td><?php if ($value['redeem'] == 1) echo "Redeemed"; else { ?>
                                            <a href="/Home/redeemCoupon/<?php echo $value['id']; ?>" class="btn btn-danger">Redeem</a>
                                           <?php } ?></td>
                                          
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table></div></div>
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

     <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/assets/js/classie.js"></script>
    <script src="/assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/js/jqBootstrapValidation.js"></script>
    <script src="/assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/agency.js"></script>
          <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
