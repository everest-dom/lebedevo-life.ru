window.addEventListener("DOMContentLoaded",function(){$(function(){$(".sandwich-button").click(function(){$(".main_menu_ul").slideToggle()})});$(function(){$(".action_home").on("click",function(a){a.preventDefault();$(".action_home_box").addClass(" action_home_box_active")});$(".close_button_action").on("click",function(){$(".action_home_box").removeClass(" action_home_box_active")})});$(function(){$(".opinion-video__preview").click(function(){var a=$(this),b=a.next().attr("data-src");a.next().attr("src",
b);(new Promise(function(b,c){a.next().on("load",function(){b()})})).then(function(b){a.removeClass("active")})})});$(function(){$("body").click(function(a){(a.target.classList.contains("close-button-span")||a.target.classList.contains("modal-progects"))&&$(".modal-youtube").each(function(){this.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}',"*")})})});(new WOW).init();$(function(){$(".rslides").responsiveSlides({auto:!0,speed:500,timeout:4E3,pager:!1,nav:!0,random:!1,
pause:!1,pauseControls:!0,prevText:"<",nextText:">",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:function(){},after:function(){}})});$(function(){jQuery(".text_review").each(function(){var a=jQuery(this).html(),b=a;300<b.length&&(b=b.substring(0,300),jQuery(this).html(b+'<div class="read_more"> \u0447\u0438\u0442\u0430\u0442\u044c \u043f\u043e\u043b\u043d\u043e\u0441\u0442\u044c\u044e &rarr;</div>'));jQuery(this).append('<div class="full_text" style="display: none;">'+
a+"</div>")});jQuery(".read_more").click(function(){jQuery(this).parent().html(jQuery(this).parent().find(".full_text").html())})});(function() {
      document.querySelector('.mapYa__preview').addEventListener('click', () => {
        ymaps.ready(function() {
            c = new ymaps.Map("mapYa", {
              center: [57.624036, 39.893772],
              zoom: 15,
              searchControlProvider: "yandex#search"
            });
            myPlacemark = new ymaps.Placemark(
              [57.624036, 39.893772],
              {},
              {
                iconLayout: "default#image",
                iconImageHref: "img/map-marker-icon.png",
                iconImageSize: [50, 50],
                iconImageOffset: [-10, -42]
              }
            );
            c.geoObjects.add(myPlacemark);
            c.behaviors.disable("scrollZoom");
            c.behaviors.disable("drag");
          });
          var c; 

          document.querySelector('.mapYa__preview').style.display = "none";
      });
  })();$(function(){$("a.toplink").click(function(){$("html, body").animate({scrollTop:$($(this).attr("href")).offset().top+"px"},{duration:500,easing:"swing"});return!1})});$('input[type="tel"]').mask("+7(999)999-99-99")});