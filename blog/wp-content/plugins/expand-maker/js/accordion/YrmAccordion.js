function YrmAccordion() {
	this.init();
}

YrmAccordion.prototype.init = function () {
	jQuery('.yrm-accordion-item-header').bind('click', function (e) {
		e.preventDefault();
		var parentItem = jQuery(this).parents('.yrm-accordion-item').first();
		var statusExpanded = parentItem.data('expanded');

		var accordionContent = parentItem.find('.yrm-accordion-item-content');
		accordionContent.removeClass('yrm-show');

		if (!statusExpanded) {
			parentItem.find('.accordion-header-icon').removeClass('fa-chevron-right').addClass('fa-chevron-down')
			accordionContent.slideToggle(500, 'linear', function () {
				parentItem.data('expanded', true);
			});
		}
		else {
			parentItem.find('.accordion-header-icon').addClass('fa-chevron-right').removeClass('fa-chevron-down')
			accordionContent.slideToggle(500, 'linear', function () {
				parentItem.data('expanded', false);
			});
		}
	})
}

jQuery(document).ready(function () {
	new YrmAccordion();
});