function slider(){
  $('.bxslider').bxSlider({
      pager: true,
      controls: true,
      speed: 1000,
      mode: 'fade',
      auto: false,
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

function i_have_cookies(){
   $('body').ihavecookies({
       title: "Cookies et confidentialité",
       message: "Ce site utilise des cookies pour vous assurer la meilleure expérience de navigation.",
       link: "politique-de-confidentialite.php",
       delay: 2000,
       expires: 30, // 30 days
       cookieTypes: [
           {
               type: 'Préférences du site',
               value: 'preferences',
               description: 'Il s\'agit de cookies liés aux préférences du site, par ex. se souvenir de votre nom d\'utilisateur, des couleurs du site, etc.'
           },
           {
               type: 'Analytics',
               value: 'analytics',
               description: 'Il s\'agit de cookies liés à l\'analyse d\'audience.'
           },
           {
               type: 'Marketing',
               value: 'marketing',
               description: 'Il s\'agit de cookies liés au marketing.'
           }
       ],

       onAccept: function(){},

       moreInfoLabel: 'Plus d\'informations',
       acceptBtnLabel: 'Accepter les cookies',
       advancedBtnLabel: 'Modifier les cookies',
       uncheckBoxes: false, // Unchecks all checkboxes on page load that have class .ihavecookies
       cookieTypesTitle: 'Sélectionner les cookies à accepter :',
       fixedCookieTypeLabel:'Nécessaire',
       fixedCookieTypeDesc: 'Ce sont des cookies qui sont essentiels pour que le site fonctionne correctement.',
   });
}

function back_top(){
  $('#back-top').hide();
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('#back-top').fadeIn();
    } else {
      $('#back-top').fadeOut();
    }
  });

  $('#back-top').click(function(){
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
  });
  // SCROLL ANCRE
  $('a[href^="#"]').click(function(){
    var the_id = $(this).attr("href");

    $('html, body').animate({
      scrollTop:$(the_id).offset().top       // Régler problème inscrit dans la console
    }, 1000);
    return false;
  });
};

$(document).ready(function(){
  slider();
  menu_active();
  i_have_cookies();
  back_top();
});
