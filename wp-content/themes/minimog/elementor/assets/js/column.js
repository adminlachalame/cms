!function(s){"use strict";class t extends elementorModules.frontend.handlers.Base{getDefaultSettings(){return{selectors:{container:".elementor-column-wrap",content:".elementor-widget-wrap"},classes:{isActive:"tm-collapsible--active",isOpen:"tm-collapsible--open"},speed:300,prevDevice:"",isDomOptimized:elementorFrontend.config.experimentalFeatures.hasOwnProperty("e_dom_optimization")&&elementorFrontend.config.experimentalFeatures.e_dom_optimization}}getDefaultElements(){}toggle(e){var t=this.getElementSettings(),n=elementorFrontend.getCurrentDeviceMode(),s=t.tm_collapsible_on;t.prevDevice!==n&&(-1!==s.indexOf(n)?!0===e?this.reactivate():this.activate():this.deactivate()),t.prevDevice=n}activate(){var e=this.getElementSettings(),t=this.getSettings("classes");this.$element.addClass(t.isActive),"open"===e.tm_collapsible_status&&this.$element.hasClass(t.isActive)?(this.elements.$content.show(),this.$element.addClass(t.isOpen)):(this.elements.$content.hide(),this.$element.removeClass(t.isOpen))}deactivate(){var e=this.getSettings("classes");this.$element.removeClass(e.isActive),this.$element.removeClass(e.isOpen),this.elements.$content.show()}reactivate(){this.deactivate(),this.activate()}onElementChange(e){-1!==["collapsible","collapsible_on","tm_collapsible_status"].indexOf(e)&&this.toggle(!0)}bindEvents(){var e,t=this,n=this.getElementSettings();void 0!==n.tm_collapsible&&"yes"===n.tm_collapsible&&(e=window.innerWidth,elementorFrontend.elements.$window.on("resize",function(){e!==window.innerWidth&&t.toggle(),e=window.innerWidth}))}generateHeading(){var e=this.getElementSettings(),t=e.tm_collapsible_title,e=e.tm_collapsible_title_size,n=this.$element.children(".tm-collapsible__title"),n=(n.length&&n.remove(),s(document.createElement(e)));n.addClass("tm-collapsible__title").removeClass("has-text"),void 0!==t&&t&&n.addClass("has-text").text(t),this.elements.$container.prepend(n)}onInit(){super.onInit();var e=this.getElementSettings();if(void 0!==e.tm_collapsible&&"yes"===e.tm_collapsible){e=this.getSettings("selectors");this.getSettings("isDomOptimized")&&this.$element.children("elementor-column-wrap").length<=0&&this.$element.children(".elementor-widget-wrap").removeClass("elementor-element-populated").wrap('<div class="elementor-column-wrap elementor-element-populated">'),this.elements=this.elements||{},this.elements.$container=this.findElement(e.container),this.elements.$content=this.findElement(e.content),this.isEdit&&this.$element.addClass("elementor-column__tm-collapsible");const t=this.getSettings(),n=this.getSettings("classes");this.generateHeading(),this.toggle(),this.$element.find(".tm-collapsible__title").on("click",e=>{if(!this.$element.hasClass(n.isActive))return!1;e.preventDefault(),this.$element.toggleClass(n.isOpen),this.elements.$content.slideToggle(t.speed)})}}}s(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/column",e=>{elementorFrontend.elementsHandler.addHandler(t,{$element:e})})})}(jQuery);