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
                    <a href="/merchant_add_offer" class="list-group-item active">Add Offer</a>
                    <a href="/merchant_add_coupon" class="list-group-item">Add New Coupon</a>
                    <a href="/merchant_coupons_issued" class="list-group-item">Coupons Issued</a>
                    <a href="/merchant_settings" class="list-group-item">Settings</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>ADD OFFER</h3>
                <form>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Offer Region</label>
                        <select class="form-control">
                            <option>Delhi NCR</option>
                            <option>Pune</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Brand Details</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Title</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                            <option>Apparels</option>
                            <option>Electronics</option>
                            <option>Home and Living</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" multiple>
                            <option>Men Wear</option>
                            <option>Women Wear</option>
                            <option>Kids Wear</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Offer Start Date</label>
                        <input type="date" class="form-control">
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
                        <label>Offer Details</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Locations</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Areas</label>
                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;North Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;South Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;East Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;West Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Gurgaon</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Noida</li>
                                               
                                            </ul>
                                        </div>
                        <label>Locations in your selected Area(s)</label>
                         <div class="panel-body" style="overflow-y: scroll; height:208px;">
                                           <form> <input type="text" class="form-control" placeholder="Locations"></form>
                                           <br>
                                           <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Indirapuram, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sector-18, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Lajpat Nagar, Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sarojini Nagar, Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Indirapuram, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sector-18, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Lajpat Nagar, Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sarojini Nagar, Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Indirapuram, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sector-18, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Lajpat Nagar, Delhi</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Sarojini Nagar, Delhi</li>
                                                
                                            </ul>
                                        </div>
                                        <br>
<label>Malls in your selected Area(s)</label>
                                         <div class="panel-body" style="overflow-y: scroll; height:208px;">
                                           <form> <input type="text" class="form-control" placeholder="Malls"></form>
                                           <br>
                                           <ul style="padding: 0px; margin: 0px;">
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Aditya City Center, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shipra Mall, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Great India Palace, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Wave, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Spice Mall, Noida</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shopprix Mall, Ghaziabad</li>
                                                <li style="list-style: none"><input type="checkbox">&nbsp;Shopprix Mall, Noida</li>
                                               
                                            </ul>
                                        </div>            
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 1</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 2</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 3</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 4</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 5</label>
                        <input type="file" class="form-control">
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
