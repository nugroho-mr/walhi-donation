'use strict';

function formatMoney(n, c, d, t) {
  var c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;

  return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};

$(document).ready( function() {

  if( $('#donation__form__page-container').length ) {
    var donationFormOwl = $('#donation__form__page-container');
    donationFormOwl.owlCarousel({
      items: 1,
      margin: 20,
      mouseDrag: false,
      touchDrag: false
    });
    $('.donation__form__pagination-button').click(function() {
      donationFormOwl.trigger('to.owl.carousel',$(this).data('target'));
      $('.donation__form__pagination-button').removeClass('active');
      $(this).addClass('active');
    });
  }

  if( $('.field__donation').length ) {

    $('.field__donation').focus( function() {
      $(this).val($(this).val().substring(3).replace(/\./g,''));
    });

    $('.field__donation').focusout( function() {
      if( $(this).val() && $(this).val() > 0 ) {
        var formatedNumber = 'Rp ' + formatMoney($(this).val(),0,',','.');
        $('#' + $(this).data('post-field')).val($(this).val());
        $(this).val(formatedNumber);
      } else {
        $(this).val('');
        $('#' + $(this).data('post-field')).val(0);
        console.log($('#' + $(this).data('post-field')).val());
      }
    });

    $('.field__donation').keypress(validateNumber);

    $('.donation-options button').click( function() {
      var formatedNumber = 'Rp ' + formatMoney($(this).val(),0,',','.');
      $('#' + $(this).data('post-field')).val($(this).val());
      $(this).closest('.donation__form__page').find('.field__donation').val(formatedNumber);
    });

  }

  if( $('#donator-phone').length ) {
    $('#donator-phone').keypress(validateNumber);
  }

  if( $('.go-to-top').length ) {
    $('.go-to-top').click( function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1000);
    });
  }

});
