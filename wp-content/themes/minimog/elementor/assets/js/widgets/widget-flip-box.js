!function(n){"use strict";function e(n,e){var t=n.find(".minimog-flip-box");function i(){var n=t.children(".front-side").find(".layer-content").outerHeight(),e=t.children(".back-side").find(".layer-content").outerHeight(),n=Math.max(n,e);t.height(n)}t.imagesLoaded(function(){i()}),e(window).on("resize",i)}n(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/tm-flip-box.default",e)})}(jQuery);