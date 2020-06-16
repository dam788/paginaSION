$(document).on('ready', function () {
/* Bootstrap carrouser */
  $('.carousel').carousel();
/* Menú hamburguesa */
  $('.contenedor').on('click', function () {

    $('.MenuAmburguesa').toggleClass('cruz');
  })
})

/* WOW Animations*/
new WOW().init();



