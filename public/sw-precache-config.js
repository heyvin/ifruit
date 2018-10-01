module.exports = {
    staticFileGlobs: [
        'img/themes_2/**.*',
        'offline.html'
    ],
    runtimeCaching: [
        {
            urlPattern: '*',
            handler: (request, values, options) => {
                // If this is NOT a navigate request, such as a request for
                // an image, use the cacheFirst strategy.
                if (request.mode !== 'navigate') {
                    return toolbox.cacheFirst(request, values, options);
                }

                // If it's a navigation request, use the networkFirst strategy.
                return toolbox.networkFirst(request, values, options)
                    .catch(() => {
                        return caches.match('offline.html', {ignoreSearch: true});
                    });
            }
        },
        {
            urlPattern: /cdn\.ampproject\.org/,
            handler: 'networkFirst'
        }
    ],
    importScripts: ['service-worker-import.js']
};
