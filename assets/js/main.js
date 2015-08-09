(function($) {
	"use strict"; 

	$('#wqatc-form select').change(function () {

		var $this = $(this),
        val = $this.val(),
        parent = $this.closest('.form-group'),
        display = $this.data('display');

        if( val == 'color' ){
            $('.type-color[data-display="'+ display +'"]').show();
            $('select[data-display="'+ display +'"]').val('color');
        }else{
            $('.type-color[data-display="'+ display +'"]').hide();
            $('select[data-display="'+ display +'"]').val('text');
        }

	});
	

	
})(jQuery);