(()=>{"use strict";var e,o={788:()=>{console.log("Hej smukke!");var e=document.querySelector("header"),o=document.querySelector("nav"),t=document.querySelector("body"),r=document.querySelector("#btnHamburger"),n=document.querySelector(".header__menuwrapper"),a=document.querySelector(".hero__indicator"),i=document.querySelector(".assortment__cta");if(r.addEventListener("click",(function(){e.classList.contains("open")?(e.classList.remove("open"),o.classList.remove("nav-open"),t.style.overflow="auto",n.style.opacity=0):(e.classList.add("open"),o.classList.add("nav-open"),t.style.overflow="hidden",n.style.opacity=1)})),window.location.pathname.includes("find-os")){var c=L.map("map",{scrollWheelZoom:!1}).setView([55.3930661,10.3943626],17);L.tileLayer("https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey=1ae607e81bdf4511aa65fdb2c807ab07").addTo(c),L.marker([55.3930661,10.3943626]).addTo(c).bindPopup("Analog kaffebar <br> Albanigade 54c ☕").openPopup()}if(document.body.contains(a)){a.addEventListener("click",(function(e){e.preventDefault(),document.querySelector("#about").scrollIntoView({behavior:"smooth"})})),document.querySelector(".about__row2 a").addEventListener("click",(function(e){e.preventDefault(),document.querySelector("#more").scrollIntoView({behavior:"smooth"})}));var s=document.createElement("div");s.className="video-modal";var l=document.createElement("div");l.className="video-overlay",s.insertAdjacentHTML("beforeend",'<iframe src="https://www.youtube.com/embed/1kCe5UQSz1k?vq=hd1080&autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3" width="560" height="315" frameborder="0"></iframe>'),document.querySelector("#video-listener").addEventListener("click",(function(){t.insertAdjacentElement("beforeend",s),t.insertAdjacentElement("beforeend",l),l.classList.add("overlay-visible"),setTimeout((function(){s.classList.add("modal-visible")}),100)})),l.addEventListener("click",(function(){setTimeout((function(){s.remove(),l.remove(),s.classList.remove("video-close"),s.classList.remove("modal-visible")}),700),s.classList.add("video-close")}))}if(document.body.contains(i)&&i.addEventListener("click",(function(e){if(e.preventDefault(),!document.querySelectorAll("a[data-btn]"))return!1;var o=e.target.dataset.btn;document.querySelector('section[data-target="'.concat(o,'"]')).scrollIntoView({behavior:"smooth"})})),"grid"===window.getComputedStyle(r).getPropertyValue("display")){var d=document.querySelector(".hero__container");new IntersectionObserver((function(e,t){e.forEach((function(e){e.isIntersecting?o.classList.remove("nav-open-observer"):o.classList.add("nav-open-observer")}))}),{root:null,threshold:.85}).observe(d)}},990:()=>{}},t={};function r(e){var n=t[e];if(void 0!==n)return n.exports;var a=t[e]={exports:{}};return o[e](a,a.exports,r),a.exports}r.m=o,e=[],r.O=(o,t,n,a)=>{if(!t){var i=1/0;for(d=0;d<e.length;d++){for(var[t,n,a]=e[d],c=!0,s=0;s<t.length;s++)(!1&a||i>=a)&&Object.keys(r.O).every((e=>r.O[e](t[s])))?t.splice(s--,1):(c=!1,a<i&&(i=a));if(c){e.splice(d--,1);var l=n();void 0!==l&&(o=l)}}return o}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[t,n,a]},r.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={42:0,938:0};r.O.j=o=>0===e[o];var o=(o,t)=>{var n,a,[i,c,s]=t,l=0;if(i.some((o=>0!==e[o]))){for(n in c)r.o(c,n)&&(r.m[n]=c[n]);if(s)var d=s(r)}for(o&&o(t);l<i.length;l++)a=i[l],r.o(e,a)&&e[a]&&e[a][0](),e[i[l]]=0;return r.O(d)},t=self.webpackChunkanalog=self.webpackChunkanalog||[];t.forEach(o.bind(null,0)),t.push=o.bind(null,t.push.bind(t))})(),r.O(void 0,[938],(()=>r(788)));var n=r.O(void 0,[938],(()=>r(990)));n=r.O(n)})();