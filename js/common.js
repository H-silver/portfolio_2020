// nav

function openNav() {
  var menu = document.getElementById("menu");
  var mql = window.matchMedia("screen and (max-width: 780px)");
  if (mql.matches) {
    menu.style.width = "80%";
    menu.style.paddingTop = "10%";
    document.getElementById("btn-close").style.width = "64px";
  } else {
    menu.style.width = "50%";
    menu.style.paddingTop = "5%";
    document.getElementById("btn-close").style.width = "100px";
  }
}
function closeNav() {
  var menu = document.getElementById("menu");
  var mql = window.matchMedia("screen and (max-width: 780px)");
  if (mql.matches) {
    menu.style.width = "0";
    menu.style.paddingTop = "10%";
    document.getElementById("btn-close").style.width = "0";
  } else {
    menu.style.width = "0";
    menu.style.paddingTop = "5%";
    document.getElementById("btn-close").style.width = "0";
  }
}
// window.onclick = function (e) {
//   var menu = document.getElementById("menu");
//   if (e.target != menu) {
//     menu.closeNav();
//   }
// };

// scroll reveal
var rafId = null;
var delay = 200;
var lTime = 0;

function scroll() {
  var scrollTop = $(window).scrollTop();
  var height = $(window).height();
  var visibleTop = scrollTop + height;
  $(".reveal").each(function () {
    var $t = $(this);
    if ($t.hasClass("reveal_visible")) {
      return;
    }
    var top = $t.offset().top;
    if (top <= visibleTop) {
      if (top + $t.height() < scrollTop) {
        $t.removeClass("reveal_pending").addClass("reveal_visible");
      } else {
        $t.addClass("reveal_pending");
        if (!rafId) requestAnimationFrame(reveal);
      }
    }
  });
}
function reveal() {
  rafId = null;
  var now = performance.now();

  if (now - lTime > delay) {
    lTime = now;
    var $ts = $(".reveal_pending");
    $($ts.get(0)).removeClass("reveal_pending").addClass("reveal_visible");
  }

  if ($(".reveal_pending").length >= 1) rafId = requestAnimationFrame(reveal);
}

$(scroll);
$(window).scroll(scroll);
$(window).e(function () {
  $(".reveal").removeClass("reveal_visible").removeClass("reveal_pending");
  lTime = performance.now() + 500;
  var top = $(window).scrollTop();
  $(window).scrollTop(top === 0 ? 1 : top - 1);
});
