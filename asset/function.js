// smooth scrooling

jQuery(document).ready(function ($) {
  var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: "#navbar-example",
  });

  $("#MyName .NamaSaya").addClass("Muncul");
  $("#MyFoto .rounded-circle").addClass("muncul");
  $("#AboutMe").addClass("Muncul");

  $("#MyCertificates .card").hover(function () {
    $(".star").css({
      transition: "2s",
      color: "#ffd700",
    });
  });

  $(window).scroll(function () {
    var wScrool = $(this).scrollTop();
    var isMobile = window.innerWidth <= 768; // Cek apakah mobile

    // Tentukan nilai berbeda untuk versi mobile
    var fotoSpeed = isMobile ? 8 : 6; // Lebih lambat di mobile
    var nameSpeed = isMobile ? 2 : 2; // Lebih lambat di mobile
    var aboutMeSpeed = isMobile ? 24 : 6; // Sesuaikan kecepatan AboutMe agar tidak terlalu cepat

    // Efek parallax
    $("#MyFoto").css({
      transform: isMobile
        ? "translate(0px," + -wScrool / fotoSpeed + "%)" // Gerak ke atas di mobile
        : "translate(0px," + wScrool / fotoSpeed + "%)", // Gerak ke bawah di desktop
    });

    $("#MyName").css({
      transform: isMobile
        ? "translate(0px," + -wScrool / nameSpeed + "%)" // Gerak ke atas di mobile
        : "translate(0px," + wScrool / nameSpeed + "%)", // Gerak ke bawah di desktop
    });

    $("#AboutMe").css({
      transform: "translate(0px," + -wScrool / aboutMeSpeed + "%)", // Gerak ke atas di semua versi
    });

    //parallax untuk tulisan myproject

    if (wScrool > $("#MyProjects").offset().top - 500) {
      $("#MyProjects .efek2").addClass("Muncul");
    }

    //parralax efek pada card my projects

    if (wScrool > $("#MyProjects").offset().top - 500) {
      $("#MyProjects .card ").addClass("muncul");
    } else {
      $("#MyProjects .card ").removeClass("muncul");
    }

    //parallax efek untuk tulisan contact

    if (wScrool > $("#MyContacts").offset().top - 500) {
      $(".efek4").addClass("Muncul");
    }

    //parallax efek untuk card my contact
  });
});
