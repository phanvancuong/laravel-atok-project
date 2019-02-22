
$(window).load(function() {
  $('#loader').hide();

  // if (currentlyOnSaleIds.length != 0) {
  //   currentlyOnSaleIds.forEach(function(id) {
  //     $('.design_timer_' + id).countdown({
  //       until: $.countdown.UTCDate(+2, currentlyOnSaleTimers[id]),
  //       format: 'HMS',
  //       layout: '<span class="digit">{hn}</span><span class="timer-range">H :</span> <span class="digit">{mnn}</span><span class="timer-range">M :</span> <span class="digit">{snn}</span><span class="timer-range">S</span>',
  //       serverSync: serverTime
  //     });
  //   });
  // }
  // var $container = $('#user-pics');

  // $container.isotope({
  //   itemSelector: '.gallery',
  //   resizable: false,
  //   masonry: {columnWidth: $container.width() / 12}
  // });
  // $(window).smartresize(function() {
  //   $container.isotope({
  //     masonry: {columnWidth: $container.width() / 12}
  //   });
  // });

  var circleHeight = $('.gallery-image').height() / 2 - 40;
  $(".gallery-big .overlay-circle").css({'margin-top': circleHeight});
  $("#on-sale .overlay-circle").css({'margin-top': circleHeight});

  // initializeFlexSlider();
});

$(document).ready(function($) {
  $('.fb-comments').attr('data-width', $('#homepage .mega-slider > li').width());

  $('a.email').nospam({
    replaceText: true,
    filterLevel: 'low'
  });

  if ($('.container').find('ol.faq').length != 0 && location.hash != '') {
    openFaqQuestion(location.hash);
  }

  $("#instagram-feed").lightSlider({
    item: 4,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed: 600,
    pager: false,
    responsive: [
      {
        breakpoint: 1100,
        settings: {
          item: 3,
          slideMove: 1,
          slideMargin: 6,
        }
      },
      {
        breakpoint: 800,
        settings: {
          item: 2,
          slideMove: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          item: 1,
          slideMove: 1
        }
      }
    ]
  })
});

function openFaqQuestion(name) {
  name = name.replace('#', '');

  $('.faq .' + name).addClass('active');
  $('.faq .' + name).children('.pull-right').html('<span style="color: #ff0000">-</span>');
  $('.faq .' + name).children('p').toggle();

  $('html, body').animate({
    scrollTop: $('.faq .' + name).offset().top - 50
  }, 500);
}

$(function() {
  $('.show-tooltip').tooltip();


  //FAQ TOGGLE
  $.fn.toggleClick = function() {
    var functions = arguments
    return this.click(function() {
      var iteration = $(this).data('iteration') || 0
      functions[iteration].apply(this, arguments)
      iteration = (iteration + 1) % functions.length
      $(this).data('iteration', iteration)
    })
  }

  $('.faq-question').toggleClick(function() {
    $(this).addClass('active');
    $(this).children('.pull-right').html('<span style="color: #ff0000">-</span>');
    $(this).children('p').toggle();
  }, function() {
    $(this).removeClass('active');
    $(this).children('.pull-right').html("+");
    $(this).children('p').toggle();
  })

  $('#cats-activator').toggleClick(function() {
    $('#shop').addClass('active');
  }, function() {
    $('#shop').removeClass('active');
  });

  $(".unfollow").hover(function() {
      $(this).html('<span class="glyphicon glyphicon-remove"></span> ' + gettext_unfollow);
      $(this).css({'border': 'solid 1px #bf0002', 'background': '#bf0002'});
    },
    function() {
      $(this).html('<span class="glyphicon glyphicon-ok"></span> ' + gettext_following);
      $(this).css({'border': 'solid 1px #79b767', 'background': '#79b767'});
    }
  );

  $(function() {
    $('.currency-mobile a').toggleClick(function() {
      $(this).addClass('active');
      $('#currency-mobile-select').animate({height: "toggle"}, 200);
    }, function() {
      $(this).removeClass('active');
      $('#currency-mobile-select').animate({height: "toggle"}, 200);
    })
  });

  $('#AccountActivation').submit(function(event) {
    var activation_link = '';
    if ($('#activation_username').val() && $('#activation_code').val()) {
      activation_link = encodeURIComponent($('#activation_username').val()) + '/' + encodeURIComponent($('#activation_code').val()) + '/';
    }

    window.location.replace('/user/activation/' + activation_link);
    event.preventDefault();
  });
});

