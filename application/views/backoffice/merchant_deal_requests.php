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
            <h1 class="page-header">Merchant Offer Requests</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
               Merchant Deal Requests
              </div>
              <div class="panel-body">
                <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                         <th>Offer ID</th>
                        <th>Title</th>
                        <th>Merchant Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($deal_requests as $key => $value) { ?>
                      <tr class="odd gradeX">
                         <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['title']; ?></td>
                        <td><a target="_blank" href="/deal/<?php echo preg_replace('/\s+/','-',$value['title']).'-'.$value['id'] ?>" class="btn btn-primary">View Deal</a></td>
                        <td><a href="/Backoffice/approveOffer/<?php echo $value['id'] ?>" class="btn btn-success">Approve</a></td>
                        <td><a href="/backoffice/delete/deals/<?php echo $value['id'] ?>" title="Delete" class="btn btn-danger">Decline</a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
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
