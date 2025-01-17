// JQuery functions; document ready ensures nothing is run until the page loads
$(document).ready(function () {
  // Add "active" class to menu.
  //
  // See https://stackoverflow.com/questions/72050328/add-active-class-to-navbar-element-when-clicked.
  document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
      link.classList.add("fw-bold");
      link.setAttribute("aria-current", "page");
    }
  });

  // JavaScript for Headroom
  var elem = document.querySelector("header");
  var headroom = new Headroom(elem, {
    offset: 40,
    classes: {
      initial: "animated",
      pinned: "slideDown",
      unpinned: "slideUp",
    },
  });
  headroom.init();
});