function serverTime() {
  var time = null;
  $.ajax({
    url: '/time/',
    async: false, dataType: 'text',
    success: function(text) {
      time = new Date(text);
    }, error: function(http, message, exc) {
      time = new Date();
    }
  });
  return time;
}

function checkAuth() {
  var logged = (function() {
    var isLogged = null;
    $.ajax({
      'async': false,
      'global': false,
      'url': '/user/logged/',
      'success': function(resp) {
        isLogged = resp;
      }
    });
    return isLogged;
  })();
  return logged;
}

function checkUsernameAvailability() {
  $.ajax(
    {
      url: '/user/check-login-availability/',
      type: 'post',
      data: {
        username: $('#username-check').val()
      },
      success: function(response) {
        var responseData = jQuery.parseJSON(response);

        $('#availability-button').attr('class', 'btn btn-default dim-btn show-tooltip');
        $('#availability-icon').attr('class', 'glyphicon glyphicon-question-sign');

        if (responseData.status == 0) {
          $('#availability-button').tooltip('destroy').addClass('check-it').attr('data-original-title', responseData.message).tooltip({html: true}).tooltip('show');
          $('#availability-icon').attr('class', 'glyphicon glyphicon-ok');
        }
        if (responseData.status == 1) {
          $('#availability-button').tooltip('destroy').addClass('failed').attr('data-original-title', responseData.message).tooltip({html: true}).tooltip('show');
          $('#availability-icon').attr('class', 'glyphicon glyphicon-remove');
        }
        if (responseData.status == 2) {
          $('#availability-button').tooltip('destroy').addClass('failed').attr('data-original-title', responseData.message).tooltip({html: true}).tooltip('show');
          $('#availability-icon').attr('class', 'glyphicon glyphicon-remove');
        }
      }
    });
}

$.fn.isOnScreen = function() {
  if (this.offset() != undefined) {
    var win = $(window);

    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
  }
};

$(window).scroll(function() {
  if ($('#jumbo-slider').isOnScreen() == true) {
    if (!$('#jumbo-slider').find('ul').hasClass('slides') && $('#jumbo-slider').find('.loader').length == 0) {
      $('#jumbo-slider').html('<div class="loader">' + gettext_please_wait_loading + '</div>');
      $.ajax(
        {
          url: '/limited/jumbo-slider/',
          type: 'get',
          cache: true,
          success: function(data) {
            var responseData = jQuery.parseJSON(data);

            if (responseData.status == 1) {
              $('#jumbo-slider').html(responseData.content);

              $('#jumbo-slider').flexslider({
                animationLoop: true,
                slideshow: true
              });
            }
          }
        });
    }
  }
});


// $(function() {
//   var bannersLimitedButtons = document.querySelectorAll('.limited-banners-hover');
//   var prevText;
//   var prevWidth;
//   if (bannersLimitedButtons) {
//     bannersLimitedButtons.forEach(function (bannerButton) {
//       bannerButton.addEventListener('mouseover', function () {
//         prevText = this.textContent;
//         prevWidth = this.offsetWidth;
//         this.textContent = gettext_enter;
//         this.style.width = prevWidth + 'px';
//       });
//       bannerButton.addEventListener('mouseleave', function () {
//         this.textContent = prevText;
//       })
//     })
//   }
// });



