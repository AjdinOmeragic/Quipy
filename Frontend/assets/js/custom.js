$(document).ready(function () {
  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({ pageNotFound: "error_404" }); // initialize

  // define routes
  app.route({ view: "about", load: "about.html" });
  app.route({ view: "home", load: "home.html" });
  app.route({ view: "meditation", load: "meditation.html" });
  app.route({ view: "mood", load: "moodTracking.html" });
  app.route({ view: "userSetings", load: "userSetings.html" });
  app.route({ view: "journaling", load: "journaling.html" });

  // run app
  app.run();
});
