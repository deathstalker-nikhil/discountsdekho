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
    </head>
    <body>
        <div id="wrapper">
            <?php echo $head;?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reviews</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Reviews
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Deal</th>
                                                <th>Status</th>
                                                <th>Approve</th>
                                                <th>Decline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($review as $key => $value) { ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $value['user_name']; ?></td>
                                                <td><?php echo $value['deal_id']; ?></td>
                                                <td><?php echo $value['review']; ?></td>
                                                <td><a href="/Backoffice/approveReview/<?php echo $value['deal_id'] ?>/<?php echo $value['id'] ?>" class="btn btn-default">Approve</a></td>
                                                 <td><a href="/Backoffice/delete/review/<?php echo $value['id'] ?>" title="Delete" class="btn btn-danger delete">Decline</a></td>
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
               
            </div>

        </div>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
        <script src="/assets/js/jquery.dataTables.min.js"></script>
        <script src="/assets/js/dataTables.bootstrap.min.js"></script>
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
