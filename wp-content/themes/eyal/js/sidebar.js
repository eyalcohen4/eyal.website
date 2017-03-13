( function( $ ) {

  $( document ).ready( function () {


    $( '#sidebar-close' ).on( 'click', function () {
      $( '.sidebar' ).addClass('sidebar--close');
    });

    $( '#sidebar-open' ).on( 'click', function () {
      $( '.sidebar' ).removeClass('sidebar--close');
    });

  });


})( jQuery );
