<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title></title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
        function AjaxFormRequest(result_id) {
            var name = $('input[name*="txt4code"]').val();
            $.ajax({
                type: "POST",
                url: "coder.php",
                data: { txt4code: txt4code }
            }).done(function(msg) {
                $('#' + result_id).html(msg);
            });
        }
    </script>

</head>
<body>

<div style="margin: auto; padding: 2px; width: 410px; text-align: center;">
    <form action="coder.php" class="text" method="post" accept-charset="utf-8">
        <p>Введите для кодирования</p><p>&nbsp;</p>
        <p style="text-align: right;">
            <label>Сообщение:</label><textarea type="focus" name="txt4code"></textarea>
        </p>

        <input type="submit" value="Отправить" onclick="AjaxFormRequest('result_id')">
    </form>
</div>

<div style="margin: auto; padding: 2px; width: 410px; text-align: center;">
        <p style="text-align: right;">
            <textarea type="focus" name="txt_coded" id="result_id">

            </textarea>
        </p>
</div>

</body>
</html>