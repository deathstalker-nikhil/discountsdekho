  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Backoffice</title>
    <link href="/assets/backoffice/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/backoffice/css/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/assets/backoffice/css/timeline.css" rel="stylesheet">
    <link href="/assets/backoffice/css/backoffice/sb-admin-2.css" rel="stylesheet">
    <link href="/assets/backoffice/css/morrisjs/morris.css" rel="stylesheet">
    <link href="/assets/backoffice/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/backoffice/css/backoffice/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/assets/backoffice/css/backoffice/dataTables.responsive.css" rel="stylesheet">
      <script src="/assets/backoffice/js/jquery.min.js"></script>
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
  </head>
  <body>
    <div id="wrapper">
      <?php echo $head; ?>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Deals</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Active Deals
              </div>
              <div class="panel-body">
                <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Brand-Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($deals as $key => $value) { ?>
                      <tr class="odd gradeX">
                        <td><?php echo $value['title']; ?></td>
                        <td><?php echo $value['brand']; ?></td>
                        <td><a href="/backoffice/editDeals/<?php echo $value['id'] ?>" title="Edit" class="btn btn-default">Edit</a></td>
                        <td><a href="/backoffice/delete/deals/<?php echo $value['id'] ?>" title="Delete" class="btn btn-default delete">Delete</a></td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Deal</button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <form action="/backoffice/saveDeal" method="post" enctype="multipart/form-data">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Add a New Deal</h4>
                </div>
                <div class="modal-body">
                 <div class="form-group">
                  <label>Deal Title</label>
                  <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                  <label>Deal Category</label>
                  <select type="text" class="form-control" name="category" required>
                  <?php foreach ($categoryData as $key => $value) {?>
                    <option data-data='<?php echo json_encode($value) ?>'><?php echo $key ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Deal Subcategory</label>
                  <select class="form-control" name="subcategory[]" required multiple>
                  </select>
                </div>
                <div class="form-group">
                  <label>Brand</label>
                  <input type="text" class="form-control" name="brand">
                </div>
                <div class="form-group">
                  <label for="brandDetails">Brand Details</label>
                  <textarea class="form-control" name="brandDetails" id="brandDetails"></textarea>
                </div>
                <div class="form-group">
                  <label>Region</label>
                  <select class="form-control" name="region" required>
                    <?php foreach ($regions as $key => $value) { ?>
                      <option data-areas='<?= $value['areas'] ?>'><?= $value['region']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Cities, where deal is active</label>
                  <select class="form-control" multiple name="activeCities[]" required>
   
                  </select>
                </div>
                <div class="form-group">
                  <label>Deal Details</label>
                  <textarea class="form-control" name="dealDetails" id="dealDetails" required></textarea>
                </div>
                <div class="form-group">
                  <label>Deal Locations</label>
                  <textarea type="text" class="form-control" name="dealLocations" required></textarea>
                </div>
              
                <div class="form-group">
                  <label>Start Date</label>
                  <input type="date" class="form-control" name="startDate" required>
                </div>
                <div class="form-group">
                  <label>End Date</label>
                  <input type="date" class="form-control" name="endDate">
                </div>
                <div class="form-group">
                  <label>Image 1</label>
                  <input type="file" name="Image1" class="form-control">
                </div>
                <div class="form-group">
                  <label>Image 2</label>
                  <input type="file" name="Image2" class="form-control">
                </div>
                <div class="form-group">
                  <label>Image 3</label>
                  <input type="file" name="Image3" class="form-control">
                </div>
                <div class="form-group">
                  <label>Image 4</label>
                  <input type="file" name="Image4" class="form-control">
                </div>
                <div class="form-group">
                  <label>Image 5</label>
                  <input type="file" name="Image5" class="form-control">
                </div>
             
            <div class="form-group">
               <label>Malls(where offer is active)</label>
    <div style="overflow-y: scroll; height:180px;">
        <input placeholder="Search from listed malls" id="s" type="text" class="form-control"> 
    <ul class="mallList">
        <?php foreach ($malls as $key => $value) {?>
                    <li style="list-style: none;"><input type="checkbox" name="malls[]" value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></li>
                  <?php } ?>
    </ul>
  </div>            <div class="modal-footer">
              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Deal</button>
              </div>
           
          </div>
        </form>
      </div>
    </div>
  </div>
    
  <script src="/assets/backoffice/js/bootstrap.min.js"></script>
  <script src="/assets/backoffice/js/metisMenu/metisMenu.min.js"></script>
  <script src="/assets/backoffice/js/backoffice/sb-admin-2.js"></script>
  <script src="/assets/backoffice/js/backoffice/jquery.dataTables.min.js"></script>
  <script src="/assets/backoffice/js/backoffice/dataTables.bootstrap.min.js"></script>
  <script src="/assets/backoffice/js/ckeditor/ckeditor.js"></script>
  <script>
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
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
      setOptions();
      CKEDITOR.replace('dealDetails');
      CKEDITOR.replace('brandDetails');
      setSubAreas();
    });
    $(document).on('change','select[name="region"]',function(){setSubAreas()});
    $(document).on('click','.delete',function(event){
      if (!confirm("Sure to delete this deal ?")) {
        event.preventDefault();
      }
    });
    $(document).on('change','select[name="category"]',function(){
      setOptions();
    });
  </script>
  </body>
  </html>
