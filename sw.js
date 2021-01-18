
importScripts('js/sw-utils.js');

const STATIC_CACHE = 'static-v1';
const DYNAMIC_CACHE = 'dynamic-v1';
const INMUTABLE_CACHE = 'inmutable-v1';

const APP_SHELL = [
    'index.html',
    'registrar.php',
    'recuperar.php',
    'pages/no-encontrado.html',
    'css/style.css',
    'img/favicon.ico',
    'img/Biz.png',    
    'img/Biz500.png', 
    'img/BizCircle.png', 
    'img/BizGrey.png', 
    'img/BizLogin.png', 
    'img/logo.png', 
    'img/huellas.png',
    'img/no-img.jpg',
    'img/redsocial_google.png',
    'js/app.js',
    'js/sw-utils.js'
];

const APP_SHELL_INMUTABLE = [
    'https://fonts.googleapis.com/css?family=Quicksand:300,400',
    'https://fonts.googleapis.com/css?family=Lato:400,300',
    'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
    'js/libs/jquery.js'
];


//Instalacion del SW
self.addEventListener('install', e => {

    const cacheStatic = caches.open( STATIC_CACHE ).then(cache =>
        cache.addAll( APP_SHELL ));

    const cacheInmutable = caches.open( INMUTABLE_CACHE ).then(cache =>
        cache.addAll( APP_SHELL_INMUTABLE ));

    e.waitUntil( Promise.all( [ cacheStatic, cacheInmutable]) );
});


self.addEventListener('activate', e => {
    const respuesta = caches.keys().then( keys => {

        keys.forEach( key => {

            // static
            if (  key !== STATIC_CACHE && key.includes('static') ) {
                return caches.delete(key);
            }

            // dynamic
            if (  key !== DYNAMIC_CACHE && key.includes('dynamic') ) {
                return caches.delete(key);
            }

        });

    });



    e.waitUntil( respuesta );
});


self.addEventListener('fetch', e => {


    // 2- Cache with Network Fallback
    const respuesta = caches.match( e.request ).then( res => {

            if ( res ) {
                return res;
            } else {
                // No existe el archivo
                return fetch( e.request ).then( newRes => {

                    return actualizarCacheDinamico( DYNAMIC_CACHE, e.request, newRes );
                });
            }
    });


    e.respondWith( respuesta );

});