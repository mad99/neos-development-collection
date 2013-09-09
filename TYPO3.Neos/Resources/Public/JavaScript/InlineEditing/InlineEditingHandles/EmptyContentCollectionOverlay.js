define(
	[
		'Library/jquery-with-dependencies'
	],
	function($) {
		return {
			show: function(collectionWidget) {
				if (collectionWidget.element.find('.neos-empty-contentcollection-overlay').length === 0) {
					var $overlay = $('<div />', {'class': 'neos neos-empty-contentcollection-overlay'}).prependTo(collectionWidget.element);

					$overlay.on('click', function() {
						T3.Content.Model.NodeSelection.updateSelection($(this).parents('[rel="typo3:content-collection"]').eq(0));
					});
				}
			},

			hide: function(collectionWidget) {
				collectionWidget.element.find('.neos-empty-contentcollection-overlay').remove();
			}
		};
	}
);