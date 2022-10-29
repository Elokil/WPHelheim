/*Ce fichier gère les diverses animations du site*/ 

/*animation du menu*/ 
  jQuery(document).on('click','#BurgerIcon', function($){
    if(jQuery(window).width()>1400){
      jQuery('nav').addClass('nav-open');
      jQuery('nav').removeClass('nav-close');
    }
    else{
      jQuery('nav').addClass('nav-open-mobile');
      jQuery('nav').removeClass('nav-close-mobile');
    }
    jQuery('#BurgerIcon').addClass('opacity-hidden');
    jQuery('#BurgerIcon').removeClass('opacity-visible');
    jQuery('#CloseIcon').addClass('opacity-visible');
    jQuery('#CloseIcon').removeClass('opacity-hidden');
    jQuery('#menuList').addClass('opacity-visible');
    jQuery('#menuList').removeClass('opacity-hidden');
  });

  jQuery(document).on('click','#CloseIcon', function($){
    if(jQuery(window).width()>1400){
      jQuery('nav').addClass('nav-close');
      jQuery('nav').removeClass('nav-open');
    }
    else{
      jQuery('nav').addClass('nav-close-mobile');
      jQuery('nav').removeClass('nav-open-mobile');
    }
    jQuery('#CloseIcon').addClass('opacity-hidden');
    jQuery('#CloseIcon').removeClass('opacity-visible');
    jQuery('#menuList').addClass('opacity-hidden');
    jQuery('#menuList').removeClass('opacity-visible');
    jQuery('#BurgerIcon').addClass('opacity-visible');
    jQuery('#BurgerIcon').removeClass('opacity-hidden');
  });