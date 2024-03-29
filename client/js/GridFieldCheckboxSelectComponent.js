/**
 * Handles selection and check-all as well as confirmation.
 *
 * @subpackage javascript
 */
(function($){
	$.entwine('ss', function($) {

		$('.ss-gridfield .multiselect').entwine({
			onclick: function (e) {
				e.stopPropagation();
			}
		});

		$('.ss-gridfield .multiselect-all').entwine({
			onclick: function () {
				this.closest('table').find('.multiselect').prop('checked', this.prop('checked'));
			}
		});

		$('#action_archiveselected').entwine({
			onclick: function(e) {
				if (this.data('confirm') && !confirm(this.data('confirm'))) {
					e.preventDefault();
					e.stopPropagation();
					return false;
				}
				this._super(e);
			}
		});

	});
})(jQuery);
