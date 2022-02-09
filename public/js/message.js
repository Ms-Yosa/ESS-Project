

var receiver_id='';
var my_id = '';
$(document).ready(function(){
    // ajax setup form csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e89c5ea874721c394f59', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        my_id = data.from
        // alert(my_id);
        if (my_id == data.from) {
            $('#' + data.to).click();
        } else if (my_id == data.to) {
            if (receiver_id == data.from) {
                // if receiver is selected, reload the selected user ...
                $('#' + data.from).click();
            } else {
                // if receiver is not seleted, add notification for that user
                var pending = parseInt($('#' + data.from).find('.pending').html());

                if (pending) {
                    $('#' + data.from).find('.pending').html(pending + 1);
                } else {
                    $('#' + data.from).append('<span class="pending">1</span>');
                }
            }
        }
    });

    $('.user').click(function(){
        $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();

        
        receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
        });
    });

    $(document).on('keyup', '.input-text input', function (e) {
        var message = $(this).val();

        // check if enter key is pressed and message is not null also receiver is selected
        if (e.keyCode == 13 && message != '' && receiver_id != '') {
            $(this).val(''); // while pressed enter text box will be empty

            var datastr = "receiver_id=" + receiver_id + "&message=" + message;
            $.ajax({
                type: "post",
                url: "message-send", // need to create this post route
                data: datastr,
                cache: false,
                success: function (data) {

                },
                error: function (jqXHR, status, err) {

                },
                complete: function () {
                     scrollToBottomFunc();
                }
            })
        }
    });
    
});

function scrollToBottomFunc() {
    $('.chat-area-main').animate({
        scrollTop: $('.chat-area-main').get(0).scrollHeight
    }, 0);
}

