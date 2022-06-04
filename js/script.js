jQuery(function($){
  $(".l-header__menu").on("click", function () {
    $(".c-cover").toggleClass("active");
    $(".l-sidebar").toggleClass("active");
    $("body").css("position", "fixed");
  });
  $(".c-close").on("click", function () {
    $(".c-cover").toggleClass("active");
    $(".l-sidebar").toggleClass("active");
    $("body").css("position", "");
  });
  $(window).resize(function () {
    let $window = $(this).width();
    let breakpoint = 1025;

    if ($window > breakpoint) {
      $(".l-sidebar").show();
      $(".c-cover").removeClass("active");
      $("body").css("position", "");
    } else {
      $(".l-sidebar").removeClass("active");
      $(".c-cover").removeClass("active");
      $("body").css("position", "");
    }
  });
});


// $(function () {
//   $(".l-header__menu").click(function () {
//     $(this).toggleClass("active");
//     $(".c-cover").fadeToggle();
//     $(".l-sidebar").toggleClass("open");
//     $("body").toggleClass("open");
//   })
//   $(".p-sidebar__close").click(function () {
//     $("c-cover").fadeOut();
//     $(".l-header__menu").removeClass("active");
//     $("body").removeClass("open");
//   });
// })

// jQuery(function ($) {
//   $(".l-header__menu").on("click", function () {
//     $(".c-cover").toggleClass("active");
//     $(".p-sidebar").toggleClass("active");
//     $("body").css("position", "fixed");
//   });
//   $(".c-close").on("click", function () {
//     $(".c-cover").toggleClass("active");
//     $(".p-sidebar").toggleClass("active");
//     $("body").css("position", "");
//   });
//   $(window).resize(function () {
//     let $window = $(this).width();
//     let breakpoint = 1025;

//     if ($window > breakpoint) {
//       $(".p-sidebar").show();
//       $(".c-cover").removeClass("active");
//       $("body").css("position", "");
//     } else {
//       $(".p-sidebar").removeClass("active");
//       $(".c-cover").removeClass("active");
//       $("body").css("position", "");
//     }
//   });
// });
