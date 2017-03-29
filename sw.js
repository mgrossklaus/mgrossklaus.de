'use strict';

const CACHE_VERSION = 38,
      CACHE_NAME    = 'mgrsskls',
      CURRENT_CACHE = CACHE_NAME + '-v' + CACHE_VERSION,
      URLS_TO_CACHE = [
        '/offline.html',
        '/images/me.jpg',
        '/images/me.webp'
      ];

self.addEventListener('install', event => {
  event.waitUntil(
    caches
      .open(CURRENT_CACHE)
      .then(cache => {
        return cache.addAll(URLS_TO_CACHE);
      })
      .then(() => {
        return self.skipWaiting();
      })
  );
});

self.addEventListener('fetch', event => {
  if (event.request.method === 'GET' && event.request.headers.get('accept').includes('text/html')) {
    // Only fall back for HTML documents.
    var request = event.request;
    // `fetch()` will use the cache when possible, to this examples
    // depends on cache-busting URL parameter to avoid the cache.
    event.respondWith(
      fetch(request).catch(error => {
        // `fetch()` throws an exception when the server is unreachable but not
        // for valid HTTP responses, even `4xx` or `5xx` range.
        return caches.open(CURRENT_CACHE).then(cache => {
          return cache.match('offline.html');
        });
      })
    );
  } else {
    event.respondWith(
      caches.match(event.request)
        .then(response => {
          // Cache hit - return response
          if (response) {
            return response;
          }

          // IMPORTANT: Clone the request. A request is a stream and
          // can only be consumed once. Since we are consuming this
          // once by cache and once by the browser for fetch, we need
          // to clone the response.
          var fetchRequest = event.request.clone();

          return fetch(fetchRequest).then(
            response => {
              // Check if we received a valid response
              if (!response || response.status !== 200 || response.type !== 'basic') {
                return response;
              }

              // IMPORTANT: Clone the response. A response is a stream
              // and because we want the browser to consume the response
              // as well as the cache consuming the response, we need
              // to clone it so we have two streams.
              var responseToCache = response.clone();

              caches.open(CURRENT_CACHE)
                .then(cache => {
                  cache.put(event.request, responseToCache);
                });

              return response;
            }
          );
        })
    );
  }
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (CURRENT_CACHE !== cacheName) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

