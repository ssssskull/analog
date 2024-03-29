/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./app/js/script.js":
/*!**************************!*\
  !*** ./app/js/script.js ***!
  \**************************/
/***/ (() => {



console.log("Hej smukke!");
var header = document.querySelector("header");
var nav = document.querySelector("nav");
var body = document.querySelector("body");
var btnHamburger = document.querySelector("#btnHamburger");
var headerMenu = document.querySelector(".header__menuwrapper");
var scrollIndicator = document.querySelector(".hero__indicator");
var buttons = document.querySelector(".assortment__cta");
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
var path = window.location.pathname;

if (path.includes("find-os")) {
  var map = L.map("map", {
    scrollWheelZoom: false
  }).setView([55.3930661, 10.3943626], 17);
  L.tileLayer("https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey=1ae607e81bdf4511aa65fdb2c807ab07").addTo(map);
  L.marker([55.3930661, 10.3943626]).addTo(map).bindPopup("Analog kaffebar <br> Albanigade 54c \u2615").openPopup();
}

if (document.body.contains(scrollIndicator)) {
  scrollIndicator.addEventListener("click", function (e) {
    e.preventDefault();
    var targetScroll = document.querySelector("#about");
    targetScroll.scrollIntoView({
      behavior: "smooth"
    });
  });
  document.querySelector(".about__row2 a").addEventListener("click", function (e) {
    e.preventDefault();
    var targetScroll2 = document.querySelector("#more");
    targetScroll2.scrollIntoView({
      behavior: "smooth"
    });
  }); // Video modal

  var videoModal = document.createElement("div");
  videoModal.className = "video-modal";
  var videoOverlay = document.createElement("div");
  videoOverlay.className = "video-overlay";
  videoModal.insertAdjacentHTML("beforeend", '<iframe src="https://www.youtube.com/embed/1kCe5UQSz1k?vq=hd1080&autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3" width="560" height="315" frameborder="0" allowfullscreen></iframe>');
  document.querySelector("#video-listener").addEventListener("click", function () {
    body.insertAdjacentElement("beforeend", videoModal);
    body.insertAdjacentElement("beforeend", videoOverlay);
    videoOverlay.classList.add("overlay-visible");
    setTimeout(function () {
      videoModal.classList.add("modal-visible");
    }, 100);
  });
  videoOverlay.addEventListener("click", function () {
    setTimeout(function () {
      videoModal.remove();
      videoOverlay.remove();
      videoModal.classList.remove("video-close");
      videoModal.classList.remove("modal-visible");
    }, 700);
    videoModal.classList.add("video-close");
  });
}

if (document.body.contains(buttons)) {
  buttons.addEventListener("click", function (e) {
    e.preventDefault();
    var buttonsClick = document.querySelectorAll("a[data-btn]");
    if (!buttonsClick) return false;
    var targetScroll = e.target.dataset.btn;
    document.querySelector("section[data-target=\"".concat(targetScroll, "\"]")).scrollIntoView({
      behavior: "smooth"
    });
  });
}

if (window.getComputedStyle(btnHamburger).getPropertyValue("display") === "grid") {
  var section = document.querySelector(".hero__container");
  var options = {
    root: null,
    // It is in the viewport
    threshold: 0.85
  };
  var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) {
        nav.classList.add("nav-open-observer");
      } else {
        nav.classList.remove("nav-open-observer");
      }
    });
  }, options);
  observer.observe(section);
}

/***/ }),

/***/ "./app/scss/style.scss":
/*!*****************************!*\
  !*** ./app/scss/style.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/script": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkanalog"] = self["webpackChunkanalog"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./app/js/script.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./app/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;