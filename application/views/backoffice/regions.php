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
        <?= $head; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Regions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Regions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Region</th>
                                            <th>Sub-Regions</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($regions as $key => $value) { ?>
                                        <tr>
                                            <td><?= $value['region'] ?></td>
                                            <td><?= implode(',', json_decode($value['areas'])) ?></td>
                                            <td><a href="javascript:" class="btn btn-info edit" data='<?= json_encode(array($value['id'],$value['region'],implode('#', json_decode($value['areas'])))); ?>'>Edit</a></td>
                                            <td><a href="javascript:" class="btn btn-danger delete" data-id="<?= $value['id']?>">Delete</a></td>
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
            
          <button class="btn btn-primary btn-lg add" data-toggle="modal" data-target="#myModal"> Add Region </button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="/backoffice/addRegion" method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Region</h4>
                                        </div>
                                        <div class="modal-body">
                                           <div class="form-group">
                                            <label>Region Name</label>
                                            <input type="text" class="form-control" name="regionName" required>
                                           </div>
                                          <div class="form-group">
                                            <label>Sub-Regions</label>
                                            <textarea name="subRegions" rows="6" class="form-control" placeholder="region1#region2" required></textarea>
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                                            <input type="hidden" name="update" value="0">
                                            <input type="hidden" name="id" value="">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Go</button>
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
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
            $(document).on('click','.delete',function(){
                id = $(this).attr('data-id');
                if(!confirm('Sure to delete ?')) {return;}
                window.location.href = '/backoffice/delete/regions/'+id;
            });
            $(document).on('click','.edit',function(){
                data = $.parseJSON($(this).attr('data'));
                console.log(data);
                id = data[0];
                region = data[1];
                areas = data[2];
                $('#myModal').find('input[name="regionName"]').val(region);
                $('#myModal').find('textarea[name="subRegions"]').text(areas);
                $('#myModal').find('input[name="id"]').val(id);
                $('#myModal').find('input[name="update"]').val(1);
                $('#myModal').modal('show');
            });
            $(document).on('click','.add',function(){
                $('#myModal').find('input[name="regionName"]').val('');
                $('#myModal').find('textarea[name="subRegions"]').text('');
                $('#myModal').find('input[name="id"]').val('');
                $('#myModal').find('input[name="update"]').val(0);                
            });
        });
    </script>
</body>
</html>
