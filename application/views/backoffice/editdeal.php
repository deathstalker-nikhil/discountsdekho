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
    <?php echo $head; ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Edit a Deal</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php echo $dealData['title']; ?>
            </div>
            <div class="panel-body">
              <form action="/backoffice/updateDeal" method="post" enctype="multipart/form-data">
               <div class="form-group">
                <label>Deal Title</label>
                <input type="text" class="form-control" name="title" required value="<?php echo $dealData['title'] ?>">
              </div>
              <div class="form-group">
                <label>Deal Category</label>
                <select type="text" class="form-control" name="category" required>
                <?php foreach ($categoryData as $key => $value) {?>
                  <option data-data='<?php echo json_encode($value) ?>' <?php if($dealData['category'] == $key) echo 'selected'; ?>><?php echo $key ?></option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Deal Subcategory</label>
                <select type="text" class="form-control" name="subcategory[]" required multiple>
                </select>
              </div>
              <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="brand" value="<?php echo $dealData['brand'] ?>">
              </div>
              <div class="form-group">
                <label for="brandDetails">Brand Details</label>
                <textarea class="form-control" name="brandDetails" id="brandDetails" required><?php echo $dealData['brand_details'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Region</label>
                <select class="form-control" name="region" required>
                  <?php foreach ($regions as $key => $value) { ?>
                    <option data-areas='<?= $value['areas'] ?>' <?php echo ($value['region'] == $dealData['region'])? 'selected':''; ?>><?= $value['region']; ?></option>
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
                <textarea class="form-control" name="dealDetails" id="dealDetails" required><?php echo $dealData['details'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Deal Locations</label>
                <textarea type="text" class="form-control" name="dealLocations" required><?php echo $dealData['locations'] ?></textarea>
              </div>
              <div class="form-group">
                <label>Malls(where deal is active)</label>
                <select class="form-control" multiple name="malls[]">
                  <?php foreach ($malls as $key => $value) {?>
                    <option value="<?php echo $value['name'] ?>" <?php if($dealData['malls']!='') if(in_array($value['name'], $dealData['malls'])) echo 'selected'; ?>><?php echo $value['name'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Start Date</label>
                <input type="date" class="form-control" name="startDate" required value="<?php echo $dealData['start_date'] ?>">
              </div>
              <div class="form-group">
                <label>End Date</label>
                <input type="date" class="form-control" name="endDate" value="<?php echo $dealData['end_date'] ?>">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Image 1</label>
                    <input type="file" name="Image1" class="form-control">
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <?php if($dealData['images']['Image1'] != '') {?>
                    <a target="_blank" href="<?php echo $dealData['images']['Image1']; ?>"><img style="width:80px" src="<?php echo $dealData['images']['Image1'] ?>" alt=""></a>
                  <?php } ?>
                  <input type="hidden" name="oldImages[]" value='<?php echo $dealData['images']['Image1'] ?>'>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Image 2</label>
                    <input type="file" name="Image2" class="form-control">
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <?php if($dealData['images']['Image2'] != '') {?>
                    <a href="<?php echo $dealData['images']['Image2']; ?>" target="_blank"><img style="width:80px" src="<?php echo $dealData['images']['Image2'] ?>" alt=""></a>
                  <?php } ?>
                  <input type="hidden" name="oldImages[]" value='<?php echo $dealData['images']['Image2'] ?>'>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Image 3</label>
                    <input type="file" name="Image3" class="form-control">
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <?php if($dealData['images']['Image3'] != '') {?>
                    <a href="<?php echo $dealData['images']['Image3']; ?>" target="_blank"><img style="width:80px" src="<?php echo $dealData['images']['Image3'] ?>" alt=""></a>
                  <?php } ?>
                  <input type="hidden" name="oldImages[]" value='<?php echo $dealData['images']['Image3'] ?>'>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Image 4</label>
                    <input type="file" name="Image4" class="form-control">
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <?php if($dealData['images']['Image4'] != '') {?>
                    <a href="<?php echo $dealData['images']['Image4']; ?>" target="_blank"><img style="width:80px" src="<?php echo $dealData['images']['Image4'] ?>" alt=""></a>
                  <?php } ?>
                  <input type="hidden" name="oldImages[]" value='<?php echo $dealData['images']['Image4'] ?>'>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Image 5</label>
                    <input type="file" name="Image5" class="form-control">
                  </div>                  
                </div>
                <div class="col-sm-6">
                  <?php if($dealData['images']['Image5'] != '') {?>
                    <a href="<?php echo $dealData['images']['Image5']; ?>" target="_blank"><img style="width:80px" src="<?php echo $dealData['images']['Image5'] ?>" alt=""></a>
                  <?php } ?>
                  <input type="hidden" name="oldImages[]" value='<?php echo $dealData['images']['Image5'] ?>'>
                </div>
              </div>
              <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
              <input type="hidden" name="id" value="<?php echo $dealData['id'] ?>">
              <button type="submit" class="btn btn-primary">Save Deal</button>
            </form>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/assets/backoffice/js/jquery.min.js"></script>
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
      html += '<option value="'+value+'">'+value+'</opiton>';
    });
    $('select[name="subcategory[]"]').html(html);
  }
  function setSubAreas()
  {
    areas = $('select[name="region"] option:selected').attr('data-areas');
    selectedAreas = $.parseJSON('<?php echo json_encode($dealData["city"]) ?>');
    if (areas == '') {return}
    areas = $.parseJSON(areas);
    html = '';
    $.each(areas,function(index,value){
      set = '';
      if($.inArray(value,selectedAreas) != -1) {set = 'selected'}
      html += '<option '+set+'>'+value+'</opiton>';
    });
    $('select[name="activeCities[]"]').html(html);
  }
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
    setOptions();
    setSubAreas();
    CKEDITOR.replace('dealDetails');
    CKEDITOR.replace('brandDetails');
    <?php if(is_array($dealData['subcategory'])) {
      foreach ($dealData['subcategory'] as $key => $value) {?>
        $('select[name="subcategory[]"] option[value="<?php echo $value; ?>"]').attr("selected",true); 
    <?php  }
    } 
    else {?>
      $('select[name="subcategory[]"]').val("<?php echo $dealData['subcategory'] ?>");
    <?php } ?>
  });
  $(document).on('change','select[name="region"]',function(){setSubAreas()});
  $(document).on('change','select[name="category"]',function(){setOptions();});
</script>
</body>
</html>
