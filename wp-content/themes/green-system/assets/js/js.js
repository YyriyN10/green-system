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
   * Header auto adaptive
   * @type {jQuery|HTMLElement}
   */

  const autoVisibleMenuChecker = function(){

    const headerElement = $('.site-header');

    if ( headerElement.find('.main-visible').length ){

      let headerLogoW = headerElement.find('.main-logo').outerWidth();
      let headerContainer = Number(headerElement.find('.content').outerWidth() - 24);
      let headerMenuBtn = headerElement.find('.menu-btn').outerWidth();
      let headerVisibleMenu = Number( headerElement.find('.main-visible').outerWidth() + 24);

      let headerFreeSpace = headerContainer - headerLogoW - headerMenuBtn - headerVisibleMenu;

      if ( headerFreeSpace < 50 ){
        headerElement.find('.main-visible').addClass('d-none');
        headerElement.find('.menu-btn').addClass('only');
      }else{
        headerElement.find('.main-visible').removeClass('d-none');
        headerElement.find('.menu-btn').removeClass('only');
      }
    }
  }

  autoVisibleMenuChecker();

  /**
   * Screen height and width
   */

  let windWid = $(window).width();
  let windHei = $(window).height();

  $(window).resize(function () {
    windWid = $(window).width();
    windHei = $(window).height();

    autoVisibleMenuChecker();
  });

  /**
   * Menu btn
   */

  $('#menu-btn').on('click', function (e) {

    e.preventDefault();

    /*$(this).toggleClass('active');*/
    $('header').toggleClass('active-menu');
    $('.header-navigation').toggleClass('open-menu');
    $('html').toggleClass("fixedPosition");
    $('main').toggleClass('open');

  });

  $('#menu-btn-close').on('click', function (e) {

    e.preventDefault();

    $('header').toggleClass('active-menu');
    $('.header-navigation').toggleClass('open-menu');
    $('html').toggleClass("fixedPosition");
    $('main').toggleClass('open');

  });


  $(document).scroll(function() {

    let currentScroll = $(this).scrollTop();

    if ( currentScroll > ( windHei / 3) ) {
      $('.home-main-screen .advantages-list').addClass('active');

    } else {
      $('.home-main-screen .advantages-list').removeClass('active');
    }

    if (currentScroll > 1) {
      jQuery('.site-header').addClass('fixed-header');
    } else {
      jQuery('.site-header').removeClass('fixed-header');
    }

  });

  //Fixed Menu

  let positionScrollHeader = jQuery(window).scrollTop();

  $(window).scroll(function() {

    let scroll = $(window).scrollTop();

    if(scroll > positionScrollHeader) {

      if ( $('.header-navigation.open-menu').length ){
        $('.site-header').addClass('fixed-header-visible');
      }else{
        $('.site-header').removeClass('fixed-header-visible');
      }

    } else {
      $('.site-header').addClass('fixed-header-visible');

    }

    positionScrollHeader = scroll;
  });

  /**
   * Why us slider
   */

  $('#why-us-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots:true
  });

  /**
   * Product and case slider
   */

  if( $('#previews-slider').length ){

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
      autoplay: true,
      autoplaySpeed: 2000,
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
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '#previews-slider'

    });

    $('.general-information .change-slide').click(function(e){
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
   * Reviews slider
   */

  if ( $('.reviews').length ){

    $('#reviews-slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            fade: true,
          }
        }
      ]
    });

    $('.reviews .prev').click(function(e){
      e.preventDefault();

      $('#reviews-slider').slick('slickPrev');
    });

    $('.reviews .next').click(function(e){
      e.preventDefault();

      $('#reviews-slider').slick('slickNext');
    });

    $('.reviews-slider .slide.text-slide').each(function () {

      let thisSlide = $(this);

      let textLeng = thisSlide.find('.text').text().length;

      if ( textLeng > 189 ){
        thisSlide.find('.info').addClass('more');
      }
    })

    const reviewsAllSlides = $('#reviews-slider .slide').length;
    const reviewsClonedSlides = $('#reviews-slider .slide.slick-cloned').length;
    const reviewsSlideCounter = $('.reviews .slider-controls .counter');
    const reviewsSlidesCount = reviewsAllSlides - reviewsClonedSlides;

    if ( reviewsSlidesCount < 10 ){
      reviewsSlideCounter.find('.all').text('0' + reviewsSlidesCount);
    }else{
      reviewsSlideCounter.find('.all').text(reviewsSlidesCount);
    }

    $('#reviews-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

      if ( (nextSlide + 1) < 10 ){
        reviewsSlideCounter.find('.current').text('0' + (nextSlide + 1));
      }else{
        reviewsSlideCounter.find('.current').text(nextSlide + 1);
      }

    });

    $('#reviews-slider .slide').on('click', function (e) {

      e.preventDefault();

      const thisSlide = $(this);

      let slideIndex = Number(thisSlide.attr('data-slick-index'));

      $('#reviewsModal').modal("show");

      $('#reviews-modal-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true
      });

      $('#reviews-modal-slider').slick('slickGoTo', slideIndex);

      $('.reviews-modal .prev').click(function(e){
        e.preventDefault();

        $('#reviews-modal-slider').slick('slickPrev');
      });

      $('.reviews-modal .next').click(function(e){
        e.preventDefault();

        $('#reviews-modal-slider').slick('slickNext');
      });

      $('.reviews-modal .slide.text-slide').each(function () {

        let thisSlide = $(this);

        let textLeng = thisSlide.find('.text').text().length;

        if ( textLeng > 189 ){
          thisSlide.find('.info').addClass('more');
        }
      })

      const reviewsModalAllSlides = $('#reviews-modal-slider .slide').length;
      const reviewsModalClonedSlides = $('#reviews-modal-slider .slide.slick-cloned').length;
      const reviewsModalSlideCounter = $('.reviews-modal .slider-controls .counter');
      const reviewsModalSlidesCount = reviewsModalAllSlides - reviewsModalClonedSlides;

      if ( reviewsModalSlidesCount < 10 ){
        reviewsModalSlideCounter.find('.all').text('0' + reviewsModalSlidesCount);
      }else{
        reviewsModalSlideCounter.find('.all').text(reviewsModalSlidesCount);
      }

      $('#reviews-modal-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

        if ( (nextSlide + 1) < 10 ){
          reviewsModalSlideCounter.find('.current').text('0' + (nextSlide + 1));
        }else{
          reviewsModalSlideCounter.find('.current').text(nextSlide + 1);
        }

        $('#reviewsModal').find('video').attr('src', '');

        $('#reviews-modal-slider .slide .play-btn').fadeIn(200);

      });

      $('#reviews-modal-slider .slide.slick-current.video-slide video').attr('src', thisSlide.find('.play-btn').attr('data-video'));
      $('#reviews-modal-slider .slide.slick-current.video-slide .play-btn').fadeOut(200);


      $('#reviews-modal-slider .slide .play-btn').on('click', function (e) {

        e.preventDefault();

        let thisVideo = $(this);

        $('#reviews-modal-slider .slide.slick-current.video-slide video').attr('src', thisVideo.attr('data-video'));

        thisVideo.fadeOut(200);

      });
    });

    $('#reviewsModal').on('hide.bs.modal', function () {

      $('#reviewsModal').find('video').attr('src', '');

      $('#reviews-modal-slider').slick('unslick');

      $('#reviews-modal-slider .slide .play-btn').fadeIn(200);

    });
  }

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
   * Project categories home
   */

  if ( $('.page-template-template-home .our-projects').length ){

    function changeProjectCategory( catID){

      let data = {

        action: 'change_project_category',
        catId: catID

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#our-projects-list').html(response);
        }
      });
    }

    const moreProjectBtn = $('#more-project-main');

    $('.our-projects__category-list .our-projects__category').on('click', function (e) {

      e.preventDefault();

      $('.our-projects__category-list .our-projects__category.active').removeClass('active');

      let thisCategory = $(this);

      thisCategory.addClass('active');

      let currentCatId = Number(thisCategory.find('a').attr('data-cat-id'));
      let countPosts = Number(thisCategory.find('a').attr('data-all-projects'));

      changeProjectCategory( currentCatId);

      if ( countPosts > 4 ){

        moreProjectBtn.fadeIn(400);
        moreProjectBtn.attr('data-cat-id', currentCatId);

      }else{
        moreProjectBtn.fadeOut(400);
        moreProjectBtn.attr('data-cat-id', '');
      }

    });

    moreProjectBtn.on('click', function (e) {

      e.preventDefault();

      let thisBtn = $(this);

      thisBtn.fadeOut(400);

      let catId = Number(thisBtn.attr('data-cat-id'));

      let data = {

        action: 'main_more_projects',
        catId: catId,

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#our-projects-list').append(response);
        }
      });


    })
  }

  /**
   * Features more
   */

  if ( $('.features').length ){

    const featuresBlock = $('.features');

    featuresBlock.find('.button').on('click', function(e){
      e.preventDefault();

      $(this).fadeOut(200);

      featuresBlock.find('.more-text').fadeIn(400);
    });
  }

  /**
   * Project categories power plant
   */

  if ( $('.page-template-template-power-plant .our-projects').length ){

    function changeProjectCategoryPlant( catID, andCatID ){

      let data = {

        action: 'change_project_category_plant',
        catId: catID,
        andCatId: andCatID

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#our-projects-list').html(response);
        }
      });
    }

    let allProjectsCount = Number($('.our-projects__category.active a').attr('data-all-projects'));

    const moreProjectBtn = $('#more-project-main');

    if ( allProjectsCount <= 4 ){
      moreProjectBtn.fadeOut(400);
    }

    $('.our-projects__category-list .our-projects__category').on('click', function (e) {

      e.preventDefault();

      $('.our-projects__category-list .our-projects__category.active').removeClass('active');

      let thisCategory = $(this);

      thisCategory.addClass('active');

      let currentCatId = Number(thisCategory.find('a').attr('data-cat-id'));
      let countPosts = Number(thisCategory.find('a').attr('data-all-projects'));
      let andCategoryId = Number(thisCategory.find('a').attr('data-cat-and'));

      changeProjectCategoryPlant( currentCatId, andCategoryId );

      if ( countPosts > 4 ){

        moreProjectBtn.show(400);
        moreProjectBtn.attr('data-cat-id', currentCatId);

      }else{
        moreProjectBtn.hide(400);
        moreProjectBtn.attr('data-cat-id', '');
      }

    });

    moreProjectBtn.on('click', function (e) {

      e.preventDefault();

      let thisBtn = $(this);

      moreProjectBtn.fadeOut(400);

      let catId = Number(thisBtn.attr('data-cat-id'));
      let andId = Number(thisBtn.attr('data-cat-and'));

      let data = {
        action: 'more_projects_plant',
        catId: catId,
        andId: andId,
      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#our-projects-list').append(response);
        }
      });

    })
  }

  /**
   * Product power plant category
   */

  if ( $('.solar-power-plants-types').length ){

    function changeProductPlantCategory( catID, andCatID ){

      let data = {

        action: 'change_product_plant_category',
        catId: catID,
        andCatId: andCatID

      };

      $.post( green_system_ajax.url, data, function(response) {

        if($.trim(response) !== ''){

          $('#power-plants-list').html(response);
        }

      });
    }

    const powerPlantTypeItem = $('.solar-power-plants-types__item');

    powerPlantTypeItem.each(function (index) {

      let thisType = $(this);

      if ( index == 0 ){

        thisType.addClass('active');

        let defaultCatId = Number(thisType.find('a').attr('data-cat-id'));
        let defaultCatAndId = Number(thisType.find('a').attr('data-cat-and'));

        changeProductPlantCategory(defaultCatId, defaultCatAndId);

      }

      thisType.on('click', function (e) {

        e.preventDefault();

        let thisItem = $(this);

        $('.solar-power-plants-types__item.active').removeClass('active');

        thisItem.addClass('active');

        let catId = Number(thisItem.find('a').attr('data-cat-id'));
        let catAndId = Number(thisItem.find('a').attr('data-cat-and'));

        changeProductPlantCategory(catId, catAndId);
      });

    });

  }

  /**
   * Accordion progress emulator
   */

  if ( $('#accordion-what-you-get').length ){

    const accordionCard = $('#accordion-what-you-get .card');

    let cardCount = accordionCard.length;

    accordionCard.each(function (index) {

      let thisCard = $(this);
      let currentIndex = index + 1;

      if ( currentIndex == 1 ){

        thisCard.find('.bth').removeClass('collapsed');
        thisCard.find('.collapse').addClass('show');
      }

      thisCard.find('.progress-wrapper span').css({'width' : '' + ( (100 / cardCount) * currentIndex) + '%'})

    })


  }

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

  /**
   * Phone mask
   */

  $("input[type=tel]").mask("+38(099) 999-99-99");

  /**
   * UTM
   */

  function getQueryVariable(variable) {
      let query = window.location.search.substring(1);
      let vars = query.split('&');
      for (let i = 0; i < vars.length; i++) {
          let pair = vars[i].split('=');
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

  let forms = $('form');
  $.each(forms, function (index, form) {
      jQueryform = $(form);
      jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
      jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
      jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
      jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
      jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
  });

  /**
   * Form integration
   */

  $('form').on('submit', function (e) {

    e.preventDefault();

    const thisForm = $(this);

    let utmSource = thisForm.find('input[name = utm_source]').val();
    let utmMedium = thisForm.find('input[name = utm_medium]').val();
    let utmCampaign = thisForm.find('input[name = utm_campaign]').val();
    let utmTerm = thisForm.find('input[name = utm_term]').val();
    let utmContent = thisForm.find('input[name = utm_content]').val();

    let name = thisForm.find('input[name = name]').val();
    let phone = thisForm.find('input[name = phone]').val();
    let email = thisForm.find('input[name = email]').val();

    let action = thisForm.find('input[name = action]').val();
    let siteUrl = thisForm.find('input[name = site_url]').val();
    let siteLang = thisForm.find('input[name = site-lang]').val();
    let pageName = thisForm.find('input[name = page-name]').val();
    let pageLink = thisForm.find('input[name = page_link]').val();
    let formDescription = thisForm.find('input[name = form_description]').val();

    /*const formData = {
      action: action,
      pageName: pageName,
      pageLink: pageLink,
      name: name,
      lastName: lastName,
      phone: phone,
      email: email,
      birthday: birthday,
      message: message,
      utmSource: utmSource,
      utmMedium: utmMedium,
      utmCampaign: utmCampaign,
      utmTerm: utmTerm,
      utmContent: utmContent
    }*/

    let thxPage = siteUrl + '/dyakuyemo';

    if ( siteLang == 'en' ){
      thxPage = siteUrl + '/thank';
    }

    window.location.href = thxPage;

    /*$.post( ua_teens_ajax.url, formData, function(response) {

      window.location.href = thxPage;

    });*/

  });

  // Lazy load

  /*jQuery('.lazy').lazy();*/





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



});

// PRELOADER

/*jQuery(window).on('load', function () {

    jQuery('#loader').fadeOut(400);
});*/
