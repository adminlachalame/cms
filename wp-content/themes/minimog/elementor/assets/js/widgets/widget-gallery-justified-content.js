!function(a){"use strict";function t(t,e){var i=t.find(".minimog-grid"),t=i.data("justified-height")?i.data("justified-height"):440,n=(i.data("justified-max-height")&&i.data("justified-max-height"),i.data("justified-last-row")&&i.data("justified-last-row"),{rowHeight:t,margins:10,border:0,lastRow:"nojustify"});i.imagesLoaded(function(){i.justifiedGallery(n),i.children(".grid-item").elementorWaypoint(function(){var t=this.element||this;a(t).addClass("animate"),this.destroy()},{offset:"90%"})})}a(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/tm-gallery-justified-content.default",t)})}(jQuery);