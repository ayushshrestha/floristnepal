$(document).ready(function(){
    
  // $('.meanmenu-reveal').on('click', function(e){
  //   e.preventDefault();
  //   $('body').toggleClass('body-freeze');
  // })
  $('.modal').modal('show');
  $('.close').on('click', function() {
    $('.modal').removeClass('show');
  });

  function ContentTop() {
      var HeaderHeight = $('#masthead').outerHeight();
      $('#primary').css("margin-top", HeaderHeight);
  }
  $(window).on('load resize', function() {
      ContentTop();
  });
  // header space in content ends here 

  var $searchForm = $('.block-search_form')
  $('.trigger').on('click', function() {
    $searchForm.toggleClass("block-search_show");
  });
  $('.block-search_form .close').on('click', function() {
    $searchForm.removeClass("block-search_show");
  });
  // search block ends here 

  $('.slick-fade_hero').slick();
  
  // $('.slick-slide').slick();
 
  $('.slick-slide_promos').slick({
    infinite: true,
    speed: 1500
  });


  // slider ends here


  $('.wc-block-product-categories-list').slick({
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 568,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  

  $('.menu-main-menu-container').meanmenu({
    meanScreenWidth: "767",
    meanMenuOpen: "<span></span><span></span><span></span>" 
  });
  // mean menu mobile js ends here

});