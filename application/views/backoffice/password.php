<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Backoffice</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/assets/css/timeline.css" rel="stylesheet">
    <link href="/assets/css/backoffice/sb-admin-2.css" rel="stylesheet">
    <link href="/assets/css/morrisjs/morris.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="/assets/css/backoffice/dataTables.bootstrap.css" rel="stylesheet">


    <link href="/assets/css/backoffice/dataTables.responsive.css" rel="stylesheet">
 

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
                    <h1 class="page-header">Change Password</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Password Change
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/backoffice/changePassword" method="post">
                              <div class="form-group">
                                <label>Current Password</label>
                              <input type="password" class="form-control" name="cpass">
                              </div>
                              <div class="form-group">
                                <label>New Password</label>
                              <input type="password" class="form-control" name="npass">
                              </div>
                              <div class="form-group">
                                <label>Re-type New Password</label>
                              <input type="password" class="form-control" name="conpass">
                              </div>
                              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                              <button type="submit" class="btn btn-primary">Change Password</button>
                            </form>
                           <font color="red"> <?php echo $message; ?>  </font>
                       
                          
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="/assets/js/backoffice/sb-admin-2.js"></script>
  
  
    <script src="/assets/js/backoffice/jquery.dataTables.min.js"></script>
    <script src="/assets/js/backoffice/dataTables.bootstrap.min.js"></script>

 
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
