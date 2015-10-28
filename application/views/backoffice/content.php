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
                    <h1 class="page-header">Website Content</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Us
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/backoffice/updateAbout" method="post">
                              <div class="form-group">
                              
                              <textarea contenteditable="true" class="form-control" name="about" id="about"><?php echo $about['data']; ?></textarea>
                             
                              </div>
                               <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                              <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            Privacy Policy
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/backoffice/updatePrivacy" method="post">
                              <div class="form-group">
                              <textarea contenteditable="true" class="form-control" name="privacy" id="privacy"><?php echo $privacy['data']; ?></textarea>
                              </div>
                              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                              <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  
                  
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            Disclaimer
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/backoffice/updateDisclaimer" method="post">
                              <div class="form-group">
                              <textarea contenteditable="true" class="form-control" name="disclaimer" id="disclaimer"><?php echo $disclaimer['data']; ?></textarea>
                              </div>
                              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                              <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                  

                  
            
                  
                  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
<script>
   $(document).ready(function() {
    CKEDITOR.replace('about');
    CKEDITOR.replace('privacy');
    CKEDITOR.replace('disclaimer');
  });
  </script>
    <script src="/assets/backoffice/js/ckeditor/ckeditor.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
