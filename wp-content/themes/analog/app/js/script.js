"use strict";
console.log("yo");

const header = document.querySelector("header");
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const btnHamburger = document.querySelector("#btnHamburger");
const headerMenu = document.querySelector(".header__menuwrapper");

btnHamburger.addEventListener("click", function () {
  if (header.classList.contains("open")) {
    /* Luk hamburger menu
    ============================*/
    header.classList.remove("open");
    nav.classList.remove("nav-open");
    body.style.overflow = "auto";
    headerMenu.style.opacity = 0;
  } else {
    /* Åben hamburger menu
    ============================*/
    header.classList.add("open");
    nav.classList.add("nav-open");
    body.style.overflow = "hidden";
    headerMenu.style.opacity = 1;
  }
});

let path = window.location.pathname;
if (path.includes("find-os")) {
  const map = L.map("map").setView([55.3930661, 10.3943626], 16);

  L.tileLayer(
    "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey=1ae607e81bdf4511aa65fdb2c807ab07"
  ).addTo(map);

  L.marker([55.3930661, 10.3943626])
    .addTo(map)
    .bindPopup(`Analog kaffebar <br> Albanigade 54c ☕`)
    .openPopup();
}

document
  .querySelector(".hero__indicator")
  .addEventListener("click", function (e) {
    e.preventDefault();
    const targetScroll = document.querySelector("#about");

    targetScroll.scrollIntoView({ behavior: "smooth" });
  });

//TODO intersectionobserver
const section = document.querySelector(".hero__container");

const options = {
  root: null, // It is in the viewport
  threshold: 0.85,
};

const observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      nav.classList.add("nav-open-observer");
      console.log("herewego");
    } else {
      nav.classList.remove("nav-open-observer");
    }
  });
}, options);

observer.observe(section);

// Video modal
const videoModal = document.createElement("div");
videoModal.className = "video-modal";
const videoOverlay = document.createElement("div");
videoOverlay.className = "video-overlay";
videoModal.insertAdjacentHTML(
  "beforeend",
  '<iframe src="https://www.youtube.com/embed/qwvxtBlzbO4?vq=hd1080&autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3" width="560" height="315" frameborder="0"></iframe>'
);

document
  .querySelector("#video-listener")
  .addEventListener("click", function (e) {
    e.preventDefault();
    console.log("video afspiller nu");
    body.insertAdjacentElement("beforeend", videoModal);
    body.insertAdjacentElement("beforeend", videoOverlay);

    videoOverlay.classList.add("overlay-visible");
    setTimeout(function () {
      videoModal.classList.add("modal-visible");
      //TODO check if this timeout works
    }, 100);
  });

videoOverlay.addEventListener("click", function (e) {
  setTimeout(function () {
    videoModal.remove();
    videoOverlay.remove();
    videoModal.classList.remove("video-close");
    videoModal.classList.remove("modal-visible");
  }, 700);
  videoModal.classList.add("video-close");
});
