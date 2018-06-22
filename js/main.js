function slider(){
  $('.bxslider').bxSlider({
      pager: true,
      controls: true,
      speed: 1000,
      mode: 'fade',
      auto: true,
      pause: 5000,
  });
}

function menu_active(){
  var path = window.location.pathname;
  var location = path.substr(path.lastIndexOf('/')+1);
  var rel = "";
  switch (location) {
    case 'nourrisson.php':
      rel = "nourrisson";
    break;
    case 'femme-enceinte.php':
      rel = "femme";
    break;
    case 'medecine-chinoise.php':
      rel = "medecine";
    break;
    case 'personne-agee.php':
      rel = "agee";
    break;
    case 'contact.php':
      rel = "contact";
    break;
    case 'plan-acces.php':
      rel = "plan";
    break;
    default:
      rel = "accueil";
  }
  $("#menu-burger li[rel='"+rel+"'], #menu a[rel='"+rel+"']").addClass("active");
}

$(document).ready(function(){
  slider();
  menu_active();
});
