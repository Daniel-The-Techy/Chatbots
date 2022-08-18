
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" a href="chat.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="users-details">
            <img src="image/dert.jpg.jpg" alt="">

            <div class="users">
                <h4>Samuel</h4>
                <small>Active Now</small>
            </div>
        </div>
        <div class="Setting">

        </div>

        <div id="Message">


        </div>


        <div class="chat-details">
            <form id='feel' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <input type="text" name="Chat-Message" id="Chat-Message" placeholder="Type.........">
                <button type="submit" name="btn">Send</button>
            </form>
        </div>
    </div>

</body>

<script>
$(document).ready(function() {

    $('#feel').on('submit', function(event) {
        event.preventDefault();
        var form = $(this).serialize();
        $message = $('#Chat-Message').val();
        $val = '<div class="users-message"><p id="message">' + $message + '</p></div>';
        $('#Message').append($val);
        $('#Chat-Message').val('')


        $.ajax({
            url: 'chat.php',
            method: 'Post',
            data: form,
            success: function(result) {
                $reply = '<div class="users-reply"><p id="reply">' + result + '</p></div>';
                $('#Message').append($reply);
                $('#Message').scrollTop($('#Message').scrollHeight);
               

            }
        })


    })
})
</script>

</html>