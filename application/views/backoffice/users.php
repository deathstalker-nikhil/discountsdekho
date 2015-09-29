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
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registered Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>E-Mail</th>
                                            <th>Mobile</th>
                                            <th>Date of Birth</th>
                                            <th>Sex</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($users as $key => $value) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['mobile']; ?></td>
                                            <td><?php echo $value['dob']; ?></td>
                                            <td><?php echo $value['sex']; ?></td>
                                            <td><?php echo $value['city']; ?></td>
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

</body>

</html>