$(document).ready(function($) {
  const tableGenerate = document.querySelector('.table-generate');  //pobierz element z klasą table-generate
  let exceptions = [];

  if ((tableGenerate)&&(window.innerWidth < 992)){  //jezeli istnieje element z klasą table-generate i mobile
    const headElements = document.querySelectorAll(`.table-generate thead tr td`);  //zmienna przechowywująca wszystkie elementy head
    const bodyElementsNumber = document.querySelectorAll(`.table-generate tbody tr`).length;  //zmienna przechowująca ilość wierszy z produktami

    headElements.forEach((headElement) => {  //ukryj wszystkie elementy z head
      // headElement.style.display = 'none';
        headElement.parentNode.removeChild(headElement);
    });


    //sprawdzanie warunków dla poszczególnych tabel
    const orderHistoryTable = document.querySelector('.table-order-history');  //zmienna przechowywująca element tablicy order history
    if (orderHistoryTable){  //jeżeli w DOM isnieje tablica order history
      exceptions = ['Details', 'Zwroty', 'Szczegóły', 'Date', 'Data'];  //podstaw wyjątki
      for (let i = 0; i < bodyElementsNumber; i++) {  //dla wszystkich produktów
        const lastElement = document.querySelector(`.table-generate tbody tr:nth-child(${i+1}) td:last-child`); //zmienna przechowywująca ostatni element w produkcie
        const lastElementWithoutSpaces = String(lastElement.textContent).replace(/\s/g, '');  //zmienna przechowywująca ostatni element w produkcie bez spacji
        if (!lastElementWithoutSpaces.length) {  //jeżeli ostani element jest pusty
          const orphanButton = document.querySelector(`.table-generate tbody tr:nth-child(${i+1}) td:nth-last-child(2)`);  //weź przedostatni element
          orphanButton.style.gridColumn = '1 / span 2';  //rozszerz go
        }
      }
    }

    const orderDetailsTable = document.querySelector('.table-order-details');  //zmienna przechowywująca element tablicy order details
    if (orderDetailsTable){
        exceptions = ['Item'];
        document.querySelector('.checkout-box').style.padding = '0';
        //usuwanie nazw produktów i dopisywanie ich gdzie indziej
        const productNames = document.querySelectorAll('.table-order-details td:nth-child(4) span strong');
        const productNamesGrey = document.querySelectorAll('.table-order-details td:nth-child(4) span em');
        let nameIndex = 0;
        productNames.forEach((productName)=>{
          if (String(productName.textContent).toLowerCase() === 'T-shirt'.toLowerCase()){
            productNamesGrey[nameIndex].textContent = `T-shirt ${productNamesGrey[nameIndex].textContent}`
          }
          productName.parentNode.removeChild(productName);
          nameIndex++;
        });
        const paymentImg = document.querySelector('.order-details-addresses-payment');
        if (paymentImg){
            const img = document.querySelector('.order-details-addresses-payment img');
            const alt = img.alt;
            const newChild = document.createElement('span');
            newChild.textContent = alt;
            img.parentNode.appendChild(newChild);
            img.parentNode.removeChild(img);
        }
    }

    const accountAddresses = document.querySelector('.table-generate.table-addresses');
    if (accountAddresses){
        exceptions = ['operation', 'operacja'];
    }

    const artistSalesHistory = document.querySelector('.table-artist-sales-history');
    if (artistSalesHistory){
        exceptions = ['design', 'projekt'];
    }

    for (let i = 0; i < bodyElementsNumber; i++){  //dla wszystkich produktów
     const focusedRowElements = document.querySelectorAll(`.table-generate tbody tr:nth-child(${i+1}) td`); //zmienna przechowywująca wszystkie pola w danym produkcie
     for (let j = 0; j < focusedRowElements.length; j++){  //dla każdego pola w danym produkcie
         const newChild = document.createElement('span');  //stwórz nowe dziecko span
          newChild.textContent = headElements[j].textContent;  //dodaj do niego content z head elementu z tym samym indexem
          newChild.classList.add('content-head');  //dodaj do niego klasę

          let isThereException = false;  //flaga czy nastąpił wyjątek
          exceptions.forEach((exception) => {  //dla każdej nazwy wyjątków
              if (newChild.textContent.toLowerCase() === exception.toLowerCase()) {
                  isThereException = !isThereException;
              }
          });
          if ((!isThereException)&&(newChild.textContent)) focusedRowElements[j].appendChild(newChild);  //dołączenie span jeżeli nie ma wyjątku i textContent != null
      }
  }
  }
});