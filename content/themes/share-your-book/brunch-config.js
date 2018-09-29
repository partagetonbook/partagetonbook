// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'js/app.js'},
  // Je demande à Brunch de rassembler mes css dans
  stylesheets: {
    joinTo: {

      // Tous les dossiers qui proviennent de app seront  rassemblés dans css/app.css
      'css/app.css': /^app/,

      // Tous les dossiers qui proviennent de node_module seront  rassemblés dans css/vendors.css
      'css/vendors.css': /^node_modules/
    }
  }
};

exports.plugins = {
  sass: {
    options: {
      includePaths: ['node_modules/bootstrap/scss']
    }
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  }
};

exports.npm = {
  enabled: true,
  styles: {
    'font-awesome': ['css/font-awesome.css']
  },
  globals: {
    '$': 'jquery',
    'jQuery': 'jquery'
  }
};

exports.modules = {
  autoRequire: {
    'js/app.js': ['app']
  }
};

exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
};
