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
                    <a href="/merchant_offers_added" class="list-group-item active">Offers Added</a>
                    <a href="/merchant_add_offer" class="list-group-item">Add Offer</a>
                    <a href="/merchant_add_coupon" class="list-group-item">Add New Coupon</a>
                    <a href="/merchant_coupons_issued" class="list-group-item">Coupons Issued</a>
                       <a href="/users_with_coupons" class="list-group-item">Users With Coupons</a>
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
                                            <th>Offer ID</th>
                                            <th>Offer Title</th>
                                            <th>Offer Expiry</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php foreach ($deals_by_merchant as $key => $value) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value['id']; ?></td>
                                            <td><?php echo $value['title']; ?></td>
                                            <td><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?></td>
                                            <td><a target="_blank" href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>" class="btn">View Offer</a></td>
                                            <td><a href="/Home/delete/deals/<?php echo $value['id'] ?>" title="Delete" class="btn btn-default delete">Delete</a></td>
                                          
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

    <script type="text/javascript">
     $(document).on('click','.delete',function(event){
      if (!confirm("Sure to delete this deal ?")) {
        event.preventDefault();
      }
    });
    </script>

</body>

</html>
