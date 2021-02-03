(function ($) {
    $(document).ready(function () {
        $(document).on('click', '.slots__nav > a', function (e) {
            e.preventDefault();

            let category = $(this).data('category');

            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { action: 'filter' , category: category},
                type: 'post',
                success: function (result) {
                    $('.slots__filter').html(result);
                },
                error: function (result) {
                    console.warn(result);
                }
            });
        });
    });
})(jQuery);

let slotsItems = $('.slot__item');

slotsItems.on('click', function() {
    slotsItems.removeClass('slot__item__active');
    $(this).addClass('slot__item__active');
});