!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:n})},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=43)}({43:function(e,t,r){e.exports=r(44)},44:function(e,t){$(document).ready(function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),console.log("eSaksi @2018"),$(".icheck").iCheck({checkboxClass:"icheckbox_square-blue",radioClass:"iradio_square-blue",increaseArea:"20%"}),$(".toggle-sidebar").on("click",function(e){e.preventDefault(),$(".sidebar").toggleClass("small"),$(".content").toggleClass("big"),$(".content-head").toggleClass("big"),$("#vmap").width("100%")}),$(".datetimepicker").datepicker({uiLibrary:"bootstrap4",format:"yyyy-mm-dd"})})}});