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
    <!-- DataTables CSS -->
    <link href="/assets/backoffice/css/backoffice/dataTables.bootstrap.css" rel="stylesheet">


    <link href="/assets/backoffice/css/backoffice/dataTables.responsive.css" rel="stylesheet">
 

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
echo $head;
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Subcategories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Subcategories
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sub-Category</th>
                                            <th>Category</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($subcategory as $key => $value) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value['subcategory']; ?></td>
                                            <td><?php echo $value['category']; ?></td>
                                            <td><a href="/backoffice/delete/subcategory/<?php echo $value['id'] ?>" title="Delete" class="btn btn-default delete">Delete</a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                Add Subcategory
                            </button>
          
          
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <form action="/backoffice/addSubcategory" method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add a New Subcategory</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                          <div class="form-group">
                                            <label>Subcategory Name</label>
                                            <input type="text" class="form-control" name="name">
                                           </div>
                                          <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                              <option value="Apparels">Apparels</option>
                                              <option value="Beauty and Grooming">Beauty and Grooming</option>
                                              <option value="Fitness and Sports">Fitness and Sports</option>
                                              <option value="Home and Living">Home and Living</option>
                                              <option value="Miscellaneous">Miscellaneous</option>
                                              <option value="Festive Offers">Festive Offers</option>
                                            </select>
                                           </div>
                                          
                                        </div>
                                      
                                      
                                        <div class="modal-footer">
                                          <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Subcategory</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                           </form>
                            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/assets/backoffice/js/jquery.min.js"></script>
    <script src="/assets/backoffice/js/bootstrap.min.js"></script>
    <script src="/assets/backoffice/js/metisMenu/metisMenu.min.js"></script>
    <script src="/assets/backoffice/js/backoffice/sb-admin-2.js"></script>
  
  
    <script src="/assets/backoffice/js/backoffice/jquery.dataTables.min.js"></script>
    <script src="/assets/backoffice/js/backoffice/dataTables.bootstrap.min.js"></script>

 
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<script>
    $(document).on('click','.delete',function(event){
    if (!confirm("Sure to delete this subcategory ?")) {
      event.preventDefault();
    }
  });
  </script>
</body>

</html>
