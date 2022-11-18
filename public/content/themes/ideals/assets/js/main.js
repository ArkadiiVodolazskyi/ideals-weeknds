(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

document.addEventListener('DOMContentLoaded', function () {
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
}, true);

},{}]},{},[1]);
