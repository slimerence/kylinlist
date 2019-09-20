$(function(){
    let zoomDom = $("#exzoom");
    if(zoomDom.length>0){
        zoomDom.exzoom({
            autoPlay: false,
        });
        zoomDom.removeClass('hidden');
    }
});
