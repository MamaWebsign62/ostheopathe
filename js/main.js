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

function i_have_cookies(){
   $('body').ihavecookies({
       title: "Cookies et confidentialité",
       message: "Ce site utilise des cookies pour vous assurer la meilleure expérience sur notre site.",
       link: "politique-de-confidentialite.php",
       delay: 2000,
       expires: 30, // 30 days
       cookieTypes: [
           {
               type: 'Site Preferences',
               value: 'preferences',
               description: 'These are cookies that are related to your site preferences, e.g. remembering your username, site colours, etc.'
           },
           {
               type: 'Analytics',
               value: 'analytics',
               description: 'Cookies related to site visits, browser types, etc.'
           },
           {
               type: 'Marketing',
               value: 'marketing',
               description: 'Cookies related to marketing, e.g. newsletters, social media, etc'
           }
       ],

       onAccept: function(){},

       moreInfoLabel: 'More information',
       acceptBtnLabel: 'Accept Cookies',
       advancedBtnLabel: 'Customise Cookies',
       uncheckBoxes: false, // Unchecks all checkboxes on page load that have class .ihavecookies
       cookieTypesTitle: 'Select cookies to accept',
       fixedCookieTypeLabel:'Necessary',
       fixedCookieTypeDesc: 'These are cookies that are essential for the website to work correctly.',
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
