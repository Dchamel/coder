<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title></title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    function AjaxFormRequest() {
        var name = $('textarea[name="txt4decode"]').val();
        $.ajax({
            type: "POST",
            url: "decoder.php",
            data: { txt4decode: name }
        }).done(function(msg) {
            $('#result_id').html(msg);
        });
    }
</script>

</head>
<body>

<div style="margin: auto; padding: 2px; width: 410px; text-align: center;">
    <!-- <form action="coder.php" class="text" method="post" accept-charset="utf-8"> !-->
    <div class="text">
        <p>Введите для раскодирования</p><p>&nbsp;</p>
        <p style="text-align: right;">
            <label>Сообщение:</label><textarea type="focus" name="txt4decode"></textarea>
        </p>

        <input type="submit" value="Раскодировать" onclick="AjaxFormRequest()">
        <input type="submit" value="Закодировать" onclick="window.location = 'coder_html.php'">
        <p style="text-align: right;">
            <label>Раскодированное:</label><textarea type="focus" name="txt_coded" id="result_id"></textarea>
        </p>

    </div>

</div>

<!-- </form> !-->

</div>



</body>
</html>