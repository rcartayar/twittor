var url = window.location.href;
var swLocation = '/bitzpwa/sw.js';

if ( navigator.serviceWorker ) {

    if ( url.includes('localhost') ) {
        swLocation = 'sw.js';
    }

    navigator.serviceWorker.register( swLocation );
}





// ===== Codigo de la aplicación





// Globals
