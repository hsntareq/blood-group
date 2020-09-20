console.log('action js working');

$('.btn_delete').on('click', function (e) {
    e.preventDefault();
    if (confirm('Do you want to delete? #'+$(this).data('id'))) {
        $(this).parents('form').submit()
    }
})
