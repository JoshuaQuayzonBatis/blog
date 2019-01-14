$.noConflict();

$(function(){
    $("[data-toggle=tooltip]").hover(function(){
        $(this).tooltip();
    })
})