function getRegion(){
    return document.cookie.replace(/(?:(?:^|.*;\s*)region\s*\=\s*([^;]*).*$)|^.*$/, "$1");
}
function saveRegion(data){
    document.cookie = "region="+data+";path=/";
}
$(document).ready(function(){
    $(document).on('change','select[name="location"]',function(){
        region = $(this).val();
        saveRegion(region);
        window.location.reload();
    });
});

function getFilteredDeals(){
	var locations = [];
	var malls = [];
	$('#locationsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			locations.push($(this).find('input[type="checkbox"]').val());
		}
	});
	$('#mallsList li').each(function(index){
		if($(this).find('input[type="checkbox"]').is(':checked')){
			malls.push($(this).find('input[type="checkbox"]').val());
		}		
	});
	var data = {'city':locations,'malls':malls,'category':$('#category').val(),'subcategory':$('#subcategory').val()};
	$.ajax({
	  url: "/home/getFilteredDeals",
	  method: "GET",
	  data:data
	})
	.done(function( data ) {
	  if(data != ''){
	  	$('.dealContainer').html(data);
	  }else{
	  	$('.dealContainer').html('<h2>No result</h2>');
	  }
	})
	.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});	
}