window.onload = function () {
  if (!sessionStorage.getItem("visited")) {
    sessionStorage.setItem("visited", "true");
    location.reload();
  } else {
    sessionStorage.removeItem("visited");
  }
};
