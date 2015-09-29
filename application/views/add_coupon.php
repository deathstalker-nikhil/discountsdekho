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
                    <a href="about.html" class="list-group-item">Deals Added</a>
                    <a href="services.html" class="list-group-item active">Add Deal</a>
                    <a href="contact.html" class="list-group-item">Coupons</a>
                    <a href="contact.html" class="list-group-item">Coupons Issued</a>
                    <a href="contact.html" class="list-group-item">Settings</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <form>
                    <div class="col-md-5">
                    <div class="form-group">
                        <label>Offer Region</label>
                        <select class="form-control">
                            <option>Delhi NCR</option>
                            <option>Pune</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Business Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Business Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Locations</label>
                        <select class="form-control" multiple>
                            <option>Indirapuram, Ghaziabad</option>
                            <option>Sector 18, Noida</option>
                            <option>Vasant Kunj, New Delhi</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Offer Details</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Business Address</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn" style="background: #C80237; color: #fff; float: right;">Submit</button>
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
