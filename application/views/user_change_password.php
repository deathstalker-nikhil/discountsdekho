<?php echo $head; ?>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>USER ACCOUNT</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
 <a href="/user_coupons" class="list-group-item"><i class="fa fa-tags"> My Coupons</i></a>
                    <a href="/user_profile" class="list-group-item"><i class="fa fa-user"> Profile</i></a>
                    <a href="/user_change_password" class="list-group-item active"><i class="fa fa-gears"> Change Password</i></a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <form method="post">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="text" name="cpass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="text" name="npass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" name="conpass" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                          <input type="hidden" name="id" value="<?php echo $_SESSION['user_data']['id']; ?>">
                        <button type="submit" name="submit" value="submitted" class="btn" style="background: #C80237; color: #fff; float: right;">Change Password</button>
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

</body>

</html>
