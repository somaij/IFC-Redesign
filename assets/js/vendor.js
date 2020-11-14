"use strict";

/**
 * Vendor JavaScript
 *
 * @since 1.0.0
 */
jQuery(document).ready(function ($) {
  $('a[data-rel^=lightcase]').lightcase({
    maxWidth: 700,
    maxHeight: 1200
  });
  $('#madrasah-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    pauseOnHover: true
  });
});