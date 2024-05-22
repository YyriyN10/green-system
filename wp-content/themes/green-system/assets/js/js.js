/*
 * Lazy Load Image
 */

const lazyContent = new LazyLoad({
  use_native: true
});

/**
 * jQuery functions
 */

jQuery(function($) {

  /**
   * Screen height and width
   */

  let windWid = $(window).width();
  let windHei = $(window).height();

  $(window).resize(function () {
    windWid = $(window).width();
    windHei = $(window).height();
  });

  /**
   * Header auto adaptive
   * @type {jQuery|HTMLElement}
   */


  const headerElement = $('.site-header');

  let headerLogoW = headerElement.find('.logo').outerWidth();
  let headerNav = headerElement.find('.header-nav').outerWidth();

  let headerPhone =  0;

  if ( headerElement.find('.header-phone').length ){
    headerPhone =  headerElement.find('.header-phone').outerWidth();
  }

  let headerLang =  0;

  if ( headerElement.find('.lang-wrapper').length ){
    headerLang =  headerElement.find('.lang-wrapper').outerWidth();
  }

  if ( windWid > 1200 ){
    let headerContentW = headerLogoW + headerNav + headerPhone + headerLang + 50;

    if ( headerContentW > 1140 ){
      headerElement.addClass('hide-menu');
    }
  }else if( windWid > 992 &&  windWid < 1200 ){
    let headerContentW = headerLogoW + headerNav + headerPhone + headerLang + 50;

    if ( headerContentW > 720 ){
      headerElement.addClass('hide-menu');
    }
  }

  $(document).scroll(function() {

    let currentScroll = $(this).scrollTop();

    if ( currentScroll > ( windHei / 3) ) {
      $('.home-main-screen .advantages-list').addClass('active');

    } else {
      $('.home-main-screen .advantages-list').removeClass('active');

    }
  });

  /**
   * About us slider
   */

  $('#about-us-slider').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true
  });

  $('.about-us .prev').click(function(e){
      e.preventDefault();

      $('#about-us-slider').slick('slickPrev');
  });

  $('.about-us .next').click(function(e){
      e.preventDefault();

      $('#about-us-slider').slick('slickNext');
  });

  let aboutUsCurrentSlidePic = $('#about-us-slider .slide.slick-current').attr('data-image');

  const aboutUsAllSlides = $('#about-us-slider .slide').length;

  const aboutUsPic = $('.about-us .pic-wrapper img');

  const aboutUsSlideCounter = $('.about-us .slide-counter');

  const aboutUsProgressBar = $('.about-us .slider-progress-bar .progress span');

  aboutUsPic.attr('src', aboutUsCurrentSlidePic);

  if ( aboutUsAllSlides < 10 ){

    aboutUsSlideCounter.find('.all').text('0' + aboutUsAllSlides);
  }else{

    aboutUsSlideCounter.find('.all').text(aboutUsAllSlides);
  }

  const aboutUsProgressBsrStartPosition = 100 / Number(aboutUsAllSlides);

  aboutUsProgressBar.css({'width' : aboutUsProgressBsrStartPosition + '%'});

  $('#about-us-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

    if ( (nextSlide + 1) < 10 ){
      aboutUsSlideCounter.find('.current').text('0' + (nextSlide + 1));
    }else{
      aboutUsSlideCounter.find('.current').text(nextSlide + 1);
    }

    let slideObject = slick['$slides'][nextSlide];

    let arraySlide = $.makeArray(slideObject);

    aboutUsCurrentSlidePic = arraySlide[0]['dataset']['image'];
    aboutUsPic.attr('src', aboutUsCurrentSlidePic);

    aboutUsProgressBar.css({'width' : (aboutUsProgressBsrStartPosition * (nextSlide + 1)) + '%'});

  });

  /**
   * Product and case slider
   */

  if( $('.single-solar_types').length || $('.realized_objects-template').length ){

    const previewsCount = $('#previews-slider .slide').length;

    let previewsSlideToShow = 5;

    if ( previewsCount < 5 ){
      previewsSlideToShow = previewsCount;
    }

    if ( windWid <= 1440 && windWid > 1200 ){

      previewsSlideToShow = 4;

      if ( previewsCount < 4 ){
        previewsSlideToShow = previewsCount;
      }

    }

    if ( windWid <= 1200 && windWid > 992 ){

      previewsSlideToShow = 3;

      if ( previewsCount < 3 ){
        previewsSlideToShow = previewsCount;
      }

    }

    if ( windWid <= 992 && windWid > 767 ){

      previewsSlideToShow = 5;

      if ( previewsCount < 5 ){
        previewsSlideToShow = previewsCount;
      }

    }

    if ( windWid <= 767 && windWid > 575 ){

      previewsSlideToShow = 4;

      if ( previewsCount < 4 ){
        previewsSlideToShow = previewsCount;
      }

    }


    $('#previews-slider').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: previewsSlideToShow,
      slidesToScroll: 1,
      arrows: false,
      vertical: true,
      asNavFor: '#product-slider',
      responsive: [
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 3,
            vertical: false
          }
        }
      ]
    });

    $('#product-slider').slick({
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '#previews-slider'

    });

    $('.product-gallery-wrapper .change-slide').click(function(e){
      e.preventDefault();

      $('#previews-slider, #product-slider').slick('slickNext');
    });

  }

  /**
   * More Projects
   */

  $('#more-projects').on('click', function (e) {

    e.preventDefault();

    const thisBtn = $(this);

    let catId = thisBtn.attr('data-cat-id');
    let currentProjectId = thisBtn.attr('data-current');

    $('.more-projects-wrapper').fadeOut(200);

    let data = {
      action: 'more_projects',
      catId: catId,
      currentProjectId: currentProjectId,
    }

    $.post( green_system_ajax.url, data, function(response) {

      if($.trim(response) !== ''){

        $('#project-list').append(response);
      }
    });

  });

  /**
   * Solar types
   */

  if ( $('.solar-power-plants-types').length ){

    function changePowerPlantsType( catID ){

      let data = {

        action: 'change_power_plant_type',
        catId: catID,

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#power-plants-list').html(response);
        }
      });
    }

    $('.types-list .power-plant:first-child').addClass('active');

    let defaultPowerTypeId = Number($('.types-list .power-plant:first-child').attr('data-cat-id'));

    changePowerPlantsType(defaultPowerTypeId);

    $('.types-list .power-plant').on('click', function (e) {

      e.preventDefault();

      $('.types-list .power-plant.active').removeClass('active');

      let thisType = $(this);

      thisType.addClass('active');

      let currentTypeId = Number(thisType.attr('data-cat-id'));

      changePowerPlantsType( currentTypeId );

    });
  }



  /**
   * Project categories
   */

  if ( $('.our-projects').length ){

    function changeProjectCategory( catID ){

      let data = {

        action: 'change_project_category',
        catId: catID,

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#our-projects-list').html(response);
        }
      });
    }

    $('.our-projects__category-list .our-projects__category:first-child a').addClass('active');

    let defaultCategoryId = Number($('.our-projects__category-list .our-projects__category:first-child a').attr('data-cat-id'));
    let defaultCategoryCount = Number($('.our-projects__category-list .our-projects__category:first-child a').attr('data-all-projects'));

    const moreProjectBtn = $('#more-project');

    if ( defaultCategoryCount > 4 ){

      moreProjectBtn.show(400);
      moreProjectBtn.attr('data-cat-id', defaultCategoryId);

    }else{
      moreProjectBtn.hide(400);
      moreProjectBtn.attr('data-cat-id', '');
    }

    changeProjectCategory( defaultCategoryId );

    $('.our-projects__category-list .our-projects__category a').on('click', function (e) {

      e.preventDefault();

      $('.our-projects__category-list .our-projects__category a.active').removeClass('active');

      let thisCategory = $(this);

      thisCategory.addClass('active');

      let currentCatId = Number(thisCategory.attr('data-cat-id'));
      let countPosts = Number(thisCategory.attr('data-all-projects'));

      changeProjectCategory( currentCatId );

      if ( countPosts > 4 ){

        moreProjectBtn.show(400);
        moreProjectBtn.attr('data-cat-id', currentCatId);

      }else{
        moreProjectBtn.hide(400);
        moreProjectBtn.attr('data-cat-id', '');
      }

    });

    /**
     * Modal video
     */

    const videoModal = $('#videoModal');

    $('.play').on('click', function (e) {

      e.preventDefault();

      let videoSrc = $(this).attr('data-video');

      videoModal.find('video').attr('src', videoSrc);

      videoModal.modal("show");

    });

    videoModal.on('hide.bs.modal', function () {

      videoModal.find('video').attr('src', '');

    });





  }

  // Lazy load

  /*jQuery('.lazy').lazy();*/

  //Fixed Menu

  /*jQuery(document).scroll(function() {

    let y = jQuery(this).scrollTop();

    if (y > 1) {
      jQuery('header').addClass('fixed');
    } else {
      jQuery('header').removeClass('fixed');
    }
  });

  let positionScrolHeader = jQuery(window).scrollTop();

  jQuery(window).scroll(function() {

    let scroll = jQuery(window).scrollTop();

    if(scroll > positionScrolHeader) {

      if ( jQuery('.main-nav.open-menu').length ){
        jQuery('header').addClass('fixed-vis');
      }else{
        jQuery('header').removeClass('fixed-vis');
      }


    } else {
      jQuery('header').addClass('fixed-vis');

    }

    positionScrolHeader = scroll;
  });*/

  //Mob Menu

  /*jQuery('#mob-menu').on('click', function (e) {
    e.preventDefault();

    jQuery(this).toggleClass('active');
    jQuery('header').toggleClass('active-menu');
    jQuery('header nav').toggleClass('open-menu');
    jQuery('html').toggleClass("fixedPosition");

  });*/

  //SCROLL MENU

  /*jQuery('#primary-menu li a').addClass('scroll-to');

  jQuery(document).on('click', '.scroll-to', function (e) {
    e.preventDefault();

    let href = jQuery(this).attr('href');

    jQuery('html, body').animate({
      scrollTop: jQuery(href).offset().top
    }, 1000);

  });*/

  //Смена категории курсов

  /*jQuery('.page-template-template-home .curses-cat-wrapper .cat').on('click', function (e) {
    e.preventDefault();

    jQuery('.page-template-template-home .curses-cat-wrapper .cat').removeClass('active-cat');

    jQuery(this).addClass('active-cat');

    var subCatId = jQuery(this).data('subcatid');

    var allCat = jQuery(this).data('allcat');

    var currentLang = jQuery(this).data('lang');

    var pageCatNavWrapper = jQuery('#mor-curses-dtn-wrap');

    var allCatPosts = Number(jQuery(this).attr('data-allposts'));

    pageCatNavWrapper.attr('data-allposts', allCatPosts);

    var targetAllPosts = Number(pageCatNavWrapper.attr('data-allposts'));

    if ( targetAllPosts <= 6 ){
      pageCatNavWrapper.addClass('d-none');
    }else{
      pageCatNavWrapper.removeClass('d-none');
    }

    let data = {

      action: 'change_curses_category',
      allCat: allCat,
      currentLang: currentLang,
      subCatId: subCatId
    };

    jQuery.post( myajax.url, data, function(response) {

      if(jQuery.trim(response) !== ''){

        jQuery('#curses-list').html(response);
      }
    });

  });*/

  //Вывод больше курсов

  /*if ( jQuery('.page-template-template-home').length ){

    var activeCat = jQuery('.curses-cat-wrapper .cat.active-cat');
    var allPosts = Number(activeCat.attr('data-allposts'));

    jQuery('#mor-curses-dtn-wrap').attr('data-allposts', allPosts);

    var targetAllPosts = Number(jQuery('#mor-curses-dtn-wrap').attr('data-allposts'));

    var btnMore = jQuery('#more-curses');

    btnMore.attr('data-currentcat', activeCat.attr('data-subcatid'));
    btnMore.attr('data-allcat', activeCat.attr('data-allcat'));

    btnMore.on('click', function (e) {
      e.preventDefault();

      var curseLeng = jQuery(this).attr('data-lang');
      var curseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var curseAllCat = Number(jQuery(this).attr('data-allcat'));

      var moreCurses = {
        action: 'more_curses',
        currentLang: curseLeng,
        allCat: curseAllCat,
        currentCat: curseCurrentCat
      };

      jQuery.post( myajax.url, moreCurses, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#curses-list').append(response);
        }
      });

      jQuery('#mor-curses-dtn-wrap').addClass('d-none');

    });

  }*/

  //Fancybox Init

  /*jQuery('[data-fancybox]').fancybox({
    protect: true,
    loop : true,
    fullScreen : true,
    scrolling : 'yes',
    image : {
      preload : "auto",
      protect : true
    },
    buttons: [
      "zoom",
      "slideShow",
      "fullScreen",
      "close"
    ]

  });*/

  //Webinar Countdown Timer

  /*if ( jQuery('.courses-template-template-webinar-page').length ){

    let startData = Number(jQuery('#timer').data('start'));

    const date = new Date(startData*1000);

    startData = new Date(date).getTime();

    // Update the count down every 1 second
    let dataTimer = setInterval(function() {

      // Get today's date and time
      let getDate = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = startData - getDate;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"

      jQuery('#timer .day .date').text(days);
      jQuery('#timer .hour .date').text(hours);
      jQuery('#timer .minute .date').text(minutes);
      jQuery('#timer .second .date').text(seconds);


      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(dataTimer);

      }
    }, 1000);

  }*/
    // MAP INIT

    /*function initMap() {
        var location = {
            lat: 48.268376,
            lng: 25.9301257
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
            scrollwheel: false
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        var marker = new google.maps.Marker({ // кастомный марекр + подпись
            position: location,
            title:"Город, Улица, \n" +
            "Дом, Квартира",
            map: map,
            icon: {
                url: ('img/marker.svg'),
                scaledSize: new google.maps.Size(141, 128)
            }
        });

        jQuery.getJSON("map-style_dark.json", function(data) { // подключения стиля для гугл карты
            map.setOptions({styles: data});
        });

    }

    initMap();*/

    // MOB-MENU

    /*jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('#mob-menu').toggleClass('active-menu');
       jQuery(this).toggleClass('open-menu');
    });

    jQuery('#mob-menu a').on('click', function (e) {
        e.preventDefault();

        jQuery('#mob-menu').removeClass('active-menu');
        jQuery('#menu-btn').removeClass('open-menu');
    });*/


    //SCROLL MENU

    /*jQuery(document).on('click', '.scroll-to', function (e) {
        e.preventDefault();

        var href = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(href).offset().top
        }, 1000);

    });*/



    // PHONE MASK

    /*jQuery("input[type=tel]").mask("+38(999) 999-99-99");*/

    // DTA VALUE REPLACE

    /*jQuery('.open-form').on('click', function (e) {
        e.preventDefault();
        var type = jQuery(this).data('type');
        jQuery('#type-form').find('input[name=type]').val(type);
    });*/

    // FORM LABEL FOCUS UP

    /*jQuery('.form-control').on('focus', function() {
        jQuery(this).closest('.form-control').find('label').addClass('active');
    });

    jQuery('.form-control').on('blur', function() {
        var jQuerythis = jQuery(this);
        if (jQuerythis.val() == '') {
            jQuerythis.closest('.form-control').find('label').removeClass('active');
        }
    });*/

    // SCROLL TOP.

    /*jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 300);
    });*/

    // SHOW SCROLL TOP BUTTON.

    /*jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 800) {
            jQuery('.up-btn').fadeIn();
        } else {
            jQuery('.up-btn').fadeOut();
        }
    });*/

    // UTM

    /*function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
    }
    utm_source = getQueryVariable('utm_source') ? getQueryVariable('utm_source') : "";
    utm_medium = getQueryVariable('utm_medium') ? getQueryVariable('utm_medium') : "";
    utm_campaign = getQueryVariable('utm_campaign') ? getQueryVariable('utm_campaign') : "";
    utm_term = getQueryVariable('utm_term') ? getQueryVariable('utm_term') : "";
    utm_content = getQueryVariable('utm_content') ? getQueryVariable('utm_content') : "";

    var forms = jQuery('form');
    jQuery.each(forms, function (index, form) {
        jQueryform = jQuery(form);
        jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
        jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
        jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
        jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
        jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
    });*/

});

// PRELOADER

/*jQuery(window).on('load', function () {

    jQuery('#loader').fadeOut(400);
});*/
