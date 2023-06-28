$(document).ready(function() {
    let isDeleteMode = false;

    $('#toggleLinks').click(function() {
        $('#linkList').fadeToggle(function() {
            if ($('#linkList').is(':visible')) {
                $('#toggleLinks').text('Verberg linkjes');
            } else {
                $('#toggleLinks').text('Maak linkjes zichtbaar');
            }
        });
    });

    $('#addLink').click(function() {
        let name = $('#linkName').val();
        let url = $('#linkURL').val();
        if (name && url) {
            $('#linkList').append('<li><a href="' + url + '">' + name + '</a></li>');
        } else {
            alert('Both fields must be filled in.');
        }
    });

    $('#deleteMode').click(function() {
        isDeleteMode = !isDeleteMode;
        if (isDeleteMode) {
            $('body').css('background', '#ffcccc');
        } else {
            $('body').css('background', '#ffffff');
        }
    });

    $(document).on('click', function(event) {
        if (isDeleteMode && !$(event.target).is('#deleteMode')) {
            $(event.target).remove();
        }
    });
});
