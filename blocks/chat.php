<div class="chat">
    <div class="messages">

    </div> 
    <input type="text" name="text_chat" id="text_chat" placeholder="Введите сообщение">
    <div class="error-mess" id="error-block"></div>
    <button type="button" id="send_chat">Отправить</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $('#send_chat').click(function(){
        let text = $('#text_chat').val();
        $.ajax({
            url: '../ajax/chat.php',
            type: 'POST',
            cache: false,
            data: {
                'text': text
            },
            dataType: 'html',
            success: function(data){
                if(data === "Done"){
                    $("#error-block").hide();
                    $('#text_chat').val("");
                } else {
                    $("#error-block").show();
                    $("#error-block").text(data);
                }
            }
        });
    });

    function loadMessages() {
        $.ajax({
            url: '../ajax/load_messages.php',
            type: 'GET',
            success: function(data) {
                $('.messages').html(data);
            }
        });
    }

    $(document).ready(function() {
        loadMessages();
        setInterval(loadMessages, 5000);
    });
</script>