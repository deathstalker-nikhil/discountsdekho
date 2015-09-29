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
                    <a href="/user_profile" class="list-group-item active"><i class="fa fa-user"> Profile</i></a>
                    <a href="/user_change_password" class="list-group-item"><i class="fa fa-gears"> Change Password</i></a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <form>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="Sheetal Arora" disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sex</label>
                        <select class="form-control" disabled>
                            <option>Male</option>
                            <option selected>Female</option>
                            <option>Prefer not to say</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" value="30/09/1990" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" value="New Delhi">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" value="8971535246">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-Mail Address</label>
                        <input type="text" class="form-control" value="sheetalarora@gmail.com">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn" style="background: #C80237; color: #fff; float: right;">Update Profile</button>
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
