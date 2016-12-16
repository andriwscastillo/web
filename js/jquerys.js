    $(document).ready(function() {
  var menu = $('#menu');
  var contenedor = $('#menu-contenedor');
  var cont_offset = contenedor.offset();
  // Cada vez que se haga scroll en la página
  // haremos un chequeo del estado del menú
  // y lo vamos a alternar entre 'fixed' y 'static'.

  $(window).on('scroll', function() {
  	 //alert($(window).scrollTop());
    if($(window).scrollTop() > cont_offset.top) {
      menu.addClass('menu-fijo');
    } else {
      menu.removeClass('menu-fijo');
    }
  });
});

  $(document).ready(function(){
    $('h2').append('<a href="#top" class="gototop">Subir</a>');
    linkInterno = $('a[href^="#"]');
    linkInterno.on('click',function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('html, body').animate({ scrollTop : $( href ).offset().top }, 'slow');
    });
});
  $(document).ready(function(){
    $('h2').append('<a href="#top" class="gototop">Subir</a>');
    linkInterno = $('a[href^="#"]');
    linkInterno.on('click',function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('html, body').animate({ scrollTop : $( href ).offset().top }, 'slow', 'easeInOutExpo');
    });
});
  

