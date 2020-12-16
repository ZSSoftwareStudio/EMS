// Write all of your Javascript Code in Here.
window.onscroll = function () {
  if (window.scrollY > 80) {
    $("#myNav").removeClass("navbar-dark");
    $("#myNav").removeClass("bg-blank");
    $("#myNav").addClass("navbar-light");
    $("#myNav").addClass("bg-light");
  } else {
    $("#myNav").removeClass("navbar-light");
    $("#myNav").removeClass("bg-light");
    $("#myNav").addClass("navbar-dark");
    $("#myNav").addClass("bg-blank");
  }
};
