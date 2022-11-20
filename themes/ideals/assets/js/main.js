(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

document.addEventListener('DOMContentLoaded', function () {
  // Init slider
  (function () {
    var merchSliderNode = document.querySelector('[data-slider=merch]');
    if (!merchSliderNode) {
      return;
    }
    var merchSlider = tns({
      container: merchSliderNode,
      controlsPosition: 'bottom',
      controlsText: ['', ''],
      controlsContainer: '.slider-buttons',
      navContainer: '.slider-dots',
      mouseDrag: true,
      swipeAngle: 30,
      loop: false
    });
  })();

  // Toggle search
  (function () {
    var searchBox = document.querySelector('.search');
    searchBox === null || searchBox === void 0 ? void 0 : searchBox.addEventListener('click', function (e) {
      var searchBtn = e.target.closest('.search-button');
      if (!searchBtn) {
        return;
      }
      searchBox.toggleAttribute('data-active');
    });
  })();

  // Toggle dropdown - mobile
  (function () {
    var navMenu = document.querySelector('.nav-menu');
    if (!navMenu) {
      return;
    }
    navMenu.addEventListener('click', function (e) {
      var dropdown = e.target.closest('.dropdown');
      if (!dropdown) {
        return;
      }
      e.preventDefault();
      dropdown.toggleAttribute('show-dropdown');
    });
  })();

  // Toggle nav - mobile
  (function () {
    var hamburger = document.querySelector('[data-activate="nav"]');
    if (!hamburger) {
      return;
    }
    hamburger.addEventListener('click', function (e) {
      e.target.closest('.header-main').toggleAttribute('show-nav');
    });
  })();
}, true);
window.addEventListener('load', function () {
  var headerMain = document.querySelector('[data-watch=scroll]');

  // Watch scroll - header
  (function () {
    window.addEventListener('scroll', function () {
      var scroll = window.scrollY;
      if (scroll > 0) {
        headerMain.toggleAttribute('data-scroll', true);
      } else {
        headerMain.toggleAttribute('data-scroll', false);
      }
    });
  })();
}, true);

},{}]},{},[1]);
