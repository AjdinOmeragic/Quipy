$(document).ready(function () {
  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({ pageNotFound: "error_404" }); // initialize

  // define routes
  app.route({ view: "about", load: "about.html" });
  app.route({ view: "dashboard", load: "dashboard.html" });
  app.route({ view: "quiz", load: "quiz.html" });
  app.route({ view: "quizResults", load: "quizResults.html" });
  app.route({ view: "quizzes", load: "quizzes.html" });
  app.route({ view: "user", load: "user.html" });

  // run app
  app.run();
});
