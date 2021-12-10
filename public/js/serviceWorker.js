importScripts(
  "https://storage.googleapis.com/workbox-cdn/releases/6.2.0/workbox-sw.js"
);
workbox.routing.registerRoute(
  /\.(?:js|css|webp|png|svg)$/,
  new workbox.strategies.StaleWhileRevalidate()
);
workbox.routing.registerRoute(
  /(\/|\.html)$/,
  new workbox.strategies.NetworkFirst()
);
