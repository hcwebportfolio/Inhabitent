
jQuery(document).ready(function( $ ) {

    $(".fa-search").on('click', function(){
        event.preventDefault();
        $("input[type=search]").toggle('slow');
    });

});
