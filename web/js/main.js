/* Operations with books */

$('.add_book').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/book/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            alert('Прочитанные книги Вы можете посмотреть в личном кабинете');
        },
        error: function () {
            alert('Error!');
        }
    });
});

$('#modal-books .modal-body').on('click', '.delete-book', function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/site/delete-book',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            $('#modal-books .modal-body').html(res);
            $('#modal-books').modal();
        },
        error: function() {
            alert('Error!');
        }
    });
});

function getBooks() {
    $.ajax({
        url: '/site/show-books',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            $('#modal-books .modal-body').html(res);
            $('#modal-books').modal();
            // console.log(res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}

$('.rate_book').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var mark = $(this).data('mark');
    $.ajax({
        url: '/book/rate',
        data: {id: id, mark: mark},
        type: 'GET',
        success: function (res) {
            alert('Книга оценена');
        },
        error: function () {
            alert('Error!');
        }
    });
});

/* End of operations with books */

/* Operations with elements */
$('.add_element').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/element/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            alert('Изученные элементы Вы можете посмотреть в личном кабинете');
        },
        error: function () {
            alert('Error!');
        }
    });
});

function getElements() {
    $.ajax({
        url: '/site/show-elements',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            $('#modal-elements .modal-body').html(res);
            $('#modal-elements').modal();
            // console.log(res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}

$('#modal-elements .modal-body').on('click', '.delete-element', function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/site/delete-element',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            $('#modal-elements .modal-body').html(res);
            $('#modal-elements').modal();
        },
        error: function() {
            alert('Error!');
        }
    });
});
/* End of operations with elements */