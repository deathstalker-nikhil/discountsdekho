 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $( document ).ready(function() {
    $('#s').keyup(function(){
     var valThis = $(this).val().toLowerCase();
      $('.mallList>li').each(function(){
       var text = $(this).text().toLowerCase();
          (text.indexOf(valThis) == 0) ? $(this).show() : $(this).hide();            
     });
    });
  });
  </script>
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
                       <a href="/users_with_coupons" class="list-group-item">Users With Coupons</a>
                    <a href="/merchant_settings" class="list-group-item">Settings</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>ADD OFFER</h3>
                <form action="/home/saveDeal" method="post" enctype="multipart/form-data">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Offer Region</label>
                        <select class="form-control" name="region">
                            <?php foreach ($regions as $key => $value) { ?>
                      <option data-areas='<?= $value['areas'] ?>'><?= $value['region']; ?></option>
                    <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="brand" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Brand Details</label>
                        <textarea class="form-control" name="brandDetails" id="brandDetails"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <?php foreach ($categoryData as $key => $value) {?>
                    <option data-data='<?php echo json_encode($value) ?>'><?php echo $key ?></option>
                  <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Sub-Category</label>
                        <select class="form-control" name="subcategory[]" multiple>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-group">
                  <label>Areas, where deal is active</label>
                  <select class="form-control" multiple name="activeCities[]" required>
    
                  </select>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Offer Start Date</label>
                        <input type="date" name="startDate" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Expiration Date</label>
                        <input type="date" name="endDate" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Details</label>
                        <textarea name="dealDetails" id="dealDetails" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Locations</label>
                        <textarea class="form-control" name="dealLocations"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                       
                        
<label>Malls in your selected Area(s)</label>
                                        <div style="overflow-y: scroll; height:180px;">
        <input placeholder="Search from listed malls" id="s" type="text" class="form-control"> 
    <ul class="mallList">
        <?php foreach ($malls as $key => $value) {?>
                    <li style="list-style: none;"><input type="checkbox" name="malls[]" value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></li>
                  <?php } ?>
    </ul>
  </div>      
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 1</label>
                        <input type="file" name="Image1" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 2</label>
                        <input type="file" name="Image2" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 3</label>
                        <input type="file" name="Image3" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 4</label>
                        <input type="file" name="Image4" class="form-control">
                    </div>
                </div>
                   <div class="col-md-4">
                    <div class="form-group">
                        <label>Image 5</label>
                        <input type="file" name="Image5" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="merchant_id" value="<?php echo $_SESSION['user_data']['merchant_id']; ?>">
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button class="btn" type="submit" style="background: #C80237; color: #fff; float: right;">Submit</button>
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
   function setOptions() 
    {
      subcategory = $.parseJSON($('select[name="category"] option:selected').attr('data-data'));
      html = '';
      $.each(subcategory,function(key,value){
        html += '<option>'+value+'</opiton>';
      });
      $('select[name="subcategory[]"]').html(html);
    }
   
    function setSubAreas()
    {
      areas = $('select[name="region"] option:selected').attr('data-areas');
      if (areas == '') {return}
      areas = $.parseJSON(areas);
      html = '';
      $.each(areas,function(index,value){
        html += '<option>'+value+'</opiton>';
      });
      $('select[name="activeCities[]"]').html(html);
    }
    $(document).on('change','select[name="category"]',function(){
      setOptions();
    });
      $(document).on('change','select[name="region"]',function(){setSubAreas()});
    $(document).ready(function(){
        setOptions();
        setSubAreas();
    });
    </script>

</body>

</html>
