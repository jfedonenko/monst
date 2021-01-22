$(function () {
  // Preloader
  var $preloader = $('#page-preloader'),
    $spinner = $preloader.find('.spinner');
  $spinner.fadeOut();
  $preloader.delay(350).fadeOut('slow');

  //Передача инфо о кнопке в модальное окно
  $('button.btn-lg').click(function () {
    var parent = $(this).attr('data-parent');
    var modal = $(this).attr('data-target')
    $(modal).find('input[name=target]').val(parent);
  })



  // $(document).ready(function(){
    // $('.sliders').slick({
    //   infinite: true,
    //   slidesToShow: 3,
    //   slidesToScroll: 3,
    //   dots: true,
     
    // });

  $('.sliders').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
    
});



 