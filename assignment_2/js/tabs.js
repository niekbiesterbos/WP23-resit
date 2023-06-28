$(document).ready(function(){
   
    $('.nav-link').click(function(e){
        e.preventDefault();
        
        $('.nav-link').removeClass('active');
        $('.tab-pane').removeClass('active');
        
        $(this).addClass('active');
        let tab = $(this).attr('href');
        $(tab).addClass('active');
    });
});
