"use strict";
console.log("yo");

const header = document.querySelector("header");
const body = document.querySelector("body");
const btnHamburger = document.querySelector("#btnHamburger");
const headerMenu = document.querySelector(".header__menuwrapper");

btnHamburger.addEventListener("click", function () {
  if (header.classList.contains("open")) {
    /* Luk hamburger menu
    ============================*/
    header.classList.remove("open");
    body.style.overflow = "auto";
    headerMenu.style.opacity = 0;
  } else {
    /* Åben hamburger menu
    ============================*/
    header.classList.add("open");
    body.style.overflow = "hidden";
    headerMenu.style.opacity = 1;
  }
});

var map = L.map("map").setView([55.3930661, 10.3943626], 16);

L.tileLayer(
  "https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey=1ae607e81bdf4511aa65fdb2c807ab07",
  {
    attribution: "© OpenStreetMap contributors",
  }
).addTo(map);

L.marker([55.3930661, 10.3943626])
  .addTo(map)
  .bindPopup("Find os her! :)")
  .openPopup();
