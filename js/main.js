function addClassDelay(classParent, classChild, classAnimation, delay) {
    var i = 0;
    var count = $(classParent + ' ' + classChild).length;
    var myInterval = setInterval(function () {
        $(classParent + ' ' + classChild).eq(i).addClass(classAnimation);
        if (i == count) {
            clearInterval(myInterval);
        }
        i++;
    }, delay);

}

$(document).ready(function () {
    $("#menu").click(function (e) {
        e.preventDefault();
        $(this).parent().parent().next().toggleClass("animation");
        $(this).toggleClass('open');
    });

    addClassDelay("#nav-primary", "li", "animated fadeInLeft", 250);

    $(".ver-mas").click(function (e) {
        e.preventDefault();
        $(this).next().children().show();
    });

    /*
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 15,
        asNavFor: '#slider',
        directionNav: false
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });
*/

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        start: function (slider) {
            $(".paginacion-flexslider li").removeClass("active");
            $(".paginacion-flexslider li").eq(slider.currentSlide).addClass('active');
            var $title = $('.dropy-title').find('span');
            $title.html($('.paginacion-flexslider li.active').find('a').html());
        },
        after: function (slider) {
            $(".paginacion-flexslider li").removeClass("active");
            $(".paginacion-flexslider li").eq(slider.currentSlide).addClass('active');
            var $title = $('.dropy-title').find('span');
            $title.html($('.paginacion-flexslider li.active').find('a').html());
        }
    });

    $(".paginacion-flexslider a").click(function (e) {
        e.preventDefault();
        $('.paginacion-flexslider li').removeClass("active");
        $(this).parent().addClass('active');
        $('.flexslider').flexslider($(this).parent().index());
    });

    $('#patrimonio-slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        start: function (slider) {
            $(".paginacion li").removeClass("active");
            $(".paginacion li").eq(slider.currentSlide).addClass('active');
        },
        after: function (slider) {
            $(".paginacion li").removeClass("active");
            $(".paginacion li").eq(slider.currentSlide).addClass('active');
        }
    });

    $(".paginacion div>a").last().click(function (e) {
        e.preventDefault();
        $('#patrimonio-slider').flexslider('next');
    });
    
    $(".paginacion div>a").first().click(function (e) {
        e.preventDefault();
        $('#patrimonio-slider').flexslider('prev');
    });
    
    $(".paginacion ul li>a").click(function (e) {
        e.preventDefault();
        $('.paginacion ul li').removeClass('active');
        $(this).parent().addClass('active');
        $('#patrimonio-slider').flexslider($(this).parent().index());
    });
    
    dropy.init();

});

// EMISIONES MOBILE SELECT
var dropy = {
  $dropys: null,
  openClass: 'open',
  selectClass: 'selected',
  init: function(){
    var self = this;

    self.$dropys = $('.dropy');
    self.eventHandler();
  },
  eventHandler: function(){
    var self = this;

    self.$dropys.find('.dropy-title').click(function(){
      self.$dropys.removeClass(self.openClass);
      $(this).parents('.dropy').addClass(self.openClass);
    });

    self.$dropys.find('.dropy-content ul li a').click(function(){
      var $that = $(this);
      var $dropy = $that.parents('.dropy');
      var $input = $dropy.find('input');
      var $title = $(this).parents('.dropy').find('.dropy-title span');

      $dropy.find('.dropy-content a').each(function(){
        $(this).removeClass(self.selectClass);
      });

      $title.html($that.html());
      $input.val($that.attr('data-value')).trigger('change');

      if($that.hasClass('dropy-header')){
        $title.removeClass(self.selectClass);
        $title.html($title.attr('data-title'));
      }
      else{
        $title.addClass(self.selectClass);
        $that.addClass(self.selectClass);
      }

      $dropy.removeClass(self.openClass);
    });

    $(document).bind('click', function(e){
        if (! $(e.target).parents().hasClass('dropy')){ self.$dropys.removeClass(self.openClass); }
    });
  }
    
};
