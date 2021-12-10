if ("serviceWorker" in navigator) {
  navigator.serviceWorker.register("/public/js/serviceWorker.js");
}

importScripts(
  "https://storage.googleapis.com/workbox-cdn/releases/6.2.0/workbox-sw.js"
);

workbox.routing.registerRoute(
  ({ request }) => request.destination === "public/images",
  new workbox.strategies.NetworkFirst()
);
