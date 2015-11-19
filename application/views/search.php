<!DOCTYPE html>
<?=$head?>
    <div class="container">
        <div class="row">
            <p style="font-weight: 700; font-size: 24px;">Showing search results <label style="color:#C80237"><?php ($query)?'for '.$query:''; ?></label></p>
            <div class="col-lg-3">
                <h4 style="text-align: center;">FILTER BY</h4>
                <div class="panel-group category-products" id="accordian">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                                Locations
                                        </h4>
                                    </div>
                                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;" id="locationsList">
                                                <?php foreach ($regions as $key => $value) {
                                                    if($value['region'] == $this->input->cookie('region')){
                                                        $value['areas'] = json_decode($value['areas']);
                                                        foreach ($value['areas'] as $key2 => $value2) {?>
                                                        <li style="list-style: none">
                                                            <div class="checkbox">
                                                                <label>
                                                                  <input type="checkbox" value="<?=$value2?>" onclick="getFilteredDealsFromSearch()" <?=(in_array($value2,$city))?'checked':''?>> <?=$value2?>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    <?php }
                                                    }
                                                }?>      
                                            </ul>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">  
                                                Categories
                                        </h4>
                                    </div>
                                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;" id="categoriesList">
                                                <?php foreach ($subCategory as $key => $value) {?>
                                                   <li style="list-style: none">
                                                      <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" value="<?=$key?>" onclick="getFilteredDealsFromSearch()" <?=(in_array($key,$category))?'checked':''?>> <?=$key;?>
                                                        </label>
                                                      </div>
                                                    </li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                                Malls
                                        </h4>
                                    </div>
                                        <div class="panel-body" style="overflow-y: scroll; height:208px;">
                                           <form> <input type="text" class="form-control" placeholder="Malls in Delhi NCR"></form>
                                           <br>
                                           <ul style="padding: 0px; margin: 0px;" id="mallsList">
                                                <?php foreach ($malls as $key => $value) {?>
                                                <li style="list-style: none">
                                                  <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox" value="<?=$value['name']?>" onclick="getFilteredDealsFromSearch()"> <?=$value['name'];?>
                                                    </label>
                                                  </div>
                                                </li>
                                                <?php } ?> 
                                            </ul>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">     
                                                Coupons
                                        </h4>
                                    </div>
                                        <div class="panel-body">
                                            <ul style="padding: 0px; margin: 0px;">
                                              <div class="checkbox">
                                                <label>
                                                  <input type="checkbox" id="dealsWithCoupons" onclick="getFilteredDealsFromSearch()"> Offers with coupons
                                                </label>
                                              </div>  
                                            </ul>
                                        </div>
                                </div>
                            </div>
                    </div>
            <div class="col-lg-9 dealContainer">
            <?php 
                if(!$deals){
                    echo '<h2>No results found</h2>';
                }else
            foreach ($deals as $key => $value) {
             $value['images']=json_decode($value['images'],true);?>
             <div class="col-md-4">
                <div class="dealBox">
                    <div class="heading">
                        <h2><?php echo $value['brand']; ?></h2>
                    </div>
                    <div class="body">
                        <div class="img">
                            <img src="<?php echo ($value['images']['Image1'] != '')?$value['images']['Image1']:'//:0'; ?>">
                        </div>
                        <div class="details">
                            <div class="detailHead">
                                <p><strong><?php echo $value['title']; ?></strong></p>
                            </div>
                            <div class="detailBody">
                                <p><strong>Offer Starts on:</strong> <span><?php echo date('d-F-Y',strtotime($value['start_date'])) ?></span></p>
                                <p><strong>Offer Ends on:</strong> <span><?php if ($value['active']==1){ ?><?php if($value['end_date'] != '0000-00-00') echo date('d-F-Y',strtotime($value['end_date']));else echo "Limited period offer"; ?><?php } else { echo "Offer Expired";} ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="viewButton">
                        <a href="/deal/<?php echo preg_replace('/[\s%&]+/','-',$value['title']).'-'.$value['id'] ?>">View Deal</a>
                    </div>
                </div>
            </div>
                   
          <?php }?>
            </div>
        </div>
    </div>
    <input type="hidden" id="region" value="<?=$region?>">
    <input type="hidden" id="query" value="<?=$query?>">
    <?=$foot?>
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/assets/js/classie.js"></script>
    <script src="/assets/js/cbpAnimatedHeader.js"></script>
    <script src="/assets/js/jqBootstrapValidation.js"></script>
    <script src="/assets/js/contact_me.js"></script>
    <script src="/assets/js/agency.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>
</html>
