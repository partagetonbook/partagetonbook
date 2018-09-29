var app = {

  init: function(){

    // Je cible tous les a ayant des # nommés(sauf ceux qui sont juste des # seul)
    // et je déclanche la fonction smoothScroll au clic
    $('a[href*="#"]:not([href="#"])').on('click', app.smoothScroll);


  },

  smoothScroll: function(evt) {

    // L'evenement par defaut sera enlevé
    evt.preventDefault();

    // Je cible mon element en jQuery
    var target = $(this.hash);

    // Je veux savoir sa distance par rapport au haut de la page (top)
                  // console.log(target.offset().top);
        var heightHash = (target.offset().top);


    // Grace au length je peux savoir si l'element existe
    if (target.length) {

      // Je cible soit le html ou le body
      $('html, body').animate ({

        // calcul de la position jusqu'à mon element - Argument 1
        scrollTop: heightHash
        // et sa vitesse - Argument 2
      }, 1200);
    }
  }
};

$(app.init);
