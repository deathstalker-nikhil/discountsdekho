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
	var data = {'locations':locations,'malls':malls,'category':$('#category').val(),'subcategory':$('#subcategory').val()};
	$.ajax({
	  url: "/home/getFilteredDeals",
	  method: "GET",
	  data:data
	})
	.done(function( msg ) {
	  console.log(msg);
	})
	.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});	
}