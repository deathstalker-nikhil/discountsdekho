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