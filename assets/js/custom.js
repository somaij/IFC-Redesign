"use strict";

/**
 * Custom JavaScript
 *
 * @since 1.0.0
 */
jQuery(document).ready(function ($) {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
    $("#mobile_menu, #mobile").toggleClass("open");
  });
  $("#mobile_menu a").click(function () {
    $("#mobile_menu, #mobile").removeClass("open");
    $(".hamburger").removeClass("is-active");
  });
});